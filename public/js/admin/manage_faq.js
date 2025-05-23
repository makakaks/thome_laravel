// import ConfirmDialog from "/JS/component/confirm_dialog.js"
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
const tagSelectContainer = document.getElementById("tag-selector-container");

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

    // console.log(articlesToDisplay);

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
        const matchesSearch =
            article.children[1].textContent
                .toLowerCase()
                .includes(searchTerm) ||
            article.children[2].textContent.toLowerCase().includes(searchTerm);

        return matchesTag && matchesSearch;
    });

    if (filteredArticles.length != articles.length) {
        curPage = 1;
        curPageEle.value = 1;
    }
    maxPage = Math.ceil(filteredArticles.length / 10);
    displayArticles(filteredArticles);
}

// ลบบทความ
function deleteArticle(id) {
    if (confirm("คุณแน่ใจหรือไม่ที่จะลบบทความนี้?")) {
        articles = articles.filter((article) => article.id !== id);
        maxPage = Math.ceil(articles.length / 10);
        searchAndFilterArticles();
    }
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

function openEdit() {
    const tagSelectContainer = document.querySelector(
        "#tag-selector-container"
    );
    document.querySelectorAll("btn-edit").forEach((btn) => {
        btn.addEventListener("click", () => {
            const parent = btn.parentNode.parentNode;
            const question = parent.children[1].textContent;
            const ans = parent.children[2].textContent;
            const tags = parent.querySelectorAll(".tag");
            const id = btn.getAttribute("data-id");
        });
    });
}

function tag_selector() {
    const tagss = ["Art", "Science", "Design"];
    const tagSelector = createTagSelector(
        "tag-selector-container",
        tagss,
        "หมวด"
    );

    function clearInput() {
        document
            .querySelectorAll(".modal-body .form-group input")
            .forEach((input) => {
                input.value = "";
            });
    }

    function changeMode(mode) {
        if (mode == "create") {
            if (tagSelectContainer.getAttribute("data-mode") == "edit") {
                tagSelectContainer.setAttribute("data-mode", "create");
                tagSelector.clearContainer();
                clearInput();
            }
        } else if (mode == "edit") {
            if (tagSelectContainer.getAttribute("data-mode") == "create") {
                tagSelectContainer.setAttribute("data-mode", "edit");
                tagSelector.clearContainer();
                clearInput();
            }
        }
    }

    document.getElementById("add-article").addEventListener("click", () => {
        changeMode("create");
    });
    document.querySelectorAll(".btn-edit").forEach((btn) => {
        btn.addEventListener("click", () => {
            changeMode("edit");
        });
    });

    // tagSelector.selectOption('Art')
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

    tag_selector();
});
