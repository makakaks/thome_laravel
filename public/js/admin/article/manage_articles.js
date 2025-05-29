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

let curPage = 1;
let maxPage = Math.ceil(articles.length / 10);
const curPageEle = document.getElementById("page-num");
const maxPageEle = document.getElementById("page-max-num");

// เพิ่มตัวเลือกในการกรอง
function populateFilterOptions() {
    // สร้างตัวเลือก "ทั้งหมด"
    articles.forEach((article) => {
        article.querySelectorAll(".tag").forEach((tag) => {
            artTags.add(tag.textContent.trim());
        });
    });

    // เพิ่มตัวเลือกในการกรอง
    artTags.forEach((tag) => {
        console.log("add : ", tag);
        const option = document.createElement("option");
        option.value = tag;
        option.textContent = tag;
        filterSelect.appendChild(option);
    });
}

// แสดงบทความทั้งหมด
function displayArticles(articlesToDisplay) {
    let start = (curPage - 1) * 10;
    let end = start + 10;

    console.log(articlesToDisplay);

    if (articlesToDisplay.length === 0) {
        noResults.classList.remove("hidden");
    } else {
        noResults.classList.add("hidden");
    }
    articles.forEach((article) => {
        article.classList.add("d-none");
        article.classList.remove("d-table-row");
    });
    articlesToDisplay.forEach((article, index) => {
        if (index >= start && index < end) {
            article.classList.remove("d-none");
            article.classList.add("d-table-row");
        }
    });

    // console.log("end", articlesToDisplay);
}

// ค้นหาและกรองบทความ
function searchAndFilterArticles() {
    const searchTerm = searchInput.value.toLowerCase();
    const filterTag = filterSelect.value;

    const filteredArticles = articles.filter((article) => {
        // กรองตามแท็ก
        const matchesTag =
            filterTag === "all" ||
            Array.from(article.querySelectorAll(".tag")).some((tag) => {
                return tag.textContent.includes(filterTag);
            });

        // กรองตามคำค้นหา
        const matchesSearch = article.children[1].textContent
            .toLowerCase()
            .includes(searchTerm);

        return matchesTag && matchesSearch;
    });

    if (filteredArticles.length != articles.length) {
        curPage = 1;
        curPageEle.value = 1;
    }
    maxPage = Math.ceil(filteredArticles.length / 10);
    console.log(filteredArticles);
    displayArticles(filteredArticles);
}

// ลบบทความ
function deleteArticle() {
    document.querySelectorAll('.actions-buttons .delete-article').forEach((btn) => {
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
                    console.log("Deleting article with ID:", id);
                    window.showLoading();
                    
                    await fetch(`/admin/manage_article/delete/${id}`, {
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector(
                                'meta[name="csrf-token"]'
                            ).content,
                        }
                    }).then((res) => {
                        if (!res.ok){
                            window.showToast("ไม่สามารถลบบทความได้", "error");
                        }
                        else {
                            window.showToast("ลบบทความเรียบร้อยแล้ว", "success");
                            articles = articles.filter((article) => article.id !== id);
                            maxPage = Math.ceil(articles.length / 10);
                            searchAndFilterArticles();
                        }
                    })

                    window.hideLoading();
                }
            );
        });
    })
    // if (confirm("คุณแน่ใจหรือไม่ที่จะลบบทความนี้?")) {
    //     articles = articles.filter((article) => article.id !== id);
    //     maxPage = Math.ceil(articles.length / 10);
    //     searchAndFilterArticles();
    // }
}

function goToPage(page) {
    curPage = page;
    curPageEle.value = page;
    searchAndFilterArticles();
}

function navigatorEventListener() {
    document.getElementById("prev-page").addEventListener("click", () => {
        if (curPage > 1) {
            goToPage(curPage - 1);
            searchAndFilterArticles();
        }
    });

    document.getElementById("next-page").addEventListener("click", () => {
        if (curPage < maxPage) {
            goToPage(curPage + 1);
            searchAndFilterArticles();
        }
    });

    curPageEle.addEventListener("keypress", (e) => {
        if (e.key === "Enter") {
            let page = parseInt(curPageEle.value, 10);
            if (isNaN(page) || page < 1 || page > maxPage) {
                alert("กรุณากรอกหมายเลขหน้าที่ถูกต้อง");
                return;
            } else goToPage(page);
        }
    });
}

function addTag() {
    const btn = document.getElementById("add-tag");
    btn.addEventListener("click", () => {
        const confirmDialog = new ConfirmDialog();
        confirmDialog.confirmAction(
            "กลับไปใช่ไหม",
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
            "กลับไป",
            '<button class="confirm-btn active confirm-yes" id="confirmYes"> Yes </button>',
            async () => {
                const tagName = document.getElementById("add-tag-name").value.trim();
                const tagNameEn = document.getElementById("add-tag-name-en").value.trim();
                await fetch("/admin/add_tag", {

                }).then((res) => res.json())
            }
        );
    });
}

// Event Listeners
document.addEventListener("DOMContentLoaded", () => {
    populateFilterOptions();
    displayArticles(articles);

    searchInput.addEventListener("input", searchAndFilterArticles);
    filterSelect.addEventListener("change", searchAndFilterArticles);
    navigatorEventListener();

    document.querySelectorAll("textarea").forEach((textarea) => {
        textarea.addEventListener("input", () => {
            textarea.style.height = "5px";
            textarea.style.height = element.scrollHeight + "px";
        });
    });

    addTag();
    deleteArticle();
});
