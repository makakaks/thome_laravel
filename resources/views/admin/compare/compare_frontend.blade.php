<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลือกโครงการที่คุณสนใจ - เปรียบเทียบบ้าน</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color:rgb(0, 217, 255);
            --primary-dark:rgb(0, 247, 255);
            --secondary-color: #2c3e50;
            --accent-blue: #3498db;
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --text-primary: #2c3e50;
            --text-secondary: #7f8c8d;
            --text-light: #bdc3c7;
            --bg-primary: #ffffff;
            --bg-secondary: #f8f9fa;
            --bg-overlay: rgba(0, 0, 0, 0.7);
            --border-color: #e9ecef;
            --shadow-sm: 0 2px 4px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 8px 25px rgba(0,0,0,0.15);
            --border-radius: 12px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header */
        .header {
            background: var(--bg-primary);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .nav-filters {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .filter-group {
            position: relative;
        }

        .filter-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            font-family: inherit;
            font-size: 0.9rem;
            color: var(--text-primary);
        }

        .filter-btn:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .filter-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .results-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .view-toggle {
            display: flex;
            gap: 0.5rem;
        }

        .view-btn {
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            background: var(--bg-primary);
            cursor: pointer;
            transition: var(--transition);
            border-radius: 6px;
        }

        .view-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        /* Main Content */
        .main-content {
            padding: 2rem 0;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: var(--text-primary);
        }

        /* Loading */
        .loading {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 4rem;
            flex-direction: column;
            gap: 1rem;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 3px solid var(--border-color);
            border-top: 3px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Houses Grid */
        .houses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .house-card {
            background: var(--bg-primary);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            position: relative;
            cursor: pointer;
        }

        .house-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .house-image {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .house-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .house-card:hover .house-image img {
            transform: scale(1.05);
        }

        .house-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, var(--bg-overlay));
            padding: 2rem 1.5rem 1.5rem;
            color: white;
        }

        .house-status {
            position: absolute;
            top: 1rem;
            left: 1rem;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-ready {
            background: var(--success-color);
            color: white;
        }

        .status-new {
            background: var(--accent-blue);
            color: white;
        }

        .status-promotion {
            background: var(--warning-color);
            color: white;
        }

        .house-actions {
            position: absolute;
            top: 1rem;
            right: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: var(--text-secondary);
        }

        .action-btn:hover {
            background: white;
            color: var(--primary-color);
            transform: scale(1.1);
        }

        .action-btn.active {
            background: var(--primary-color);
            color: white;
        }

        .house-info {
            padding: 1.5rem;
        }

        .house-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: white;
        }

        .house-location {
            color: white;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .house-specs {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .spec-item {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .house-price {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .house-features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .feature-tag {
            padding: 0.25rem 0.5rem;
            background: var(--bg-secondary);
            border-radius: 15px;
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        .feature-tag.highlight {
            background: var(--primary-color);
            color: white;
        }

        /* Compare Panel */
        .compare-panel {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--bg-primary);
            box-shadow: 0 -4px 20px rgba(0,0,0,0.1);
            padding: 1rem;
            transform: translateY(100%);
            transition: var(--transition);
            z-index: 200;
        }

        .compare-panel.active {
            transform: translateY(0);
        }

        .compare-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1400px;
            margin: 0 auto;
        }

        .compare-items {
            display: flex;
            gap: 1rem;
            flex: 1;
        }

        .compare-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            background: var(--bg-secondary);
            border-radius: var(--border-radius);
            position: relative;
        }

        .compare-item img {
            width: 50px;
            height: 40px;
            object-fit: cover;
            border-radius: 6px;
        }

        .compare-item-info h4 {
            font-size: 0.9rem;
            font-weight: 500;
        }

        .compare-item-info p {
            font-size: 0.8rem;
            color: var(--text-secondary);
        }

        .remove-compare {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 0.7rem;
        }

        .compare-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .compare-btn {
            padding: 0.75rem 1.5rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
        }

        .compare-btn:hover {
            background: var(--primary-dark);
        }

        .compare-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-filters {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .houses-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .compare-content {
                flex-direction: column;
                gap: 1rem;
            }

            .compare-items {
                overflow-x: auto;
                padding-bottom: 0.5rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 0.5rem;
            }

            .house-card {
                margin: 0 0.5rem;
            }

            .page-title {
                font-size: 1.5rem;
            }
        }

        /* No Results */
        .no-results {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--text-secondary);
        }

        .no-results i {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        .no-results h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .no-results p {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-home"></i> HouseCompare
                </div>
                
                <div class="nav-filters">
                    <div class="filter-group">
                        <button class="filter-btn" id="typeFilter">
                            <i class="fas fa-building"></i>
                            <span>ประเภท</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    
                    <div class="filter-group">
                        <button class="filter-btn" id="locationFilter">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>ที่ตั้ง</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    
                    <div class="filter-group">
                        <button class="filter-btn" id="priceFilter">
                            <i class="fas fa-tag"></i>
                            <span>ราคา</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    
                    <div class="filter-group">
                        <button class="filter-btn" id="sortFilter">
                            <i class="fas fa-sort"></i>
                            <span>เรียงตาม</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                </div>

                <div class="results-info">
                    <span id="resultsCount">กำลังโหลด...</span>
                    <div class="view-toggle">
                        <button class="view-btn active" data-view="grid">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="view-btn" data-view="list">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <h1 class="page-title">เลือกโครงการที่คุณสนใจ</h1>
            
            <!-- Loading -->
            <div class="loading" id="loading">
                <div class="spinner"></div>
                <p>กำลังโหลดข้อมูลบ้าน...</p>
            </div>

            <!-- Houses Grid -->
            <div class="houses-grid" id="housesGrid" style="display: none;">
                <!-- Houses will be populated here -->
            </div>

            <!-- No Results -->
            <div class="no-results" id="noResults" style="display: none;">
                <i class="fas fa-search"></i>
                <h3>ไม่พบข้อมูลบ้าน</h3>
                <p>ลองปรับเปลี่ยนเงื่อนไขการค้นหา</p>
            </div>
        </div>
    </main>

    <!-- Compare Panel -->
    <div class="compare-panel" id="comparePanel">
        <div class="compare-content">
            <div class="compare-items" id="compareItems">
                <!-- Compare items will be populated here -->
            </div>
            <div class="compare-actions">
                <span id="compareCount">0/3</span>
                <button class="compare-btn" id="compareBtn" disabled>
                    <i class="fas fa-balance-scale"></i>
                    เปรียบเทียบ
                </button>
                <button class="compare-btn" id="clearCompare" style="background: var(--text-secondary);">
                    <i class="fas fa-times"></i>
                    ล้าง
                </button>
            </div>
        </div>
    </div>

    <script>
        // Global variables
        let houses = [];
        let filteredHouses = [];
        let compareList = [];
        const maxCompare = 3;

        // DOM elements
        const loading = document.getElementById('loading');
        const housesGrid = document.getElementById('housesGrid');
        const noResults = document.getElementById('noResults');
        const resultsCount = document.getElementById('resultsCount');
        const comparePanel = document.getElementById('comparePanel');
        const compareItems = document.getElementById('compareItems');
        const compareCount = document.getElementById('compareCount');
        const compareBtn = document.getElementById('compareBtn');
        const clearCompareBtn = document.getElementById('clearCompare');

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            fetchHouses();
            setupEventListeners();
        });

        // Fetch houses from API
        async function fetchHouses() {
            try {
                const response = await fetch('/api/houses');
                if (!response.ok) throw new Error('Failed to fetch houses');
                
                houses = await response.json();
                filteredHouses = [...houses];
                
                displayHouses();
                updateResultsCount();
                
            } catch (error) {
                console.error('Error fetching houses:', error);
                showNoResults();
            } finally {
                hideLoading();
            }
        }

        // Display houses
        function displayHouses() {
            if (filteredHouses.length === 0) {
                showNoResults();
                return;
            }

            housesGrid.innerHTML = '';
            housesGrid.style.display = 'grid';
            noResults.style.display = 'none';

            filteredHouses.forEach(house => {
                const houseCard = createHouseCard(house);
                housesGrid.appendChild(houseCard);
            });
        }

        // Create house card
        function createHouseCard(house) {
            const card = document.createElement('div');
            card.className = 'house-card';
            card.dataset.houseId = house.id;

            const imageUrl = house.image_url || '/placeholder.svg?height=240&width=320';
            const isInCompare = compareList.some(item => item.id === house.id);
            
            // Determine status
            let statusHtml = '';
            if (house.has_smart_home) {
                statusHtml = '<div class="house-status status-new">Smart Home</div>';
            } else if (house.year_built && house.year_built >= 2023) {
                statusHtml = '<div class="house-status status-ready">พร้อมอยู่</div>';
            }

            // Features
            const features = [];
            if (house.has_smart_home) features.push('Smart Home');
            if (house.has_solar_roof) features.push('Solar Roof');
            if (house.has_ev_charger) features.push('EV Charger');
            if (house.has_cctv_camera) features.push('CCTV');
            if (house.has_security_home_system) features.push('Security System');

            card.innerHTML = `
                <div class="house-image">
                    <img src="${imageUrl}" alt="${house.name}" loading="lazy">
                    ${statusHtml}
                    <div class="house-actions">
                        <button class="action-btn compare-toggle ${isInCompare ? 'active' : ''}" 
                                data-house-id="${house.id}" title="เปรียบเทียบ">
                            <i class="fas fa-balance-scale"></i>
                        </button>
                        <button class="action-btn favorite-toggle" 
                                data-house-id="${house.id}" title="รายการโปรด">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="action-btn share-btn" 
                                data-house-id="${house.id}" title="แชร์">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>
                    <div class="house-overlay">
                        <div class="house-title">${house.name}</div>
                        <div class="house-location">
                            <i class="fas fa-map-marker-alt"></i>
                            ${house.location}
                        </div>
                    </div>
                </div>
                <div class="house-info">
                    <div class="house-specs">
                        <div class="spec-item">
                            <i class="fas fa-bed"></i>
                            <span>${house.bedrooms}</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-bath"></i>
                            <span>${house.bathrooms}</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-ruler-combined"></i>
                            <span>${house.area} ตร.ม.</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-car"></i>
                            <span>${house.car_park}</span>
                        </div>
                    </div>
                    <div class="house-price">
                        ${house.type || 'บ้าน'} ${house.floors ? house.floors + ' ชั้น' : ''}
                    </div>
                    <div class="house-features">
                        ${features.slice(0, 3).map(feature => 
                            `<span class="feature-tag highlight">${feature}</span>`
                        ).join('')}
                        ${features.length > 3 ? `<span class="feature-tag">+${features.length - 3}</span>` : ''}
                    </div>
                </div>
            `;

            return card;
        }

        // Setup event listeners
        function setupEventListeners() {
            // Compare toggle
            document.addEventListener('click', function(e) {
                if (e.target.closest('.compare-toggle')) {
                    const btn = e.target.closest('.compare-toggle');
                    const houseId = parseInt(btn.dataset.houseId);
                    toggleCompare(houseId);
                }
            });

            // Favorite toggle
            document.addEventListener('click', function(e) {
                if (e.target.closest('.favorite-toggle')) {
                    const btn = e.target.closest('.favorite-toggle');
                    const icon = btn.querySelector('i');
                    
                    if (icon.classList.contains('far')) {
                        icon.classList.remove('far');
                        icon.classList.add('fas');
                        btn.classList.add('active');
                    } else {
                        icon.classList.remove('fas');
                        icon.classList.add('far');
                        btn.classList.remove('active');
                    }
                }
            });

            // Share button
            document.addEventListener('click', function(e) {
                if (e.target.closest('.share-btn')) {
                    const houseId = e.target.closest('.share-btn').dataset.houseId;
                    shareHouse(houseId);
                }
            });

            // Compare actions
            compareBtn.addEventListener('click', showComparison);
            clearCompareBtn.addEventListener('click', clearCompare);

            // View toggle
            document.querySelectorAll('.view-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    const view = this.dataset.view;
                    if (view === 'list') {
                        housesGrid.style.gridTemplateColumns = '1fr';
                    } else {
                        housesGrid.style.gridTemplateColumns = 'repeat(auto-fill, minmax(320px, 1fr))';
                    }
                });
            });
        }

        // Toggle compare
        function toggleCompare(houseId) {
            const house = houses.find(h => h.id === houseId);
            if (!house) return;

            const existingIndex = compareList.findIndex(item => item.id === houseId);
            
            if (existingIndex > -1) {
                // Remove from compare
                compareList.splice(existingIndex, 1);
            } else {
                // Add to compare
                if (compareList.length >= maxCompare) {
                    alert(`สามารถเปรียบเทียบได้สูงสุด ${maxCompare} รายการ`);
                    return;
                }
                compareList.push(house);
            }

            updateCompareUI();
            updateCompareButtons();
        }

        // Update compare UI
        function updateCompareUI() {
            compareItems.innerHTML = '';
            
            compareList.forEach(house => {
                const item = document.createElement('div');
                item.className = 'compare-item';
                
                const imageUrl = house.image_url || '/placeholder.svg?height=40&width=50';
                
                item.innerHTML = `
                    <img src="${imageUrl}" alt="${house.name}">
                    <div class="compare-item-info">
                        <h4>${house.name}</h4>
                        <p>${house.location}</p>
                    </div>
                    <button class="remove-compare" onclick="toggleCompare(${house.id})">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                
                compareItems.appendChild(item);
            });

            // Update compare count
            compareCount.textContent = `${compareList.length}/${maxCompare}`;
            
            // Show/hide compare panel
            if (compareList.length > 0) {
                comparePanel.classList.add('active');
            } else {
                comparePanel.classList.remove('active');
            }

            // Enable/disable compare button
            compareBtn.disabled = compareList.length < 2;
        }

        // Update compare buttons
        function updateCompareButtons() {
            document.querySelectorAll('.compare-toggle').forEach(btn => {
                const houseId = parseInt(btn.dataset.houseId);
                const isInCompare = compareList.some(item => item.id === houseId);
                
                if (isInCompare) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        }

        // Clear compare
        function clearCompare() {
            compareList = [];
            updateCompareUI();
            updateCompareButtons();
        }

        // Show comparison - แก้ไขให้ใช้ Laravel route
        function showComparison() {
            if (compareList.length < 2) {
                alert('กรุณาเลือกบ้านอย่างน้อย 2 หลังเพื่อเปรียบเทียบ');
                return;
            }

            // Create comparison URL with house IDs - ใช้ Laravel route
            const houseIds = compareList.map(house => house.id).join(',');
            window.open(`{{ route('admin.compare.comparison') }}?houses=${houseIds}`, '_blank');
        }

        // Share house
        function shareHouse(houseId) {
            const house = houses.find(h => h.id == houseId);
            if (!house) return;

            if (navigator.share) {
                navigator.share({
                    title: house.name,
                    text: `ดูบ้าน ${house.name} ที่ ${house.location}`,
                    url: window.location.href + `?house=${houseId}`
                });
            } else {
                // Fallback: copy to clipboard
                const url = window.location.href + `?house=${houseId}`;
                navigator.clipboard.writeText(url).then(() => {
                    alert('คัดลอกลิงก์แล้ว!');
                });
            }
        }

        // Update results count
        function updateResultsCount() {
            resultsCount.textContent = `จำนวน ${filteredHouses.length} โครงการ`;
        }

        // Show no results
        function showNoResults() {
            housesGrid.style.display = 'none';
            noResults.style.display = 'block';
            resultsCount.textContent = 'ไม่พบข้อมูล';
        }

        // Hide loading
        function hideLoading() {
            loading.style.display = 'none';
        }
    </script>
</body>
</html>