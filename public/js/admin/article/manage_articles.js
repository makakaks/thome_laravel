import ConfirmDialog from "/JS/component/confirm_dialog.js";

const artList = document.getElementById("articles-list");
const artFilterSelect = document.getElementById("articles-filter");

let artTags = new Set();

// ข้อมูลตัวอย่าง
let articles = Array.from(document.querySelectorAll("#articles-list tr"));

// เลือก DOM elements
const searchInput = document.getElementById("search");
const filterSelect = document.getElementById("articles-filter");
const articlesList = document.getElementById("articles-list");
const addArticleBtn = document.getElementById("add-article");
const modal = document.getElementById("article-modal");
const modalTitle = document.getElementById("modal-title");
const articleForm = document.getElementById("article-form");
const articleIdInput = document.getElementById("article-id");
const articleTitleInput = document.getElementById("article-title");
const articleTagsInput = document.getElementById("article-tags");
const cancelBtn = document.getElementById("cancel-btn");
const closeBtn = document.querySelector(".close");
const noResults = document.getElementById("no-results");


// ค้นหาและกรองบทความ
async function searchAndFilterArticles() {
    const searchTerm = searchInput.value.toLowerCase();
    const filterTag = filterSelect.value == "all" ? '': filterSelect.value ;

    location.href = `/admin/manage_article?search=${searchTerm}&tag=${filterTag}`

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

                await fetch("/admin/manage_article/add_tag", {
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
                }).then((res) => {
                    window.hideLoading();
                    if (!res.ok) {
                        window.showToast("ไม่สามารถเพิ่มแท็กได้", "error");
                    } else {
                        window.showToast("เพิ่มแท็กเรียบร้อยแล้ว", "success");
                    }
                });
            }
        );
    });
}

// Event Listeners
document.addEventListener("DOMContentLoaded", () => {

    searchInput.addEventListener("keydown", () => {
        if (event.key && event.key !== "Enter") return;
        searchAndFilterArticles();
    });
    document.querySelector('.search-icon').addEventListener("click", () => {
        searchAndFilterArticles();
    })
    filterSelect.addEventListener("change", searchAndFilterArticles);

    document.querySelectorAll("textarea").forEach((textarea) => {
        textarea.addEventListener("input", () => {
            textarea.style.height = "5px";
            textarea.style.height = element.scrollHeight + "px";
        });
    });

    addTag();
    deleteArticle();
});
