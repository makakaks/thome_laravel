@extends('component.layout')

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
            <div class="container">
                <header class="main-header">
                    <h1 class="title">สมาชิกทีมงานของเรา</h1>
                    <div class="title-underline"></div>
                </header>

                <div class="filter-container">
                    <div class="filter-header">
                        <i class="fas fa-filter"></i>
                    </div>
                    <div class="filter-tabs">
                        <button class="filter-btn active" data-department="all">ทั้งหมด</button>
                        <button class="filter-btn" data-department="executive">ผู้บริหาร</button>
                        <button class="filter-btn" data-department="marketing">การตลาด</button>
                        <button class="filter-btn" data-department="technology">เทคโนโลยี</button>
                        <button class="filter-btn" data-department="customer-service">บริการลูกค้า</button>
                        <button class="filter-btn" data-department="sales">ฝ่ายขาย</button>
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

                <!-- แผนกการตลาด -->
                <section class="department-section" data-department="marketing">
                    <div class="department-header">
                        <h2 class="department-title">การตลาด</h2>
                        <div class="department-line"></div>
                        <span class="department-count">3 คน</span>
                    </div>

                    <div class="team-grid">
                        <div class="team-card" data-id="4">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=พิมพ์มาดา"
                                    alt="พิมพ์มาดา วงศ์สุวรรณ">
                                <div class="card-image-content">
                                    <span class="department-badge">การตลาด</span>
                                    <h3>พิมพ์มาดา วงศ์สุวรรณ</h3>
                                    <p>ผู้อำนวยการฝ่ายการตลาด</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>pimmada@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">ดิจิทัลมาร์เก็ตติ้ง</span>
                                    <span class="skill-badge">กลยุทธ์แบรนด์</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="5">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=ธนกร"
                                    alt="ธนกร กิจเจริญ">
                                <div class="card-image-content">
                                    <span class="department-badge">การตลาด</span>
                                    <h3>ธนกร กิจเจริญ</h3>
                                    <p>ผู้จัดการโซเชียลมีเดีย</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>thanakorn@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">โซเชียลมีเดีย</span>
                                    <span class="skill-badge">สร้างคอนเทนต์</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="6">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=จิราภา"
                                    alt="จิราภา พัฒนาดี">
                                <div class="card-image-content">
                                    <span class="department-badge">การตลาด</span>
                                    <h3>จิราภา พัฒนาดี</h3>
                                    <p>นักกลยุทธ์คอนเทนต์</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>jirapa@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">กลยุทธ์คอนเทนต์</span>
                                    <span class="skill-badge">SEO</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- แผนกเทคโนโลยี -->
                <section class="department-section" data-department="technology">
                    <div class="department-header">
                        <h2 class="department-title">เทคโนโลยี</h2>
                        <div class="department-line"></div>
                        <span class="department-count">4 คน</span>
                    </div>

                    <div class="team-grid">
                        <div class="team-card" data-id="7">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=ภาณุพงศ์"
                                    alt="ภาณุพงศ์ ทองดี">
                                <div class="card-image-content">
                                    <span class="department-badge">เทคโนโลยี</span>
                                    <h3>ภาณุพงศ์ ทองดี</h3>
                                    <p>ประธานเจ้าหน้าที่ฝ่ายเทคโนโลยี</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>panupong@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">สถาปัตยกรรมซอฟต์แวร์</span>
                                    <span class="skill-badge">คลาวด์คอมพิวติ้ง</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="8">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=อรุณี"
                                    alt="อรุณี มั่นคง">
                                <div class="card-image-content">
                                    <span class="department-badge">เทคโนโลยี</span>
                                    <h3>อรุณี มั่นคง</h3>
                                    <p>หัวหน้านักพัฒนา</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>arunee@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">Full-Stack</span>
                                    <span class="skill-badge">Agile</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="9">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=ชัยวัฒน์"
                                    alt="ชัยวัฒน์ วิจิตรศิลป์">
                                <div class="card-image-content">
                                    <span class="department-badge">เทคโนโลยี</span>
                                    <h3>ชัยวัฒน์ วิจิตรศิลป์</h3>
                                    <p>นักออกแบบ UX/UI</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>chaiwat@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">UX Research</span>
                                    <span class="skill-badge">UI Design</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="10">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=สุภาพร"
                                    alt="สุภาพร ใจดี">
                                <div class="card-image-content">
                                    <span class="department-badge">เทคโนโลยี</span>
                                    <h3>สุภาพร ใจดี</h3>
                                    <p>วิศวกร QA</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>supaporn@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">Automated Testing</span>
                                    <span class="skill-badge">QA</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- แผนกบริการลูกค้า -->
                <section class="department-section" data-department="customer-service">
                    <div class="department-header">
                        <h2 class="department-title">บริการลูกค้า</h2>
                        <div class="department-line"></div>
                        <span class="department-count">3 คน</span>
                    </div>

                    <div class="team-grid">
                        <div class="team-card" data-id="11">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=ดนัย"
                                    alt="ดนัย ธรรมรักษ์">
                                <div class="card-image-content">
                                    <span class="department-badge">บริการลูกค้า</span>
                                    <h3>ดนัย ธรรมรักษ์</h3>
                                    <p>ผู้อำนวยการฝ่ายบริการลูกค้า</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>danai@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">ประสบการณ์ลูกค้า</span>
                                    <span class="skill-badge">บริหารทีม</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="12">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=นภัสวรรณ"
                                    alt="นภัสวรรณ วงศ์สกุล">
                                <div class="card-image-content">
                                    <span class="department-badge">บริการลูกค้า</span>
                                    <h3>นภัสวรรณ วงศ์สกุล</h3>
                                    <p>ผู้เชี่ยวชาญด้านการสนับสนุนอาวุโส</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>napatsawan@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">สนับสนุนทางเทคนิค</span>
                                    <span class="skill-badge">การฝึกอบรม</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="13">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=รัชพล"
                                    alt="รัชพล การุณย์">
                                <div class="card-image-content">
                                    <span class="department-badge">บริการลูกค้า</span>
                                    <h3>รัชพล การุณย์</h3>
                                    <p>ผู้จัดการความสำเร็จของลูกค้า</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>ratchapon@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">บริหารบัญชี</span>
                                    <span class="skill-badge">สร้างความสัมพันธ์</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- แผนกฝ่ายขาย -->
                <section class="department-section" data-department="sales">
                    <div class="department-header">
                        <h2 class="department-title">ฝ่ายขาย</h2>
                        <div class="department-line"></div>
                        <span class="department-count">3 คน</span>
                    </div>

                    <div class="team-grid">
                        <div class="team-card" data-id="14">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=ลลิตา"
                                    alt="ลลิตา จันทร์เรือง">
                                <div class="card-image-content">
                                    <span class="department-badge">ฝ่ายขาย</span>
                                    <h3>ลลิตา จันทร์เรือง</h3>
                                    <p>ผู้อำนวยการฝ่ายขาย</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>lalita@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">กลยุทธ์การขาย</span>
                                    <span class="skill-badge">ภาวะผู้นำทีม</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="15">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=ธีรพงษ์"
                                    alt="ธีรพงษ์ บุญมา">
                                <div class="card-image-content">
                                    <span class="department-badge">ฝ่ายขาย</span>
                                    <h3>ธีรพงษ์ บุญมา</h3>
                                    <p>ผู้บริหารบัญชีอาวุโส</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>teerapong@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">การขายองค์กร</span>
                                    <span class="skill-badge">การขายโซลูชั่น</span>
                                </div>

                            </div>
                        </div>

                        <div class="team-card" data-id="16">
                            <div class="card-image">
                                <div class="image-overlay"></div>
                                <img src="https://via.placeholder.com/300x400/1a75ff/ffffff?text=กรรณิการ์"
                                    alt="กรรณิการ์ ลิขิตสุข">
                                <div class="card-image-content">
                                    <span class="department-badge">ฝ่ายขาย</span>
                                    <h3>กรรณิการ์ ลิขิตสุข</h3>
                                    <p>ผู้จัดการปฏิบัติการขาย</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="contact-info">
                                    <i class="fas fa-envelope"></i>
                                    <span>kannika@company.com</span>
                                </div>
                                <div class="skills">
                                    <span class="skill-badge">ปฏิบัติการขาย</span>
                                    <span class="skill-badge">วิเคราะห์ข้อมูล</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Modal -->
            <div class="modal" id="profileModal">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <div class="modal-header">
                        <h2 id="modal-name">ชื่อพนักงาน</h2>
                        <p id="modal-position">ตำแหน่ง - แผนก</p>
                    </div>
                    <div class="modal-body">
                        <div class="modal-profile">
                            <div class="modal-avatar">
                                <img id="modal-image" src="https://via.placeholder.com/300x400" alt="พนักงาน">
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
                                    <p id="modal-bio">ประวัติพนักงาน...</p>
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

            <script src="js/page/member.js"></script>
        @endsection
