import ConfirmDialog from "/js/component/confirm_dialog.js";
import {createTagSelector} from "/js/component/tag_selector.js";

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
const editBtns = document.querySelectorAll(".btn-edit");
const addFaqBtn = document.getElementById("add-article");

let tagSelector;

// ค้นหาและกรองบทความ
async function searchAndFilterArticles() {
    const searchTerm = searchInput.value.toLowerCase();
    const filterTag = filterSelect.value == "all" ? "" : filterSelect.value;

    location.href = `/admin/manage_article?search=${searchTerm}&tag=${filterTag}`;
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
                    "คุณแน่ใจหรือไม่ที่จะลบบทความนี้?",
                    "บทความนี้จะถูกลบอย่างถาวร",
                    "ไม่",
                    "ลบ",
                    '<button class="confirm-btn active confirm-yes" id="confirmYes"> ลบ </button>',
                    async () => {
                        window.showLoading();
                        await fetch(`/admin/manage_article/${id}`, {
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
                    await res.text().then((data)=> {
                        console.log(data);
                    })
                });
            }
        );
    });
}

function searchListener() {
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
    document.querySelectorAll("textarea").forEach((textarea) => {
        textarea.addEventListener("input", () => {
            textarea.style.height = "5px";
            textarea.style.height = element.scrollHeight + "px";
        });
    });

    addFaqBtn.addEventListener("click", () => {
        modalContent.querySelector('.modal-header h1').innerText = 'สร้างคำถามใหม่';
        modalContent.classList.remove("edit-mode");
        modalContent.classList.add("create-mode");
    })

    editBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            modalContent.querySelector('.modal-header h1').innerText = 'แก้ไขคำถาม';
            modalContent.classList.remove("create-mode");
            modalContent.classList.add("edit-mode");

            const faq = btn.parentNode.parentNode;
            const td = faq.querySelectorAll("td");
            // modalContent.querySelector('$question').value = td[1].innerText;
            // modalContent.querySelector('$answer').value = ;

        })
    })
}


function tag_selector() {
    const tagss = [];
    const tagFetch = document.querySelectorAll('.tag-fetch')
    tagFetch.forEach((tag) => {
        tagss.push({
            id: tag.getAttribute("data-id"),
            name: tag.getAttribute("data-name"),
        })
    })

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
