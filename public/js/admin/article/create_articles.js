import ConfirmDialog from "/js/component/confirm_dialog.js";
import { createTagSelector } from "/js/component/tag_selector.js";

const confirmDialog = new ConfirmDialog();

const btnNext = document.getElementById("btn-next");
const btnPrev = document.getElementById("btn-prev");
const btnSubmit = document.getElementById("submit");

const titleThEle = document.getElementById("thai-title");
const titleEnEle = document.getElementById("eng-title");

const coverThai = document.getElementById("thai-cover");
const coverEng = document.getElementById("eng-cover");

const overlay = document.getElementById("imageOverlay");
const expandedImage = document.getElementById("expandedImage");
const closeButton = document.querySelector(".close-button");

const coverImgInput = document.querySelectorAll(".cover-image-input");

let tagSelector;

function makeid(length = 40) {
    var result = "";
    var characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(
            Math.floor(Math.random() * charactersLength)
        );
    }
    return result;
}

function makeHash(blob) {
    var a = new FileReader();
    a.readAsArrayBuffer(blob);
    a.onloadend = function () {
        hash = SparkMD5.ArrayBuffer.hash(a.result);
    };

    return hash;
}

async function tag_selector() {
    const tagss = [];
    const tagFetch = document.querySelectorAll(".tag-fetch div");
    tagFetch.forEach((tag) => {
        tagss.push({
            id: tag.getAttribute("data-id"),
            name: tag.querySelector("span").textContent,
        });
    });
    tagSelector = createTagSelector("tag-selector-container", tagss);

    if (location.href.includes("edit")) {
        document.querySelectorAll(".selected-tag-fetch div").forEach((tag) => {
            tagSelector.selectOptionById(tag.getAttribute("data-id"));
        });
    }
}

function initListener() {
    btnNext.addEventListener("click", function () {
        // console.log('click btn-next');
        btnPrev.style.visibility = "visible";
        btnSubmit.style.display = "inline-block";
        this.style.display = "none";

        if (!location.href.includes("edit"))
            document.querySelector(".eng .note-editable").innerHTML =
                $("#summernote1").summernote("code");
    });

    btnPrev.addEventListener("click", function () {
        function goback(e) {
            btnNext.style.display = "inline-block";
            btnSubmit.style.display = "none";
            e.style.visibility = "hidden";
            $("#carousel-example-generic").carousel(0);
        }

        if (location.href.includes("edit")) {
            goback(this);
        } else {
            confirmDialog.confirmAction(
                "กลับไปใช่ไหม",
                "ข้อมูลภาษาอังกฤษที่คุณเขียนจะหายไป",
                "ไม่",
                "กลับไป",
                '<button class="confirm-btn active confirm-yes" id="confirmYes" data-target="#carousel-example-generic" data-slide-to="0" > Yes </button>',
                async () => {
                    goback(this);
                }
            );
        }
    });

    btnSubmit.addEventListener("click", function () {
        const titleTh = titleThEle.value;
        const titleEn = titleEnEle.value;
        const slug = titleEn.replace(" ", "-");

        async function fetchApi() {
            btnNext.style.display = "inline-block";
            btnSubmit.style.display = "none";
            window.showLoading();

            async function uploadImg(formData, filename = makeid()) {
                formData.append("folder", `article/${slug}`);
                formData.append("filename", filename + ".png");
                const response = await fetch("/admin/upload_image", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector(
                            'meta[name="csrf-token"]'
                        ).content,
                    },
                    body: formData,
                });
                if (!response.ok) {
                    return Error("Failed to upload image. Please try again.");
                }
                let path = await response.text();
                path = path.replace("public/", "/storage/");
                return path;
            }

            async function uploadTagImage(tag) {
                const note = $(tag).summernote("code");
                const noteDiv = document.createElement("NoneTag");
                noteDiv.innerHTML = note;
                
                const imagePromises = [];

                for (const img of Array.from(noteDiv.querySelectorAll("img"))) {
                    const src = img.getAttribute("src");
                    if (src.startsWith("data:image")) {
                        const blob = await fetch(src).then((res) => res.blob());
                        const readFilePromise = new Promise((resolve, reject)=>{
                            var a = new FileReader();
                            a.readAsArrayBuffer(blob);
                            a.onloadend = async function () {
                                try {
                                    const formData = new FormData();
                                    const filename = SparkMD5.ArrayBuffer.hash(a.result);
                                    console.log("filename: ", filename);
                                    formData.append("image", blob, `${filename}.png`);
                                    const path = await uploadImg(formData, filename);
                                    img.setAttribute("src", path);
                                    resolve();
                                }
                                catch (error){
                                    reject(error);
                                }
                            };
                        })
                        imagePromises.push(readFilePromise);
                    }
                }
                await Promise.all(imagePromises);
                return noteDiv.innerHTML;
            }

            async function uploadCoverImage(cover) {
                const coverFile = document.getElementById(cover).files[0];
                const formData = new FormData();
                formData.append("image", coverFile);
                const path = await uploadImg(formData, cover);
                return path;
            }

            const note1 = await uploadTagImage("#summernote1");
            const note2 = await uploadTagImage("#summernote2");

            const coverTh = await uploadCoverImage("thai-cover");
            const coverEn = await uploadCoverImage("eng-cover");

            const req = {
                slug: slug,
                locale: [
                    {
                        locale: "th",
                        title: titleTh,
                        content: note1,
                        coverPageImg: coverTh,
                    },
                    {
                        locale: "en",
                        title: titleEn,
                        content: note2,
                        coverPageImg: coverEn,
                    },
                ],
                tags: tagSelector.getSelectedTags(),
            };

            console.log("req: ", req);

            if (location.href.includes("edit")) {
                const res = await fetch(
                    "/admin/manage_article/edit/" +
                        document
                            .querySelector(".container h2 span")
                            .getAttribute("data-id"),
                    {
                        method: "PUT",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector(
                                'meta[name="csrf-token"]'
                            ).content,
                        },
                        body: JSON.stringify(req),
                    }
                );

                if (res.ok) {
                    window.showToast("แก้ไขบทความสำเร็จ", "success");
                    window.hideLoading();
                    window.location.href = "/admin/manage_article";
                } else {
                    const errorText = await res.text();
                    console.log("errorText: ", errorText);
                    window.showToast("เกิดข้อผิดพลาดในการแก้ไขบทความ", "error");
                    window.hideLoading();
                }
            } else {
                const res = await fetch("/admin/manage_article/create", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector(
                            'meta[name="csrf-token"]'
                        ).content,
                    },
                    body: JSON.stringify(req),
                });

                if (res.ok) {
                    window.showToast("สร้างบทความสำเร็จ", "success");
                    window.hideLoading();
                    window.location.href = "/admin/manage_article";
                } else {
                    const errorText = await res.text();
                    console.log("errorText: ", errorText);
                    window.showToast("เกิดข้อผิดพลาดในการสร้างบทความ", "error");
                    window.hideLoading();
                }
            }
        }

        if (
            titleTh === "" ||
            titleEn === "" ||
            coverThai.files.length === 0 ||
            coverEng.files.length === 0
        ) {
            window.showToast("กรุณาใส่ชื่อบทความและอัปโหลดภาพหน้าปก", "error");
            return;
        }
        if (location.href.includes("edit")) {
            confirmDialog.confirmAction(
                "ยืนยันการแก้ไขบทความ",
                "คุณต้องการแก้ไขหรือไม่",
                "ไม่",
                "ยืนยัน",
                "",
                async () => {
                    fetchApi();
                }
            );
        } else {
            confirmDialog.confirmAction(
                "ยืนยันการสร้างบทความ",
                "คุณต้องการสร้างหรือไม่",
                "ไม่",
                "ยืนยัน",
                "",
                async () => {
                    fetchApi();
                }
            );
        }
    });
}

function initOverlay() {
    coverImgInput.forEach((container) => {
        container.querySelector("span").addEventListener("click", function () {
            const inputFile = container.querySelector("input[type=file]");
            if (inputFile.files.length != 0) {
                expandedImage.src = URL.createObjectURL(inputFile.files[0]);
                overlay.style.display = "flex"; // Show the overlay
            }
        });
    });

    closeButton.addEventListener("click", function () {
        overlay.style.display = "none"; // Hide the overlay
    });

    // Close overlay when clicking outside the image
    overlay.addEventListener("click", function (event) {
        if (event.target === this) {
            this.style.display = "none";
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    tag_selector();
    initListener();
    initOverlay();
    
    // document.getElementById("test-test").addEventListener("click", async function () {
    //     coverImgInput.forEach((container) => {
    //         const inputFile = container.querySelector("input[type=file]")
    //         var a = new FileReader();
    //         a.readAsArrayBuffer(inputFile.files[0]);
    //         a.onloadend = function () {
    //             console.log(SparkMD5.ArrayBuffer.hash(a.result));
    //         };
    //     })
    // })
    
});
