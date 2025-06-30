@extends('layouts.layout_home')

@section('content')
    <!DOCTYPE html>
    <html lang="th">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ผังสมาชิกบริษัท</title>
            <link rel="stylesheet" href="css/page/member.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap"
                rel="stylesheet">
        </head>
        <>
            <div class="container">
                <header class="main-header">
                    <h1 class="title">สมาชิกทีมงานของเรา</h1>
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

                <!-- แผนกผู้บริหาร -->
                <section class="department-section" data-department="executive">
                    <div class="department-header">
                        <h2 class="department-title">ผู้บริหาร</h2>
                        <div class="department-line"></div>
                        <span class="department-count">3 คน</span>
                    </div>

                    <div class="team-grid">
                        <div class="team-card" data-id="1">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="/img/staff/CEO.jpg" class="card-image" style="width: 100%; height: 100%; object-fit: cover;"
                                    alt="ธนพล สุขสวัสดิ์">
                                <div class="card-image-content">
                                    <span class="department-badge">ผู้บริหาร</span>
                                    <h3>ธนพล สุขสวัสดิ์</h3>
                                    <p>ประธานเจ้าหน้าที่บริหาร</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>thanapon@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">ภาวะผู้นำ</span>
                                    <span class="skill-badge">วางแผนกลยุทธ์</span>
                                </div>
                            </div>
                        </div>

                        <div class="team-card" data-id="2">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=สุนิสา"
                                    alt="สุนิสา จันทร์เพ็ญ">
                                <div class="card-image-content">
                                    <span class="department-badge">ผู้บริหาร</span>
                                    <h3>สุนิสา จันทร์เพ็ญ</h3>
                                    <p>ประธานเจ้าหน้าที่ฝ่ายปฏิบัติการ</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>sunisa@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">การจัดการ</span>
                                    <span class="skill-badge">พัฒนาทีม</span>
                                </div>
                            </div>
                        </div>

                        <div class="team-card" data-id="3">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=วิชัย"
                                    alt="วิชัย รักษ์ไทย">
                                <div class="card-image-content">
                                    <span class="department-badge">ผู้บริหาร</span>
                                    <h3>วิชัย รักษ์ไทย</h3>
                                    <p>ประธานเจ้าหน้าที่ฝ่ายการเงิน</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>wichai@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">วิเคราะห์การเงิน</span>
                                    <span class="skill-badge">บริหารความเสี่ยง</span>
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
