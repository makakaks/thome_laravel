// import ConfirmDialog from "/HOMESPECTOR/JS/component/confirm_dialog.js"

const artList = document.getElementById("articles-list")
const artFilterSelect = document.getElementById("articles-filter")

const artTags = [
    {
        id: 1,
        name: "Roof",
    },
    {
        id: 2,
        name: "Electrical System",
    }
]

// ข้อมูลตัวอย่าง
let articles = [
    {
        id: 1,
        title: "สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน",
        tags: ["Roof"],
    },
    {
        id: 2,
        title: "สิ่งที่ต้องรู้เกี่ยวกับ EV Charger",
        tags: ["Electrical System"],
    },
    {
        id: 3,
        title: "สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน",
        tags: ["Roof"],
    },
    {
        id: 4,
        title: "สิ่งที่ต้องรู้เกี่ยวกับ EV Charger",
        tags: ["Electrical System"],
    },
    {
        id: 5,
        title: "สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน",
        tags: ["Roof"],
    },
    {
        id: 6,
        title: "สิ่งที่ต้องรู้เกี่ยวกับ EV Charger",
        tags: ["Electrical System"],
    },
    {
        id: 7,
        title: "สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน",
        tags: ["Roof"],
    },
    {
        id: 8,
        title: "สิ่งที่ต้องรู้เกี่ยวกับ EV Charger",
        tags: ["Electrical System"],
    },
    {
        id: 9,
        title: "สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน",
        tags: ["Roof"],
    },
    {
        id: 10,
        title: "สิ่งที่ต้องรู้เกี่ยวกับ EV Charger",
        tags: ["Electrical System"],
    },
    {
        id: 11,
        title: "สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน",
        tags: ["Roof"],
    },
    {
        id: 12,
        title: "สิ่งที่ต้องรู้เกี่ยวกับ EV Charger",
        tags: ["Electrical System"],
    },
];

// เลือก DOM elements
const searchInput = document.getElementById('search');
const filterSelect = document.getElementById('articles-filter');
const articlesList = document.getElementById('articles-list');
const addArticleBtn = document.getElementById('add-article');
const modal = document.getElementById('article-modal');
const modalTitle = document.getElementById('modal-title');
const articleForm = document.getElementById('article-form');
const articleIdInput = document.getElementById('article-id');
const articleTitleInput = document.getElementById('article-title');
const articleTagsInput = document.getElementById('article-tags');
const cancelBtn = document.getElementById('cancel-btn');
const closeBtn = document.querySelector('.close');
const noResults = document.getElementById('no-results');

let curPage = 1;
let maxPage = Math.ceil(articles.length / 10);
const curPageEle = document.getElementById('page-num');
const maxPageEle = document.getElementById('page-max-num');

// เพิ่มตัวเลือกในการกรอง
function populateFilterOptions() {
    // เพิ่มตัวเลือกในการกรอง
    artTags.forEach(tag => {
        const option = document.createElement('option');
        option.value = tag.name;
        option.textContent = tag.name;
        filterSelect.appendChild(option);
    });
}

// แสดงบทความทั้งหมด
function displayArticles(articlesToDisplay) {
    console.log(curPage, maxPage);
    let articleFilter = articlesToDisplay.slice((curPage - 1) * 10, curPage * 10);
    
    articlesList.innerHTML = '';
    
    if (articleFilter.length === 0) {
        noResults.classList.remove('hidden');
    } else {
        noResults.classList.add('hidden');
        
        articleFilter.forEach(article => {
            const row = document.createElement('tr');
            
            // สร้าง cell สำหรับ ID
            const idCell = document.createElement('td');
            idCell.textContent = article.id;
            row.appendChild(idCell);
            
            // สร้าง cell สำหรับชื่อหัวข้อ
            const titleCell = document.createElement('td');
            titleCell.textContent = article.title;
            row.appendChild(titleCell);
            
            // สร้าง cell สำหรับแท็ก
            const tagsCell = document.createElement('td');
            article.tags.forEach(tag => {
                const tagSpan = document.createElement('span');
                tagSpan.className = 'tag';
                tagSpan.textContent = tag;
                tagsCell.appendChild(tagSpan);
            });
            row.appendChild(tagsCell);
            
            // สร้าง cell สำหรับปุ่มการจัดการ
            const actionsCell = document.createElement('td');
            actionsCell.className = 'action-buttons';
            
            // ปุ่มแก้ไข
            const editBtn = document.createElement('a');
            editBtn.className = 'btn btn-edit';
            editBtn.textContent = 'แก้ไข';
            editBtn.href = `/HOMESPECTOR/Homepage/admin/edit_articles.php?id=${article.id}`;
            editBtn.addEventListener('click', () => editArticle(article));
            actionsCell.appendChild(editBtn);
            
            // ปุ่มลบ
            const deleteBtn = document.createElement('button');
            deleteBtn.className = 'btn btn-danger';
            deleteBtn.textContent = 'ลบ';
            deleteBtn.addEventListener('click', () => deleteArticle(article.id));
            actionsCell.appendChild(deleteBtn);
            
            row.appendChild(actionsCell);
            
            articlesList.appendChild(row);
        });
    }
}

// ค้นหาและกรองบทความ
function searchAndFilterArticles() {
    const searchTerm = searchInput.value.toLowerCase();
    const filterTag = filterSelect.value;
    
    const filteredArticles = articles.filter(article => {
        // กรองตามแท็ก
        const matchesTag = filterTag === 'all' || article.tags.includes(filterTag);
        
        // กรองตามคำค้นหา
        const matchesSearch = article.title.toLowerCase().includes(searchTerm) || 
                             article.tags.some(tag => tag.toLowerCase().includes(searchTerm));
        
        return matchesTag && matchesSearch;
    });
    
    displayArticles(filteredArticles);
}

// ลบบทความ
function deleteArticle(id) {
    if (confirm('คุณแน่ใจหรือไม่ที่จะลบบทความนี้?')) {
        articles = articles.filter(article => article.id !== id);
        maxPage = Math.ceil(articles.length / 10);
        searchAndFilterArticles();
    }
}

function goToPage(page){
    curPage = page;
    curPageEle.value = page;
    searchAndFilterArticles();
}

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    populateFilterOptions();
    displayArticles(articles);
    
    searchInput.addEventListener('input', searchAndFilterArticles);
    filterSelect.addEventListener('change', searchAndFilterArticles);

    document.getElementById('prev-page').addEventListener('click', () => {
        if (curPage > 1) {
            goToPage(curPage - 1);
            searchAndFilterArticles();
        }
    });

    document.getElementById('next-page').addEventListener('click', () => {
        if (curPage < maxPage) {
            goToPage(curPage + 1);
            searchAndFilterArticles();
        }
    });

    curPageEle.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            let page = parseInt(curPageEle.value, 10);
            if (isNaN(page) || page < 1 || page > maxPage) {
                alert('กรุณากรอกหมายเลขหน้าที่ถูกต้อง');
                return;
            }
            else 
                goToPage(page)
        }
    });
});