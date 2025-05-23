import ConfirmDialog from "/js/component/confirm_dialog.js";
import { createTagSelector } from "/js/component/tag_selector.js";

const confirmDialog = new ConfirmDialog();

const btnNext = document.getElementById("btn-next");
const btnPrev = document.getElementById("btn-prev");
const btnSubmit = document.getElementById("submit");

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
    confirmDialog.confirmAction(
        "ยืนยันการส่งข้อมูล",
        "คุณต้องการส่งข้อมูลหรือไม่",
        "ไม่",
        "ส่งข้อมูล",
        "",
        async () => {
            btnNext.style.display = "inline-block";
            btnSubmit.style.display = "none";
            this.style.display = "none";

            async function uploadImage(tag) {
                const note = $(tag).summernote("code");
                const noteDiv = document.createElement("NoneTag");
                noteDiv.innerHTML = note;

                for (const img of Array.from(noteDiv.querySelectorAll("img"))) {
                    const src = img.getAttribute("src");
                    if (src.startsWith("data:image")) {
                        const blob = await fetch(src).then((res) => res.blob());
                        const formData = new FormData();
                        formData.append("image", blob, "upload.png");

                        const response = await fetch("/admin/upload_image", {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector(
                                    'meta[name="csrf-token"]'
                                ).content,
                            },
                            body: formData,
                        });
                        const data = await response.text();
                        img.setAttribute("src", '/'+data);
                    }
                }

                return noteDiv.innerHTML;
            }

            const note1 = await uploadImage("#summernote1");
            const note2 = await uploadImage("#summernote2");
            console.log("note1 : ", note1);
            console.log("note2 : ", note2);
        }
    );
});

function tag_selector() {
    const tagss = ["Art", "Science", "Design"];
    const tagSelector = createTagSelector("tag-selector-container", tagss);

    // Example: get selected tags after 5 seconds
    setTimeout(() => {
        console.log("Selected Tags:", tagSelector.getSelectedTags());
    }, 5000);
}

document.addEventListener("DOMContentLoaded", function () {
    tag_selector();
});
