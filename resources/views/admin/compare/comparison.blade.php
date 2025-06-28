<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การเปรียบเทียบ</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #667eea;
            --primary-dark: #5a6fd8;
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --error-color: #ef4444;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-gradient: linear-gradient(135deg,rgb(9, 198, 255) 0%,rgb(25, 144, 255) 100%);
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
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
            background: var(--bg-secondary);
            color: var(--text-primary);
            line-height: 1.6;
        }

        /* Hero Section */
        .hero-section {
            background: var(--bg-gradient);
            color: white;
            padding: 4rem 0 2rem;
            text-align: center;
            background-image: url('/img/web-bg2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.3);
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
            line-height: 1.8;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: white;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .breadcrumb-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .breadcrumb-link {
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .breadcrumb-link:hover {
            text-decoration: underline;
        }

        .breadcrumb-current {
            color: var(--text-secondary);
        }

        /* Main Container */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Section Titles */
        .section-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-title::before {
            content: '';
            width: 4px;
            height: 2rem;
            background: var(--bg-gradient);
            border-radius: 2px;
        }

        /* House Cards */
        .house-cards-section {
            margin-bottom: 3rem;
        }

        .house-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .house-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .house-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .house-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: var(--bg-gradient);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            z-index: 2;
        }

        .house-image {
            height: 200px;
            overflow: hidden;
            position: relative;
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

        .no-image {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: var(--bg-secondary);
            color: var(--text-secondary);
        }

        .no-image i {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .house-info {
            padding: 1.5rem;
        }

        .house-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .house-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.75rem;
        }

        .house-location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .house-location i {
            color: var(--primary-color);
        }

        /* Rating Display */
        .house-rating {
            background: linear-gradient(135deg,rgb(255, 255, 255) 0%,rgb(255, 255, 255) 100%);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 1rem;
        }

        .house-rating:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .rating-score {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
            color: black;
        }

        .rating-label {
            font-size: 0.875rem;
            opacity: 0.9;
            color: black;
            margin-bottom: 0.75rem;
        }

        /* Star Rating */
        .star-rating {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.25rem;
            margin-bottom: 0.75rem;
        }

        .star {
            font-size: 1.5rem;
            color: #ddd;
            transition: var(--transition);
        }

        .star.filled {
            color: #ffd700;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .star.half {
            background: linear-gradient(90deg, #ffd700 50%, #ddd 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .rating-breakdown {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
            margin-top: 0.75rem;
            color: black;
        }

        .rating-category {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem;
            border-radius: 6px;
            text-align: center;
            color: black;
        }

        .category-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.125rem 0.375rem;
            border-radius: 4px;
            font-size: 0.625rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .category-a { background: #fef3c7; color: #92400e; }
        .category-b { background: #fecaca; color: #991b1b; }
        .category-c { background: #dbeafe; color: #1e40af; }
        .category-d { background: #d1fae5; color: #065f46; }

        .rating-category-score {
            font-size: 0.875rem;
            font-weight: 600;
        }

        /* Comparison Section */
        .comparison-section {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            padding: 2rem;
        }

        .comparison-category {
            margin-bottom: 3rem;
        }

        .comparison-category:last-child {
            margin-bottom: 0;
        }

        .category-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--border-color);
        }

        .category-icon {
            width: 60px;
            height: 60px;
            background: var(--bg-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .category-title h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .category-title p {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .comparison-table {
            display: grid;
            gap: 1px;
            background: var(--border-color);
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .comparison-row {
            display: grid;
            grid-template-columns: 250px repeat(auto-fit, minmax(200px, 1fr));
            background: white;
        }

        .row-label {
            background: var(--bg-secondary);
            padding: 1.5rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .row-label i {
            color: var(--primary-color);
            width: 20px;
        }

        .row-data {
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .highlight-price {
            background: linear-gradient(135deg, #f093fb10, #f5576c10);
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.1rem;
        }

        .feature-status {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .feature-status.available {
            color: var(--success-color);
        }

        .feature-status.not-available {
            color: var(--text-secondary);
        }

        .feature-spec {
            font-size: 0.875rem;
            color: var(--text-secondary);
            font-style: italic;
            padding-left: 1.5rem;
        }

        /* Rating Modal */
        .rating-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            padding: 2rem;
        }

        .rating-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            border-radius: var(--border-radius);
            max-width: 800px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-header {
            background: var(--bg-gradient);
            color: white;
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: var(--transition);
        }

        .modal-close:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .modal-body {
            padding: 2rem;
        }

        .rating-criteria {
            display: grid;
            gap: 1.5rem;
        }

        .criteria-category {
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .criteria-header {
            background: var(--bg-secondary);
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .criteria-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 600;
        }

        .criteria-weight {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .criteria-items {
            padding: 1.5rem;
        }

        .criteria-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .criteria-item:last-child {
            border-bottom: none;
        }

        .item-name {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .item-points {
            font-weight: 600;
            color: var(--primary-color);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .main-container {
                padding: 1rem;
            }

            .house-cards {
                grid-template-columns: 1fr;
            }

            .comparison-row {
                grid-template-columns: 1fr;
            }

            .row-label {
                border-bottom: 1px solid var(--border-color);
            }

            .rating-breakdown {
                grid-template-columns: 1fr;
            }

            .rating-modal {
                padding: 1rem;
            }

            .modal-body {
                padding: 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.75rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .house-info {
                padding: 1rem;
            }

            .star-rating {
                gap: 0.125rem;
            }

            .star {
                font-size: 1.25rem;
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .top-star {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #ffd700;
            color: #b45309;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            z-index: 3;
            box-shadow: 0 2px 8px rgba(255, 215, 0, 0.3);
            border: 2px solid white;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">ผลลัพธ์การเปรียบเทียบ</h1>
            <p class="hero-subtitle">
                เปรียบเทียบคุณสมบัติและสิ่งอำนวยความสะดวกของบ้านแต่ละหลังเพื่อช่วยในการตัดสินใจ<br>
                ข้อมูลครบถ้วน ถูกต้อง และเป็นปัจจุบัน พร้อมระบบให้คะแนนแบบถ่วงน้ำหนัก
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <div class="breadcrumb-content">
            <a href="{{ route('admin.compare.compare_frontend') }}" class="breadcrumb-link">
                <i class="fas fa-home"></i> หน้าแรก
            </a>
            <i class="fas fa-chevron-right"></i>
            <span class="breadcrumb-current">ผลการเปรียบเทียบ</span>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-container">
        <!-- House Cards Section -->
        <div class="house-cards-section">
            <h2 class="section-title">บ้านที่เลือกเปรียบเทียบ</h2>
            <div class="house-cards">
                @foreach($houses as $index => $house)
                    <div class="house-card fade-in" data-house="{{ $index }}" data-score="{{ $house->total_score ?? 0 }}">
                        <div class="house-badge">บ้านที่ {{ $index + 1 }}</div>
                        
                        <div class="top-star">
                            <i class="fas fa-star"></i>
                        </div>
                        
                        <div class="house-image">
                            @if($house->image)
                                <img src="{{ asset('image/' . $house->image) }}" alt="{{ $house->name }}">
                            @else
                                <div class="no-image">
                                    <i class="fas fa-home"></i>
                                    <span>ไม่มีรูปภาพ</span>
                                </div>
                            @endif
                        </div>
                        <div class="house-info">
                            <h3 class="house-name">{{ $house->name }}</h3>
                            <div class="house-price">{{ number_format($house->price ?? 0) }} บาท</div>
                            @if($house->location)
                                <div class="house-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {{ $house->location }}
                                </div>
                            @endif
                            
                            <!-- Rating Display -->
                            <div class="house-rating" onclick="showRatingModal({{ $house->id }}, '{{ $house->name }}', {{ $house->total_score ?? 0 }}, {{ json_encode($house->getRatingBreakdown()) }})">
                                <div class="rating-score">{{ $house->total_score ?? 0 }}</div>
                                <div class="rating-label">คะแนนรวม / 100</div>
                                
                                <!-- Star Rating -->
                                <div class="star-rating" data-score="{{ $house->total_score ?? 0 }}">
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                </div>
                                
                                <div class="rating-breakdown">
                                    @php $breakdown = $house->getRatingBreakdown(); @endphp
                                    <div class="rating-category">
                                        <div class="category-badge category-a">A</div>
                                        <div class="rating-category-score">{{ $breakdown['A'] ?? 0 }}</div>
                                    </div>
                                    <div class="rating-category">
                                        <div class="category-badge category-b">B</div>
                                        <div class="rating-category-score">{{ $breakdown['B'] ?? 0 }}</div>
                                    </div>
                                    <div class="rating-category">
                                        <div class="category-badge category-c">C</div>
                                        <div class="rating-category-score">{{ $breakdown['C'] ?? 0 }}</div>
                                    </div>
                                    <div class="rating-category">
                                        <div class="category-badge category-d">D</div>
                                        <div class="rating-category-score">{{ $breakdown['D'] ?? 0 }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Comparison Table -->
        <div class="comparison-section fade-in">
            <h2 class="section-title">ตารางเปรียบเทียบรายละเอียด</h2>
            
            <!-- Rating Comparison -->
            <div class="comparison-category">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="category-title">
                        <h3>คะแนนประเมิน</h3>
                        <p>คะแนนรวมและแยกตามหมวดหมู่</p>
                    </div>
                </div>
                
                <div class="comparison-table">
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-trophy"></i>
                            <span>คะแนนรวม</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data highlight-price">
                                {{ $house->total_score ?? 0 }}/100
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-building"></i>
                            <span>โครงสร้าง (A)</span>
                        </div>
                        @foreach($houses as $house)
                            @php $breakdown = $house->getRatingBreakdown(); @endphp
                            <div class="row-data">
                                <span class="category-badge category-a">{{ $breakdown['A'] ?? 0 }} คะแนน</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-shield-alt"></i>
                            <span>ความปลอดภัย (B)</span>
                        </div>
                        @foreach($houses as $house)
                            @php $breakdown = $house->getRatingBreakdown(); @endphp
                            <div class="row-data">
                                <span class="category-badge category-b">{{ $breakdown['B'] ?? 0 }} คะแนน</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-couch"></i>
                            <span>ความสะดวกสบาย (C)</span>
                        </div>
                        @foreach($houses as $house)
                            @php $breakdown = $house->getRatingBreakdown(); @endphp
                            <div class="row-data">
                                <span class="category-badge category-c">{{ $breakdown['C'] ?? 0 }} คะแนน</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-microchip"></i>
                            <span>เทคโนโลยี (D)</span>
                        </div>
                        @foreach($houses as $house)
                            @php $breakdown = $house->getRatingBreakdown(); @endphp
                            <div class="row-data">
                                <span class="category-badge category-d">{{ $breakdown['D'] ?? 0 }} คะแนน</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Basic Information -->
            <div class="comparison-category">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="category-title">
                        <h3>ข้อมูลพื้นฐาน</h3>
                        <p>ข้อมูลทั่วไปของบ้าน</p>
                    </div>
                </div>
                
                <div class="comparison-table">
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-tag"></i>
                            <span>ราคาบ้าน</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data highlight-price">
                                {{ number_format($house->price ?? 0) }} บาท
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-ruler-combined"></i>
                            <span>พื้นที่ใช้สอย</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                {{ $house->area }} ตร.ม.
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bed"></i>
                            <span>ห้องนอน</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                {{ $house->bedrooms }} ห้อง
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bath"></i>
                            <span>ห้องน้ำ</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                {{ $house->bathrooms }} ห้อง
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-car"></i>
                            <span>ที่จอดรถ</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                {{ $house->car_park }} คัน
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Structure Category (A) -->
            <div class="comparison-category">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="category-title">
                        <h3>โครงสร้าง (A) - น้ำหนัก 45%</h3>
                        <p>ระบบโครงสร้างพื้นฐานของบ้าน</p>
                    </div>
                </div>
                
                <div class="comparison-table">
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>มิเตอร์ไฟฟ้า</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_electric_meter ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_electric_meter ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_electric_meter ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->electric_meter_spec)
                                    <div class="feature-spec">{{ $house->electric_meter_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-power-off"></i>
                            <span>เมนเบรกเกอร์</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_main_breaker ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_main_breaker ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_main_breaker ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->main_breaker_spec)
                                    <div class="feature-spec">{{ $house->main_breaker_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-water"></i>
                            <span>ถังเก็บน้ำ</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_water_tank ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_water_tank ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_water_tank ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->water_tank_spec)
                                    <div class="feature-spec">{{ $house->water_tank_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-brick-wall"></i>
                            <span>โครงสร้างผนัง</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                @if($house->wall_structure)
                                    <div class="feature-status available">
                                        <i class="fas fa-check-circle"></i>
                                        <span>{{ $house->wall_structure }}</span>
                                    </div>
                                @else
                                    <div class="feature-status not-available">
                                        <i class="fas fa-times-circle"></i>
                                        <span>ไม่ระบุ</span>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Safety Category (B) -->
            <div class="comparison-category">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="category-title">
                        <h3>ความปลอดภัย (B) - น้ำหนัก 35%</h3>
                        <p>ระบบรักษาความปลอดภัยและป้องกันอัคคีภัย</p>
                    </div>
                </div>
                
                <div class="comparison-table">
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-plug"></i>
                            <span>ระบบ RCD</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_rcd ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_rcd ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_rcd ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->rcd_spec)
                                    <div class="feature-spec">{{ $house->rcd_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-fire"></i>
                            <span>Smoke Detector</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_smoke_detector ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_smoke_detector ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_smoke_detector ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->smoke_detector_spec)
                                    <div class="feature-spec">{{ $house->smoke_detector_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-thermometer-half"></i>
                            <span>Heat Detector</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_heat_detector ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_heat_detector ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_heat_detector ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->heat_detector_spec)
                                    <div class="feature-spec">{{ $house->heat_detector_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-video"></i>
                            <span>CCTV</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_cctv_camera ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_cctv_camera ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_cctv_camera ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->cctv_camera_spec)
                                    <div class="feature-spec">{{ $house->cctv_camera_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Comfort Category (C) -->
            <div class="comparison-category">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-couch"></i>
                    </div>
                    <div class="category-title">
                        <h3>ความสะดวกสบาย (C) - น้ำหนัก 15%</h3>
                        <p>สิ่งอำนวยความสะดวกและความสบาย</p>
                    </div>
                </div>
                
                <div class="comparison-table">
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-door-open"></i>
                            <span>ประตูอัตโนมัติ</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_door_automatic ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_door_automatic ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_door_automatic ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->door_automatic_spec)
                                    <div class="feature-spec">{{ $house->door_automatic_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-warehouse"></i>
                            <span>ประตูโรงรถอัตโนมัติ</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_garage_door ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_garage_door ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_garage_door ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->garage_door_spec)
                                    <div class="feature-spec">{{ $house->garage_door_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-bell"></i>
                            <span>กริ่งประตู</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_door_bell ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_door_bell ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_door_bell ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->door_bell_spec)
                                    <div class="feature-spec">{{ $house->door_bell_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Technology Category (D) -->
            <div class="comparison-category">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="category-title">
                        <h3>เทคโนโลยี (D) - น้ำหนัก 5%</h3>
                        <p>เทคโนโลยีสมัยใหม่และนวัตกรรม</p>
                    </div>
                </div>
                
                <div class="comparison-table">
                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-car-battery"></i>
                            <span>EV Charger</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_ev_charger ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_ev_charger ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_ev_charger ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->ev_charger_spec)
                                    <div class="feature-spec">{{ $house->ev_charger_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-brain"></i>
                            <span>Smart Home</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_smart_home ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_smart_home ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_smart_home ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->smart_home_spec)
                                    <div class="feature-spec">{{ $house->smart_home_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="comparison-row">
                        <div class="row-label">
                            <i class="fas fa-solar-panel"></i>
                            <span>Solar Roof</span>
                        </div>
                        @foreach($houses as $house)
                            <div class="row-data">
                                <div class="feature-status {{ $house->has_solar_roof ? 'available' : 'not-available' }}">
                                    <i class="fas {{ $house->has_solar_roof ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                    <span>{{ $house->has_solar_roof ? 'มี' : 'ไม่มี' }}</span>
                                </div>
                                @if($house->solar_roof_spec)
                                    <div class="feature-spec">{{ $house->solar_roof_spec }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rating Modal -->
    <div class="rating-modal" id="ratingModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">เกณฑ์การให้คะแนน</h2>
                <button class="modal-close" onclick="closeRatingModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="rating-criteria">
                    <!-- Structure Category -->
                    <div class="criteria-category">
                        <div class="criteria-header">
                            <div class="criteria-title">
                                <span class="category-badge category-a">A</span>
                                <span>โครงสร้าง</span>
                            </div>
                            <div class="criteria-weight">45%</div>
                        </div>
                        <div class="criteria-items">
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>มิเตอร์ไฟฟ้า</span>
                                </div>
                                <div class="item-points">45 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-power-off"></i>
                                    <span>เมนเบรกเกอร์</span>
                                </div>
                                <div class="item-points">30 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-water"></i>
                                    <span>ถังเก็บน้ำ</span>
                                </div>
                                <div class="item-points">25 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-brick-wall"></i>
                                    <span>โครงสร้างผนัง</span>
                                </div>
                                <div class="item-points">20 คะแนน</div>
                            </div>
                        </div>
                    </div>

                    <!-- Safety Category -->
                    <div class="criteria-category">
                        <div class="criteria-header">
                            <div class="criteria-title">
                                <span class="category-badge category-b">B</span>
                                <span>ความปลอดภัย</span>
                            </div>
                            <div class="criteria-weight">35%</div>
                        </div>
                        <div class="criteria-items">
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-plug"></i>
                                    <span>ระบบ RCD</span>
                                </div>
                                <div class="item-points">35 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-fire"></i>
                                    <span>Smoke Detector</span>
                                </div>
                                <div class="item-points">25 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-thermometer-half"></i>
                                    <span>Heat Detector</span>
                                </div>
                                <div class="item-points">25 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>ระบบรักษาความปลอดภัย</span>
                                </div>
                                <div class="item-points">20 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-video"></i>
                                    <span>CCTV</span>
                                </div>
                                <div class="item-points">15 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-lightbulb"></i>
                                    <span>ไฟฉุกเฉิน</span>
                                </div>
                                <div class="item-points">10 คะแนน</div>
                            </div>
                        </div>
                    </div>

                    <!-- Comfort Category -->
                    <div class="criteria-category">
                        <div class="criteria-header">
                            <div class="criteria-title">
                                <span class="category-badge category-c">C</span>
                                <span>ความสะดวกสบาย</span>
                            </div>
                            <div class="criteria-weight">15%</div>
                        </div>
                        <div class="criteria-items">
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-door-open"></i>
                                    <span>ประตูอัตโนมัติ</span>
                                </div>
                                <div class="item-points">15 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-warehouse"></i>
                                    <span>ประตูโรงรถอัตโนมัติ</span>
                                </div>
                                <div class="item-points">10 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-bell"></i>
                                    <span>กริ่งประตู</span>
                                </div>
                                <div class="item-points">8 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-pump-soap"></i>
                                    <span>ปั๊มน้ำ</span>
                                </div>
                                <div class="item-points">7 คะแนน</div>
                            </div>
                        </div>
                    </div>

                    <!-- Technology Category -->
                    <div class="criteria-category">
                        <div class="criteria-header">
                            <div class="criteria-title">
                                <span class="category-badge category-d">D</span>
                                <span>เทคโนโลยี</span>
                            </div>
                            <div class="criteria-weight">5%</div>
                        </div>
                        <div class="criteria-items">
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-car-battery"></i>
                                    <span>EV Charger</span>
                                </div>
                                <div class="item-points">5 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-brain"></i>
                                    <span>Smart Home</span>
                                </div>
                                <div class="item-points">3 คะแนน</div>
                            </div>
                            <div class="criteria-item">
                                <div class="item-name">
                                    <i class="fas fa-solar-panel"></i>
                                    <span>Solar Roof</span>
                                </div>
                                <div class="item-points">2 คะแนน</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showRatingModal(houseId, houseName, totalScore, breakdown) {
            const modal = document.getElementById('ratingModal');
            const modalTitle = document.getElementById('modalTitle');
            
            modalTitle.textContent = `เกณฑ์การให้คะแนน - ${houseName} (${totalScore}/100)`;
            modal.classList.add('active');
            
            // Prevent body scroll when modal is open
            document.body.style.overflow = 'hidden';
        }

        function closeRatingModal() {
            const modal = document.getElementById('ratingModal');
            modal.classList.remove('active');
            
            // Restore body scroll
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('ratingModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeRatingModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeRatingModal();
            }
        });

        // Function to update star ratings based on score
        function updateStarRatings() {
            const starRatings = document.querySelectorAll('.star-rating');
            
            starRatings.forEach(rating => {
                const score = parseInt(rating.dataset.score);
                const stars = rating.querySelectorAll('.star');
                const starCount = Math.floor(score / 20); // Convert 100-point scale to 5-star scale
                const hasHalfStar = (score % 20) >= 10; // Show half star if remainder >= 10
                
                stars.forEach((star, index) => {
                    star.classList.remove('filled', 'half');
                    
                    if (index < starCount) {
                        star.classList.add('filled');
                    } else if (index === starCount && hasHalfStar) {
                        star.classList.add('half');
                    }
                });
            });
        }

        // Add fade-in animation to elements as they come into view
        document.addEventListener('DOMContentLoaded', function() {
            // Update star ratings
            updateStarRatings();
            
            // Existing animation code...
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all cards and sections
            document.querySelectorAll('.house-card, .comparison-section, .comparison-category').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });

            markBestRatingHouse();
        });

        // Replace markBestRatingHouse function with simpler version
        function markBestRatingHouse() {
            const houseCards = document.querySelectorAll('.house-card');
            let maxScore = 0;
            let bestHouseCard = null;

            houseCards.forEach(card => {
                const score = parseFloat(card.dataset.score) || 0;
                if (score > maxScore) {
                    maxScore = score;
                    bestHouseCard = card;
                }
            });

            if (bestHouseCard && maxScore > 0) {
                const star = bestHouseCard.querySelector('.top-star');
                if (star) star.style.display = 'flex';
            }
        }
    </script>
</body>
</html>
