import ConfirmDialog from "/JS/component/confirm_dialog.js";

const artList = document.getElementById("articles-list");
const artFilterSelect = document.getElementById("articles-filter");

let artTags = new Set();

// ข้อมูลตัวอย่าง
let articles = Array.from(document.querySelectorAll("#articles-list tr"));
const confirmDialog = new ConfirmDialog();
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

function searchListener() {
    searchInput.value = new URLSearchParams(window.location.search).get(
        "search"
    );
    filterSelect.value =
        new URLSearchParams(window.location.search).get("tag") || "all";

    searchInput.addEventListener("keydown", (event) => {
        if (event.key && event.key !== "Enter") return;
        searchAndFilterArticles();
    });
    document.querySelector(".search-icon").addEventListener("click", () => {
        searchAndFilterArticles();
    });
    filterSelect.addEventListener("change", searchAndFilterArticles);
}

function editArticle() {
    const langMap = {
        th: "ไทย",
        en: "อังกฤษ",
        cn: "จีน",
    }
    artList.querySelectorAll("tr").forEach((row) => {
        const articleId = row.getAttribute("data-id");
        row.querySelector("button[btn-type='edit']").addEventListener("click", () => {
                let select = `<select class="form-select" id="select-lang">`;
                // /admin/manage_article/add_lang/{{ $article['id'] }}/admin/manage_article/add_lang/{{ $article['id'] }}
                // /admin/manage_article/edit/{{ $article['id'] }}
                row.querySelectorAll("td.d-none span").forEach((lang) => {
                    select += `<option value="${lang.textContent.trim()}">${langMap[lang.textContent.trim()]}</option>`
                })
                select += `</select>`;
                // <option value="th">ไทย</option>
                confirmDialog.confirmAction(
                    "แก้ไขบทความ",
                    `<div class="mt-3">
                        <div class="form-group mb-3">
                            <label for="tag-name">เลือกภาษา</label>
                            ${select}
                        </div>
                    </div>`,
                    "ไม่",
                    "ใช่",
                    '<button class="confirm-btn active confirm-yes" id="confirmYes"> Yes </button>',
                    async () => {
                        let select = document.getElementById('select-lang');
                        location.href = `/admin/manage_article/${articleId}/edit?lang=${select.value}`;
                    }
                );
            }
        );

        row.querySelector("button[btn-type='add-lang']").addEventListener("click", () => {
                let select = `<select class="form-select" id="select-lang">`;
                // /admin/manage_article/add_lang/{{ $article['id'] }}/admin/manage_article/add_lang/{{ $article['id'] }}
                let availableLang = [];
                row.querySelectorAll("td.d-none span").forEach((lang) => {
                    availableLang.push(lang.textContent.trim());
                })
                Object.entries(langMap).forEach(([key, val]) => {
                    if (!availableLang.includes(key))
                    select += `<option value="${key}">${val}</option>`;
                })

                select += `</select>`;
                confirmDialog.confirmAction(
                    "เพิ่มภาษา",
                    `<div class="mt-3">
                        <div class="form-group mb-3">
                            <label for="tag-name">เลือกภาษา</label>
                            ${select}
                        </div>
                    </div>`,
                    "ไม่",
                    "ใช่",
                    '<button class="confirm-btn active confirm-yes" id="confirmYes"> Yes </button>',
                    async () => {
                        let select = document.getElementById('select-lang');
                        location.href = `/admin/manage_article/${articleId}/add_lang?lang=${select.value}`;
                    }
                );
            }
        );
    });
}

// Event Listeners
document.addEventListener("DOMContentLoaded", () => {
    searchListener();

    addTag();
    deleteArticle();

    editArticle();
});
