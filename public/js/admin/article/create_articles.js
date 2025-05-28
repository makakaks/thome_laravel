import ConfirmDialog from "/js/component/confirm_dialog.js";
import { createTagSelector } from "/js/component/tag_selector.js";

const confirmDialog = new ConfirmDialog();

const btnNext = document.getElementById("btn-next");
const btnPrev = document.getElementById("btn-prev");
const btnSubmit = document.getElementById("submit");

const titleThEle = document.getElementById("thai-title");
const titleEnEle = document.getElementById("eng-title");

const coverThai = document.getElementById('thai-cover');
const coverEng = document.getElementById('eng-cover');

let tagSelector;

btnNext.addEventListener("click", function () {
    // console.log('click btn-next');
    // note-editable
    btnPrev.style.visibility = "visible";
    btnSubmit.style.display = "inline-block";
    this.style.display = "none";

    document.querySelector(".eng .note-editable").innerHTML =
        $("#summernote1").summernote("code");

    // $('#summernote2').summernote('code') = $('#summernote1').summernote('code')
});

btnPrev.addEventListener("click", function () {
    confirmDialog.confirmAction(
        "กลับไปใช่ไหม",
        "ข้อมูลภาษาอังกฤษที่คุณเขียนจะหายไป",
        "ไม่",
        "กลับไป",
        '<button class="confirm-btn active confirm-yes" id="confirmYes" data-target="#carousel-example-generic" data-slide-to="0" > Yes </button>',
        async () => {
            btnNext.style.display = "inline-block";
            btnSubmit.style.display = "none";
            this.style.visibility = "hidden";
        }
    );
});

btnSubmit.addEventListener("click", function () {
    const titleTh = titleThEle.value;
    const titleEn = titleEnEle.value;
    const slug = titleEn.replace(" ", "-");

    if (titleTh === "" || titleEn === "" || coverThai.files.length === 0 || coverEng.files.length === 0) {
        window.showToast(
            'กรุณาใส่ชื่อบทความและอัปโหลดภาพหน้าปก',
            "error"
        )
        return
    }
    confirmDialog.confirmAction(
        "ยืนยันการสร้างบทความ",
        "คุณต้องการสร้างหรือไม่",
        "ไม่",
        "ยืนยัน",
        "",
        async () => {
            btnNext.style.display = "inline-block";
            btnSubmit.style.display = "none";
            this.style.display = "none";
            window.showLoading();

            async function uploadImg(formData) {
                formData.append("folder", `article/${slug}`);
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
                    return;
                }
                let path = await response.text();
                path = path.replace("public/", "/storage/");
                return path;
            }

            async function uploadTagImage(tag) {
                const note = $(tag).summernote("code");
                const noteDiv = document.createElement("NoneTag");
                noteDiv.innerHTML = note;

                for (const img of Array.from(noteDiv.querySelectorAll("img"))) {
                    const src = img.getAttribute("src");
                    if (src.startsWith("data:image")) {
                        const blob = await fetch(src).then((res) => res.blob());
                        const formData = new FormData();
                        formData.append("image", blob, "upload.png");

                        const path = await uploadImg(formData);
                        img.setAttribute("src", path);
                    }
                }
                return noteDiv.innerHTML;
            }

            async function uploadCoverImage(cover) {
                cover = document.getElementById(cover).files[0];
                const formData = new FormData();
                formData.append("image", cover);
                const path = await uploadImg(formData);
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

            await fetch("/admin/manage_article/create", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
                body: JSON.stringify(req),
            })
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        console.log("error");
                        return response.text();
                    }
                })
                .then((data) => {
                    console.log(data);
                });

            window.hideLoading();
            console.log(tagSelector.getSelectedTags());
            window.location.href = "/admin/manage_article";
        }
    );
});

async function tag_selector() {
    const tagss = [];

    document.querySelectorAll(".tag-fetch div").forEach((tag) => {
        tagss.push({
            id: tag.getAttribute("data-id"),
            name: tag.querySelector("span").textContent,
        });
    });
    tagSelector = createTagSelector("tag-selector-container", tagss);

    // Example: get selected tags after 5 seconds
    setTimeout(() => {
        console.log("Selected Tags:", tagSelector.getSelectedTags());
    }, 5000);
}

document.addEventListener("DOMContentLoaded", function () {
    tag_selector();
});
