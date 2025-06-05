import ConfirmDialog from "/js/component/confirm_dialog.js";
import { createTagSelector } from "/js/component/tag_selector.js";

const artList = document.getElementById("articles-list");
const artFilterSelect = document.getElementById("articles-filter");

let artTags = new Set();

// ข้อมูลตัวอย่าง
let articles = Array.from(document.querySelectorAll("#articles-list tr"));

// เลือก DOM elements
const searchInput = document.getElementById("search");
const filterSelect = document.getElementById("articles-filter");
const articlesList = document.getElementById("articles-list");
const modal = document.getElementById("article-modal");
const modalTitle = document.getElementById("modal-title");
const articleForm = document.getElementById("article-form");
const articleIdInput = document.getElementById("article-id");
const articleTitleInput = document.getElementById("article-title");
const articleTagsInput = document.getElementById("article-tags");
const cancelBtn = document.getElementById("cancel-btn");
const closeBtn = document.querySelector(".close");
const noResults = document.getElementById("no-results");

const modalContent = document.querySelector(".modal-content");
const modalContainer = document.querySelector("#staticBackdrop");
const editBtns = document.querySelectorAll(".btn-edit");
const addFaqBtn = document.getElementById("add-article");

let tagSelector;

// ค้นหาและกรองบทความ
async function searchAndFilterArticles() {
    const searchTerm = searchInput.value.toLowerCase();
    const filterTag = filterSelect.value == "all" ? "" : filterSelect.value;

    location.href = `/admin/manage_faq?search=${searchTerm}&tag=${filterTag}`;
}

// ลบบทความ
function deleteArticle() {
    document
        .querySelectorAll(".actions-buttons .delete-article")
        .forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const id = e.target.getAttribute("data-id");
                const confirmDialog = new ConfirmDialog();
                confirmDialog.confirmAction(
                    "ลบคำถามนี้?",
                    "คำถามนี้จะถูกลบอย่างถาวร",
                    "ไม่",
                    "ลบ",
                    '<button class="confirm-btn active confirm-yes" id="confirmYes"> ลบ </button>',
                    async () => {
                        window.showLoading();
                        await fetch(`/admin/manage_faq/${id}`, {
                            method: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector(
                                    'meta[name="csrf-token"]'
                                ).content,
                            },
                        }).then((res) => {
                            if (!res.ok) {
                                window.showToast(
                                    "ไม่สามารถลบบทความได้",
                                    "error"
                                );
                            } else {
                                window.showToast(
                                    "ลบบทความเรียบร้อยแล้ว",
                                    "success"
                                );
                                // articles = articles.filter((article) => article.id != id);
                                // maxPage = Math.ceil(articles.length / 10);
                                const row = document.querySelector(
                                    `#articles-list tr[data-id="${id}"]`
                                );
                                row.remove();
                            }
                        });

                        window.hideLoading();
                    }
                );
            });
        });
}

function addTag() {
    const btn = document.getElementById("add-tag");
    btn.addEventListener("click", () => {
        const confirmDialog = new ConfirmDialog();
        confirmDialog.confirmAction(
            "เพิ่มแท็ก",
            `<div class="mt-3">
                <div class="form-group mb-3">
                    <label for="tag-name">ชื่อแท็ก:</label>
                    <input type="text" id="add-tag-name" class="form-control" placeholder="ป้อนชื่อแท็ก">
                </div>
                <div class="form-group">
                    <label for="tag-name">ชื่อแท็ก(en):</label>
                    <input type="text" id="add-tag-name-en" class="form-control" placeholder="ป้อนชื่อแท็ก">
                </div>
            </div>`,
            "ไม่",
            "ใช่",
            '<button class="confirm-btn active confirm-yes" id="confirmYes"> Yes </button>',
            async () => {
                const tagName = document
                    .getElementById("add-tag-name")
                    .value.trim();
                const tagNameEn = document
                    .getElementById("add-tag-name-en")
                    .value.trim();

                window.showLoading();

                await fetch("/admin/manage_faq/add_tag", {
                    method: "POST",
                    headers: {
                        "content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector(
                            'meta[name="csrf-token"]'
                        ).content,
                    },
                    body: JSON.stringify([
                        {
                            locale: "th",
                            name: tagName,
                        },
                        {
                            locale: "en",
                            name: tagNameEn,
                        },
                    ]),
                }).then(async (res) => {
                    window.hideLoading();
                    if (!res.ok) {
                        window.showToast("ไม่สามารถเพิ่มแท็กได้", "error");
                    } else {
                        window.showToast("เพิ่มแท็กเรียบร้อยแล้ว", "success");
                    }
                    await res.text().then((data) => {
                        console.log(data);
                    });
                });
            }
        );
    });
}

function searchListener() {
    searchInput.value = new URLSearchParams(window.location.search).get('search');
    filterSelect.value = new URLSearchParams(window.location.search).get('tag') || 'all';

    searchInput.addEventListener("keydown", (event) => {
        if (event.key && event.key !== "Enter") return;
        searchAndFilterArticles();
    });
    document.querySelector(".search-icon").addEventListener("click", () => {
        searchAndFilterArticles();
    });
    filterSelect.addEventListener("change", searchAndFilterArticles);
}

function modalListener() {
    const question = modalContent.querySelector("#question");
    const questionEn = modalContent.querySelector("#question-eng");
    const ans = modalContent.querySelector("#ans");
    const ansEn = modalContent.querySelector("#ans-eng");
    document.querySelectorAll("textarea").forEach((textarea) => {
        textarea.addEventListener("input", () => {
            textarea.style.height = "5px";
            textarea.style.height = textarea.scrollHeight + "px";
        });
    });

    addFaqBtn.addEventListener("click", () => {
        modalContent.querySelector(".modal-header h1").innerText =
            "สร้างคำถามใหม่";
        modalContent.classList.remove("edit-mode");
        modalContent.classList.add("create-mode");
    });

    editBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            modalContent.querySelector(".modal-header h1").innerText =
                "แก้ไขคำถาม";
            modalContent.classList.remove("create-mode");
            modalContent.classList.add("edit-mode");
            modalContent.setAttribute("data-id", btn.getAttribute("data-id"));

            const faq = btn.parentNode.parentNode;
            const td = faq.querySelectorAll("td");

            question.value = faq.getAttribute("data-th-q");
            questionEn.value = faq.getAttribute("data-en-q");
            ans.value = faq.getAttribute("data-th-ans");
            ansEn.value = faq.getAttribute("data-en-ans");
            td[3].querySelectorAll("span").forEach((span) => {
                console.log("span : ", span, span.getAttribute("tag-id"));
                tagSelector.selectOptionById(span.getAttribute("tag-id"));
            });
        });
    });

    document.querySelector(".submit").addEventListener("click", async () => {
        window.showLoading();

        if (modalContent.classList.contains("create-mode")) {
            const req = {
                locale: [
                    {
                        locale: "th",
                        question: question.value.trim(),
                        answer: ans.value.trim(),
                    },
                    {
                        locale: "en",
                        question: questionEn.value.trim(),
                        answer: ansEn.value.trim(),
                    },
                ],
                tags: tagSelector.getSelectedTags(),
            };
            console.log(req);
            await fetch("/admin/manage_faq", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
                body: JSON.stringify(req),
            }).then((res) => {
                window.hideLoading();
                modalContainer.classList.remove("show");

                if (!res.ok) {
                    window.showToast("ไม่สามารถบันทึกคำถามได้", "error");
                } else {
                    window.showToast("บันทึกคำถามเรียบร้อยแล้ว", "success");
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                }
            });
        } else {
            const req = {
                locale: [
                    {
                        locale: "th",
                        question: question.value.trim(),
                        answer: ans.value.trim(),
                    },
                    {
                        locale: "en",
                        question: questionEn.value.trim(),
                        answer: ansEn.value.trim(),
                    },
                ],
                tags: tagSelector.getSelectedTags(),
            };
            console.log(req);
            await fetch(`/admin/manage_faq/${modalContent.getAttribute('data-id')}`, {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
                body: JSON.stringify(req),
            }).then((res) => {
                window.hideLoading();
                modalContainer.classList.remove("show");

                if (!res.ok) {
                    window.showToast("ไม่สามารถแก้ไขคำถามได้", "error");
                } else {
                    window.showToast("แก้ไขคำถามเรียบร้อยแล้ว", "success");
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                }
            });
        }
    });
}

function tag_selector() {
    const tagss = [];
    const tagFetch = document.querySelectorAll(".filter-box option");

    for (let i = 1; i < tagFetch.length; i++) {
        tagss.push({
            id: tagFetch[i].value,
            name: tagFetch[i].innerText,
        });
    }

    tagSelector = createTagSelector("tag-selector-container", tagss);
}

// Event Listeners
document.addEventListener("DOMContentLoaded", () => {
    searchListener();
    modalListener();
    tag_selector();

    addTag();
    deleteArticle();
});
