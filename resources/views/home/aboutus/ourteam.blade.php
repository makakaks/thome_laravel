@extends('component.layout  ')

@section('content')
    <!DOCTYPE html>
    <html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บริการบ้าน - ตรวจบ้าน ต่อเติม ตกแต่ง</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header Styles */
        .main-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .title-underline {
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #3498db, #2980b9);
            margin: 0 auto;
            border-radius: 2px;
        }

        /* Service Selection */
        .service-selection {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .service-btn {
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .service-btn.inspection {
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
        }

        .service-btn.extension {
            background: linear-gradient(45deg, #e67e22, #d35400);
            color: white;
        }

        .service-btn.decoration {
            background: linear-gradient(45deg, #ecf0f1, #bdc3c7);
            color: #2c3e50;
        }

        .service-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .service-btn.active {
            transform: scale(1.05);
        }

        /* Service Content */
        .service-content {
            display: none;
        }

        .service-content.active {
            display: block;
        }

        /* Filter Styles */
        .filter-container {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .filter-header {
            text-align: center;
            margin-bottom: 15px;
        }

        .filter-header i {
            font-size: 1.5rem;
            color: #7f8c8d;
        }

        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 10px 20px;
            border: 2px solid transparent;
            border-radius: 20px;
            background: #ecf0f1;
            color: #2c3e50;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Theme-specific filter buttons */
        .inspection .filter-btn.active {
            background: #3498db;
            color: white;
            border-color: #2980b9;
        }

        .extension .filter-btn.active {
            background: #e67e22;
            color: white;
            border-color: #d35400;
        }

        .decoration .filter-btn.active {
            background: #2c3e50;
            color: white;
            border-color: #34495e;
        }

        .filter-btn:hover {
            transform: translateY(-1px);
        }

        /* Department Section */
        .department-section {
            margin-bottom: 40px;
        }

        .department-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .department-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .department-line {
            flex: 1;
            height: 3px;
            border-radius: 2px;
        }

        /* Theme-specific department lines */
        .inspection .department-line {
            background: linear-gradient(45deg, #3498db, #2980b9);
        }

        .extension .department-line {
            background: linear-gradient(45deg, #e67e22, #d35400);
        }

        .decoration .department-line {
            background: linear-gradient(45deg, #95a5a6, #7f8c8d);
        }

        .department-count {
            background: #ecf0f1;
            color: #2c3e50;
            padding: 5px 15px;
            border-radius: 15px;
            font-weight: 600;
        }

        /* Team Grid */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .team-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .card-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .team-card:hover .card-image img {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.7) 100%);
            z-index: 1;
        }

        .card-image-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            z-index: 2;
            color: white;
        }

        .department-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        /* Theme-specific badges */
        .inspection .department-badge {
            background: #3498db;
        }

        .extension .department-badge {
            background: #e67e22;
        }

        .decoration .department-badge {
            background: #95a5a6;
        }

        .card-image-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .card-image-content p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .card-content {
            padding: 20px;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            color: #7f8c8d;
        }

        .contact-info i {
            width: 16px;
        }

        .skills {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .skill-badge {
            background: #ecf0f1;
            color: #2c3e50;
            padding: 5px 12px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: white;
            margin: 2% auto;
            padding: 0;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }

        .close-modal {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            z-index: 10;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }

        .modal-header {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .modal-header h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .modal-body {
            padding: 30px;
        }

        .modal-profile {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
        }

        .modal-avatar img {
            width: 100%;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .modal-contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            color: #7f8c8d;
        }

        .modal-section {
            margin-bottom: 25px;
        }

        .modal-section h3 {
            color: #2c3e50;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .modal-skills {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .modal-footer {
            padding: 20px 30px;
            text-align: center;
            border-top: 1px solid #ecf0f1;
        }

        .close-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .close-btn:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }

            .service-selection {
                flex-direction: column;
                align-items: center;
            }

            .service-btn {
                width: 100%;
                max-width: 300px;
            }

            .filter-tabs {
                flex-direction: column;
                align-items: center;
            }

            .filter-btn {
                width: 100%;
                max-width: 200px;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .modal-profile {
                grid-template-columns: 1fr;
            }

            .department-header {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .department-line {
                width: 100px;
                margin: 0 auto;
            }
        }

        /* Hidden class for filtering */
        .hidden {
            display: none !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1 class="title">บริการบ้านครบวงจร</h1>
            <div class="title-underline"></div>
        </header>

        <!-- Service Selection -->
        <div class="service-selection">
            <button class="service-btn inspection active" data-service="inspection">
                <i class="fas fa-search"></i> ตรวจบ้าน
            </button>
            <button class="service-btn extension" data-service="extension">
                <i class="fas fa-hammer"></i> ต่อเติม
            </button>
            <button class="service-btn decoration" data-service="decoration">
                <i class="fas fa-paint-brush"></i> ตกแต่ง
            </button>
        </div>

        <!-- Home Inspection Service -->
        <div class="service-content inspection active" id="inspection">
            <div class="filter-container">
                <div class="filter-header">
                    <i class="fas fa-filter"></i>
                </div>
                <div class="filter-tabs">
                    <button class="filter-btn active" data-category="all">ทั้งหมด</button>
                    <button class="filter-btn" data-category="structure">โครงสร้าง</button>
                    <button class="filter-btn" data-category="electrical">ไฟฟ้า</button>
                    <button class="filter-btn" data-category="plumbing">ประปา</button>
                    <button class="filter-btn" data-category="safety">ความปลอดภัย</button>
                </div>
            </div>

            <section class="department-section" data-category="structure">
                <div class="department-header">
                    <h2 class="department-title">ผู้บริหาร</h2>
                    <div class="department-line"></div>
                    <span class="department-count">3 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="1">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="/img/staff/CEO.jpg" alt="วิศวกรโครงสร้าง">
                            <div class="card-image-content">
                                <span class="department-badge">โครงสร้าง</span>
                                <h3>CEO</h3>
                                <p>วิศวกรโครงสร้างอาวุโส</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ตรวจสอบฐานราก</span>
                                <span class="skill-badge">วิเคราะห์โครงสร้าง</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="2">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=ผู้เชี่ยวชาญ+คอนกรีต" alt="ผู้เชี่ยวชาญคอนกรีต">
                            <div class="card-image-content">
                                <span class="department-badge">โครงสร้าง</span>
                                <h3>วิไล คอนกรีต</h3>
                                <p>ผู้เชี่ยวชาญด้านคอนกรีต</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ทดสอบคอนกรีต</span>
                                <span class="skill-badge">ตรวจสอบรอยร้าว</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="3">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=ช่างเหล็ก" alt="ช่างเหล็ก">
                            <div class="card-image-content">
                                <span class="department-badge">โครงสร้าง</span>
                                <h3>ประสิทธิ์ เหล็กดี</h3>
                                <p>ช่างเหล็กผู้เชี่ยวชาญ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ตรวจสอบเหล็กเสริม</span>
                                <span class="skill-badge">วิเคราะห์การกัดกร่อน</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="electrical">
                <div class="department-header">
                    <h2 class="department-title">ตรวจระบบไฟฟ้า</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="4">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=ช่างไฟฟ้า" alt="ช่างไฟฟ้า">
                            <div class="card-image-content">
                                <span class="department-badge">ไฟฟ้า</span>
                                <h3>สุรชัย ไฟฟ้า</h3>
                                <p>ช่างไฟฟ้าอาวุโส</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ตรวจสอบระบบไฟฟ้า</span>
                                <span class="skill-badge">วัดค่าความต้านทาน</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="5">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=วิศวกรไฟฟ้า" alt="วิศวกรไฟฟ้า">
                            <div class="card-image-content">
                                <span class="department-badge">ไฟฟ้า</span>
                                <h3>อนุชา วงจรไฟ</h3>
                                <p>วิศวกรไฟฟ้า</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ออกแบบระบบไฟฟ้า</span>
                                <span class="skill-badge">ตรวจสอบความปลอดภัย</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="plumbing">
                <div class="department-header">
                    <h2 class="department-title">ตรวจระบบประปา</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="6">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=ช่างประปา" alt="ช่างประปา">
                            <div class="card-image-content">
                                <span class="department-badge">ประปา</span>
                                <h3>มานะ น้ำใส</h3>
                                <p>ช่างประปาผู้เชี่ยวชาญ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ตรวจสอบท่อประปา</span>
                                <span class="skill-badge">ทดสอบแรงดันน้ำ</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="7">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=ผู้เชี่ยวชาญ+ระบายน้ำ" alt="ผู้เชี่ยวชาญระบายน้ำ">
                            <div class="card-image-content">
                                <span class="department-badge">ประปา</span>
                                <h3>สมหญิง ระบายน้ำ</h3>
                                <p>ผู้เชี่ยวชาญระบบระบายน้ำ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ตรวจสอบระบบระบายน้ำ</span>
                                <span class="skill-badge">แก้ไขปัญหาการอุดตัน</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="safety">
                <div class="department-header">
                    <h2 class="department-title">ตรวจความปลอดภัย</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="8">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=ผู้เชี่ยวชาญ+ความปลอดภัย" alt="ผู้เชี่ยวชาญความปลอดภัย">
                            <div class="card-image-content">
                                <span class="department-badge">ความปลอดภัย</span>
                                <h3>วิทยา ปลอดภัย</h3>
                                <p>ผู้เชี่ยวชาญด้านความปลอดภัย</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ตรวจสอบระบบดับเพลิง</span>
                                <span class="skill-badge">ประเมินความเสี่ยง</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="9">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/3498db/ffffff?text=ผู้ตรวจสอบ+อาคาร" alt="ผู้ตรวจสอบอาคาร">
                            <div class="card-image-content">
                                <span class="department-badge">ความปลอดภัย</span>
                                <h3>สุดา ตรวจสอบ</h3>
                                <p>ผู้ตรวจสอบอาคาร</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ตรวจสอบมาตรฐานอาคาร</span>
                                <span class="skill-badge">ออกใบรับรอง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Home Extension Service -->
        <div class="service-content extension" id="extension">
            <div class="filter-container">
                <div class="filter-header">
                    <i class="fas fa-filter"></i>
                </div>
                <div class="filter-tabs">
                    <button class="filter-btn active" data-category="all">ทั้งหมด</button>
                    <button class="filter-btn" data-category="room">ต่อเติมห้อง</button>
                    <button class="filter-btn" data-category="floor">เพิ่มชั้น</button>
                    <button class="filter-btn" data-category="outdoor">พื้นที่กลางแจ้ง</button>
                    <button class="filter-btn" data-category="renovation">ปรับปรุง</button>
                </div>
            </div>

            <section class="department-section" data-category="room">
                <div class="department-header">
                    <h2 class="department-title">ต่อเติมห้อง</h2>
                    <div class="department-line"></div>
                    <span class="department-count">3 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="10">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=สถาปนิก" alt="สถาปนิก">
                            <div class="card-image-content">
                                <span class="department-badge">ต่อเติมห้อง</span>
                                <h3>ชาญชัย ออกแบบ</h3>
                                <p>สถาปนิกอาวุโส</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ออกแบบห้อง</span>
                                <span class="skill-badge">วางผังบ้าน</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="11">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=ช่างก่อสร้าง" alt="ช่างก่อสร้าง">
                            <div class="card-image-content">
                                <span class="department-badge">ต่อเติมห้อง</span>
                                <h3>สมบูรณ์ ก่อสร้าง</h3>
                                <p>หัวหน้าช่างก่อสร้าง</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ก่อสร้างห้อง</span>
                                <span class="skill-badge">ควบคุมคุณภาพ</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="12">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=ผู้จัดการโครงการ" alt="ผู้จัดการโครงการ">
                            <div class="card-image-content">
                                <span class="department-badge">ต่อเติมห้อง</span>
                                <h3>วิมล จัดการ</h3>
                                <p>ผู้จัดการโครงการ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">บริหารโครงการ</span>
                                <span class="skill-badge">ควบคุมงบประมาณ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="floor">
                <div class="department-header">
                    <h2 class="department-title">เพิ่มชั้น</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="13">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=วิศวกรโครงสร้าง" alt="วิศวกรโครงสร้าง">
                            <div class="card-image-content">
                                <span class="department-badge">เพิ่มชั้น</span>
                                <h3>ธีรพงษ์ โครงสร้าง</h3>
                                <p>วิศวกรโครงสร้าง</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">คำนวณโครงสร้าง</span>
                                <span class="skill-badge">ออกแบบฐานราก</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="14">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=ช่างเหล็ก" alt="ช่างเหล็ก">
                            <div class="card-image-content">
                                <span class="department-badge">เพิ่มชั้น</span>
                                <h3>ประยุทธ เหล็กแกร่ง</h3>
                                <p>ช่างเหล็กโครงสร้าง</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">เชื่อมโครงเหล็ก</span>
                                <span class="skill-badge">ติดตั้งโครงสร้าง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="outdoor">
                <div class="department-header">
                    <h2 class="department-title">พื้นที่กลางแจ้ง</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="15">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=ผู้เชี่ยวชาญ+ภูมิทัศน์" alt="ผู้เชี่ยวชาญภูมิทัศน์">
                            <div class="card-image-content">
                                <span class="department-badge">พื้นที่กลางแจ้ง</span>
                                <h3>สุนีย์ ภูมิทัศน์</h3>
                                <p>ผู้เชี่ยวชาญภูมิทัศน์</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ออกแบบสวน</span>
                                <span class="skill-badge">จัดภูมิทัศน์</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="16">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=ช่างไม้" alt="ช่างไม้">
                            <div class="card-image-content">
                                <span class="department-badge">พื้นที่กลางแจ้ง</span>
                                <h3>บุญมี ไม้ดี</h3>
                                <p>ช่างไม้ผู้เชี่ยวชาญ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">สร้างศาลา</span>
                                <span class="skill-badge">ทำระเบียงไม้</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="renovation">
                <div class="department-header">
                    <h2 class="department-title">ปรับปรุง</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="17">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=ช่างปรับปรุง" alt="ช่างปรับปรุง">
                            <div class="card-image-content">
                                <span class="department-badge">ปรับปรุง</span>
                                <h3>สมศักดิ์ ปรับปรุง</h3>
                                <p>ช่างปรับปรุงอาวุโส</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ปรับปรุงห้องน้ำ</span>
                                <span class="skill-badge">ปรับปรุงครัว</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="18">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/e67e22/ffffff?text=ผู้เชี่ยวชาญ+ระบบ" alt="ผู้เชี่ยวชาญระบบ">
                            <div class="card-image-content">
                                <span class="department-badge">ปรับปรุง</span>
                                <h3>อรุณ ระบบดี</h3>
                                <p>ผู้เชี่ยวชาญระบบบ้าน</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ปรับปรุงระบบไฟฟ้า</span>
                                <span class="skill-badge">ปรับปรุงระบบประปา</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Home Decoration Service -->
        <div class="service-content decoration" id="decoration">
            <div class="filter-container">
                <div class="filter-header">
                    <i class="fas fa-filter"></i>
                </div>
                <div class="filter-tabs">
                    <button class="filter-btn active" data-category="all">ทั้งหมด</button>
                    <button class="filter-btn" data-category="interior">ตกแต่งภายใน</button>
                    <button class="filter-btn" data-category="furniture">เฟอร์นิเจอร์</button>
                    <button class="filter-btn" data-category="lighting">แสงสว่าง</button>
                    <button class="filter-btn" data-category="color">สีและวัสดุ</button>
                </div>
            </div>

            <section class="department-section" data-category="interior">
                <div class="department-header">
                    <h2 class="department-title">ตกแต่งภายใน</h2>
                    <div class="department-line"></div>
                    <span class="department-count">3 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="19">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=นักออกแบบ+ภายใน" alt="นักออกแบบภายใน">
                            <div class="card-image-content">
                                <span class="department-badge">ตกแต่งภายใน</span>
                                <h3>สุวิมล ออกแบบ</h3>
                                <p>นักออกแบบภายในอาวุโส</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ออกแบบภายใน</span>
                                <span class="skill-badge">จัดวางพื้นที่</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="20">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ผู้เชี่ยวชาญ+สไตล์" alt="ผู้เชี่ยวชาญสไตล์">
                            <div class="card-image-content">
                                <span class="department-badge">ตกแต่งภายใน</span>
                                <h3>ปิยะดา สไตล์</h3>
                                <p>ผู้เชี่ยวชาญด้านสไตล์</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">สไตล์โมเดิร์น</span>
                                <span class="skill-badge">สไตล์มินิมอล</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="21">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ผู้ประสานงาน" alt="ผู้ประสานงาน">
                            <div class="card-image-content">
                                <span class="department-badge">ตกแต่งภายใน</span>
                                <h3>วรรณา ประสานงาน</h3>
                                <p>ผู้ประสานงานโครงการ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ประสานงานโครงการ</span>
                                <span class="skill-badge">ติดตามงาน</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="furniture">
                <div class="department-header">
                    <h2 class="department-title">เฟอร์นิเจอร์</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="22">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ผู้เชี่ยวชาญ+เฟอร์นิเจอร์" alt="ผู้เชี่ยวชาญเฟอร์นิเจอร์">
                            <div class="card-image-content">
                                <span class="department-badge">เฟอร์นิเจอร์</span>
                                <h3>สมพงษ์ เฟอร์นิเจอร์</h3>
                                <p>ผู้เชี่ยวชาญเฟอร์นิเจอร์</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">เลือกเฟอร์นิเจอร์</span>
                                <span class="skill-badge">จัดวางเฟอร์นิเจอร์</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="23">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ช่างไม้+เฟอร์นิเจอร์" alt="ช่างไม้เฟอร์นิเจอร์">
                            <div class="card-image-content">
                                <span class="department-badge">เฟอร์นิเจอร์</span>
                                <h3>ชาติชาย ไม้งาม</h3>
                                <p>ช่างไม้เฟอร์นิเจอร์</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ทำเฟอร์นิเจอร์ไม้</span>
                                <span class="skill-badge">ซ่อมเฟอร์นิเจอร์</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="lighting">
                <div class="department-header">
                    <h2 class="department-title">แสงสว่าง</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="24">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ผู้เชี่ยวชาญ+แสงสว่าง" alt="ผู้เชี่ยวชาญแสงสว่าง">
                            <div class="card-image-content">
                                <span class="department-badge">แสงสว่าง</span>
                                <h3>อรทัย แสงสว่าง</h3>
                                <p>ผู้เชี่ยวชาญด้านแสงสว่าง</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ออกแบบแสงสว่าง</span>
                                <span class="skill-badge">เลือกโคมไฟ</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="25">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ช่างไฟ+ตกแต่ง" alt="ช่างไฟตกแต่ง">
                            <div class="card-image-content">
                                <span class="department-badge">แสงสว่าง</span>
                                <h3>วิชัย ไฟสวย</h3>
                                <p>ช่างไฟตกแต่ง</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ติดตั้งโคมไฟ</span>
                                <span class="skill-badge">ระบบไฟ LED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="department-section" data-category="color">
                <div class="department-header">
                    <h2 class="department-title">สีและวัสดุ</h2>
                    <div class="department-line"></div>
                    <span class="department-count">2 ผู้เชี่ยวชาญ</span>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-id="26">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ผู้เชี่ยวชาญ+สี" alt="ผู้เชี่ยวชาญสี">
                            <div class="card-image-content">
                                <span class="department-badge">สีและวัสดุ</span>
                                <h3>สุภาพร สีสวย</h3>
                                <p>ผู้เชี่ยวชาญด้านสี</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">เลือกสี</span>
                                <span class="skill-badge">จับคู่สี</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card" data-id="27">
                        <div class="card-image">
                            <div class="image-overlay"></div>
                            <img src="https://via.placeholder.com/300x400/95a5a6/ffffff?text=ช่างทาสี" alt="ช่างทาสี">
                            <div class="card-image-content">
                                <span class="department-badge">สีและวัสดุ</span>
                                <h3>กิตติ ทาสี</h3>
                                <p>ช่างทาสีผู้เชี่ยวชาญ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="skills">
                                <span class="skill-badge">ทาสีผนัง</span>
                                <span class="skill-badge">ตกแต่งผิวผนัง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="profileModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-header">
                <h2 id="modal-name">ชื่อผู้เชี่ยวชาญ</h2>
                <p id="modal-position">ตำแหน่ง - บริการ</p>
            </div>
            <div class="modal-body">
                <div class="modal-profile">
                    <div class="modal-avatar">
                        <img id="modal-image" src="https://via.placeholder.com/300x400" alt="ผู้เชี่ยวชาญ">
                        <div class="modal-contact">
                            <div class="modal-contact-item">
                                <i class="fas fa-envelope"></i>
                                <span id="modal-email">email@company.com</span>
                            </div>
                            <div class="modal-contact-item">
                                <i class="fas fa-phone"></i>
                                <span id="modal-phone">+66 89 123 4567</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-info">
                        <div class="modal-section">
                            <h3><i class="fas fa-user"></i> ประวัติ</h3>
                            <p id="modal-bio">ประวัติผู้เชี่ยวชาญ...</p>
                        </div>
                        <div class="modal-section">
                            <h3><i class="fas fa-award"></i> ความสำเร็จ</h3>
                            <ul id="modal-achievements">
                                <li>ความสำเร็จ 1</li>
                                <li>ความสำเร็จ 2</li>
                                <li>ความสำเร็จ 3</li>
                            </ul>
                        </div>
                        <div class="modal-section">
                            <h3>ทักษะ</h3>
                            <div id="modal-skills" class="modal-skills">
                                <span class="skill-badge">ทักษะ 1</span>
                                <span class="skill-badge">ทักษะ 2</span>
                                <span class="skill-badge">ทักษะ 3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="close-btn">ปิด</button>
            </div>
        </div>
    </div>

    <script>
        // Service switching functionality
        const serviceButtons = document.querySelectorAll('.service-btn');
        const serviceContents = document.querySelectorAll('.service-content');

        serviceButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetService = button.getAttribute('data-service');
                
                // Remove active class from all buttons and contents
                serviceButtons.forEach(btn => btn.classList.remove('active'));
                serviceContents.forEach(content => content.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                button.classList.add('active');
                document.getElementById(targetService).classList.add('active');
            });
        });

        // Filter functionality for each service
        function initializeFilters() {
            const allServices = ['inspection', 'extension', 'decoration'];
            
            allServices.forEach(serviceName => {
                const serviceElement = document.getElementById(serviceName);
                const filterButtons = serviceElement.querySelectorAll('.filter-btn');
                const departmentSections = serviceElement.querySelectorAll('.department-section');
                
                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const targetCategory = button.getAttribute('data-category');
                        
                        // Remove active class from all filter buttons in this service
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        
                        // Add active class to clicked button
                        button.classList.add('active');
                        
                        // Show/hide department sections based on filter
                        departmentSections.forEach(section => {
                            const sectionCategory = section.getAttribute('data-category');
                            
                            if (targetCategory === 'all' || sectionCategory === targetCategory) {
                                section.classList.remove('hidden');
                            } else {
                                section.classList.add('hidden');
                            }
                        });
                    });
                });
            });
        }

        // Modal functionality
        const modal = document.getElementById('profileModal');
        const closeModal = document.querySelector('.close-modal');
        const closeBtn = document.querySelector('.close-btn');
        const teamCards = document.querySelectorAll('.team-card');

        // Sample data for modal (you can expand this with real data)
        const employeeData = {
            1: {
                name: "สมชาย วิศวกรรม",
                position: "วิศวกรโครงสร้างอาวุโส - ตรวจบ้าน",
                email: "somchai@inspection.com",
                phone: "+66 89 123 4567",
                bio: "วิศวกรโครงสร้างที่มีประสบการณ์กว่า 15 ปี เชี่ยวชาญในการตรวจสอบและประเมินความแข็งแรงของโครงสร้างอาคาร",
                achievements: [
                    "ได้รับใบรับรองวิศวกรโครงสร้างจากสภาวิศวกร",
                    "มีประสบการณ์ตรวจสอบอาคารมากกว่า 500 หลัง",
                    "ผู้เชี่ยวชาญด้านการประเมินความเสี่ยงโครงสร้าง"
                ],
                skills: ["ตรวจสอบฐานราก", "วิเคราะห์โครงสร้าง", "ประเมินความปลอดภัย"]
            },
            // Add more employee data as needed
        };

        teamCards.forEach(card => {
            card.addEventListener('click', () => {
                const employeeId = card.getAttribute('data-id');
                const data = employeeData[employeeId];
                
                if (data) {
                    document.getElementById('modal-name').textContent = data.name;
                    document.getElementById('modal-position').textContent = data.position;
                    document.getElementById('modal-email').textContent = data.email;
                    document.getElementById('modal-phone').textContent = data.phone;
                    document.getElementById('modal-bio').textContent = data.bio;
                    
                    // Update achievements
                    const achievementsList = document.getElementById('modal-achievements');
                    achievementsList.innerHTML = '';
                    data.achievements.forEach(achievement => {
                        const li = document.createElement('li');
                        li.textContent = achievement;
                        achievementsList.appendChild(li);
                    });
                    
                    // Update skills
                    const skillsContainer = document.getElementById('modal-skills');
                    skillsContainer.innerHTML = '';
                    data.skills.forEach(skill => {
                        const span = document.createElement('span');
                        span.className = 'skill-badge';
                        span.textContent = skill;
                        skillsContainer.appendChild(span);
                    });
                    
                    // Update image
                    const cardImage = card.querySelector('.card-image img');
                    document.getElementById('modal-image').src = cardImage.src;
                } else {
                    // Default data if no specific data found
                    const cardContent = card.querySelector('.card-image-content');
                    const name = cardContent.querySelector('h3').textContent;
                    const position = cardContent.querySelector('p').textContent;
                    const email = card.querySelector('.contact-info span').textContent;
                    
                    document.getElementById('modal-name').textContent = name;
                    document.getElementById('modal-position').textContent = position;
                    document.getElementById('modal-email').textContent = email;
                    document.getElementById('modal-phone').textContent = "+66 89 123 4567";
                    document.getElementById('modal-bio').textContent = "ผู้เชี่ยวชาญที่มีประสบการณ์และความเชี่ยวชาญในสาขาของตน พร้อมให้บริการด้วยความใส่ใจและคุณภาพสูงสุด";
                    
                    // Default achievements
                    const achievementsList = document.getElementById('modal-achievements');
                    achievementsList.innerHTML = `
                        <li>มีประสบการณ์ในสาขามากกว่า 10 ปี</li>
                        <li>ได้รับการรับรองจากหน่วยงานที่เกี่ยวข้อง</li>
                        <li>ให้บริการลูกค้าด้วยความเป็นมิตรและมืออาชีพ</li>
                    `;
                    
                    // Get skills from card
                    const skillsContainer = document.getElementById('modal-skills');
                    skillsContainer.innerHTML = '';
                    const cardSkills = card.querySelectorAll('.skill-badge');
                    cardSkills.forEach(skillElement => {
                        const span = document.createElement('span');
                        span.className = 'skill-badge';
                        span.textContent = skillElement.textContent;
                        skillsContainer.appendChild(span);
                    });
                    
                    // Update image
                    const cardImage = card.querySelector('.card-image img');
                    document.getElementById('modal-image').src = cardImage.src;
                }
                
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            });
        });

        // Close modal functionality
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Initialize filters when page loads
        document.addEventListener('DOMContentLoaded', () => {
            initializeFilters();
        });

        // Smooth scrolling for better UX
        document.querySelectorAll('.service-btn').forEach(button => {
            button.addEventListener('click', () => {
                setTimeout(() => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }, 100);
            });
        });
    </script>
</body>
</html>
        @endsection