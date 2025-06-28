@extends('layouts.layout_home  ')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <link rel="stylesheet" href="/css/home/service/Hinspector.css">

    <section class="hero">
        <div class="bg bg1"></div>
        <div class="bg bg2"></div>

        <div class="overlay"></div>
        <div class="hero-content">
            <h1 class="animate-text"> ตรวจสอบความเรียบร้อยของบ้านและคอนโดก่อนรับโอน<span>กรรมสิทธิ์</span></h1>
            <p class="animate-text delay-1">บริษัทตรวจบ้านดีที่สุด อันดับ 𝟏 ที่ลูกค้าบอกต่อมากที่สุดในประเทศ
                ให้บริการตรวจความเรียบร้อยของบ้านและคอนโดก่อนโอนกรรมสิทธิ์</p>
            <div class="hero-buttons animate-text delay-2">
                <a href="#pricing" class="btn btn-primary">ค่าบริการ</a>
                <a href="#report" class="btn btn-secondary">ตัวอย่างรายงาน</a>
            </div>
        </div>

        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div>
                <span class="scroll-arrows">
                    <span></span><span></span><span></span>
                </span>
            </div>
        </div>
    </section>



    <section class="services" id="services">
        <div class="section-container">
            <div class="section-header">
                <h2>ทำไมต้องเลือก ต.ตรวจบ้าน Trust Tech Team</h2>
                <div class="underline"></div>
            </div>
            <div class="container-top">
                <div class="card-grid-top">
                    <div class="card-top">
                        <div class="header-top">
                            <div class="icon-top">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                            </div>
                            <h3 class="card-title-top">Trust</h3>
                        </div>
                        <div class="content-top">
                            <p>ผู้นำด้านการตรวจบ้านอันดับต้นๆของประเทศ ที่ลูกค้าไว้วางใจให้ตรวจบ้าน
                                โครงการแบรนด์ชั้นนำต่างๆ ในประเทศไทยมากที่สุด</p>
                        </div>
                        <a href="#" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
                    </div>

                    <!-- Card 2 -->
                    <div class="card-top">
                        <div class="header-top">
                            <div class="icon-top">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                            </div>
                            <h3 class="card-title-top">Tech</h3>
                        </div>
                        <div class="content-top">
                            <p>อุปกรณ์การตรวจที่ทันสมัย
                                มีกล้องอินฟาเรดตรวจการรั่วซึมที่ตาเปล่ามองไม่เห็นและบินโดรนตรวจงานหลังคาทุกหลัง
                                ไม่มีค่าใช้จ่ายเพิ่ม อุปกรณ์การตรวจครบครันทุกทีม</p>
                        </div>
                        <a href="#" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
                    </div>

                    <!-- Card 3 -->
                    <div class="card-top">
                        <div class="header-top">
                            <div class="icon-top">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                            </div>
                            <h3 class="card-title-top">Team</h3>
                        </div>
                        <div class="content-top">
                            <p>เราทำงานเป็นระบบแบบมืออาชีพ ทีมช่างมากประสบการณ์และเชี่ยวชาญในการตรวจบ้าน
                                ผ่านการเทรนนิ่งตามมาตรฐานของทางบริษัท
                                ทีมงานของเราไม่ใช่พนักงานของบริษัทอสังหาริมทรัพย์ที่ออกมาตรวจรับงานตัวเองและไม่มีการส่งต่องานให้ซับ
                                บริษัทตรวจบ้านเป็น "อาชีพหลัก ไม่ใช่งานเสริม"</p>
                        </div>
                        <a href="#" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>


            <div class="service-description">
                <div class="text-content">
                    <h3>บริการตรวจบ้านของเรา</h3>
                    <p>ควบคุมมาตรฐานการตรวจโดยวิศวกรที่ได้รับการรับรองในฐานะ 𝗖𝗲𝗿𝘁𝗶𝗳𝗶𝗲𝗱
                        𝗣𝗿𝗼𝗳𝗲𝘀𝘀𝗶𝗼𝗻𝗮𝗹 𝗜𝗻𝘀𝗽𝗲𝗰𝘁𝗼𝗿(𝗖𝗣𝗜)
                        จากสมาคมผู้ตรวจสอบบ้านชั้นนำระดับโลกอย่าง InterNACH</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> ตรวจสอบโดยวิศวกรมืออาชีพ</li>
                        <li><i class="fas fa-check-circle"></i> ใช้เครื่องมือทันสมัยในการตรวจสอบ</li>
                        <li><i class="fas fa-check-circle"></i> รายงานผลละเอียดพร้อมภาพประกอบ</li>
                        <li><i class="fas fa-check-circle"></i> คำแนะนำในการแก้ไขปัญหา</li>
                    </ul>
                </div>
                <div class="video-container">
                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RlV_UDSCCD0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inspection-scope">
        <div class="inspection-container">
            <h2 class="inspection-title">สโคปในการตรวจสอบ</h2>
            <div class="inspection-grid">
                <!-- แถวบน: 3 การ์ด -->
                <div class="inspection-row top-row">
                    <!-- ระบบไฟฟ้า -->
                    <div class="inspection-card" data-aos="fade-up">
                        <div class="inspection-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M18 16.236V7.764a2 2 0 0 0-1.106-1.789L9 2.118a2 2 0 0 0-1.894 0L1.106 5.974A2 2 0 0 0 0 7.764v8.472a2 2 0 0 0 1.106 1.789l6.894 3.855a2 2 0 0 0 1.894 0l6.894-3.855A2 2 0 0 0 18 16.236z">
                                </path>
                                <path d="M9 22v-8"></path>
                                <path d="M15 9L9 6"></path>
                            </svg>
                        </div>
                        <h3 class="inspection-card-title">ระบบไฟฟ้า</h3>
                        <div class="inspection-content">
                            <p>ตรวจสอบระบบไฟฟ้าทั้งหมดภายในบ้าน รวมถึงสายไฟ เบรกเกอร์ ปลั๊กไฟ สวิตช์
                                และอุปกรณ์ไฟฟ้าต่างๆ เพื่อความปลอดภัยสูงสุด</p>
                            <ul class="inspection-list">
                                <li>ตรวจวัดแรงดันไฟฟ้าและกระแสไฟฟ้า</li>
                                <li>ตรวจสอบการติดตั้งสายดิน</li>
                                <li>ตรวจสอบการรั่วไหลของกระแสไฟฟ้า</li>
                            </ul>
                        </div>
                    </div>

                    <!-- ระบบสุขาภิบาล -->
                    <div class="inspection-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="inspection-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                </path>
                                <path d="M12 8v8"></path>
                                <path d="M8 12h8"></path>
                            </svg>
                        </div>
                        <h3 class="inspection-card-title">ระบบสุขาภิบาล</h3>
                        <div class="inspection-content">
                            <p>ตรวจสอบระบบประปาและสุขาภิบาลทั้งหมด รวมถึงท่อน้ำ ก๊อกน้ำ ระบบระบายน้ำ
                                และระบบบำบัดน้ำเสีย</p>
                            <ul class="inspection-list">
                                <li>ตรวจสอบแรงดันน้ำและการไหลของน้ำ</li>
                                <li>ตรวจสอบการรั่วซึมของท่อน้ำ</li>
                                <li>ตรวจสอบการทำงานของสุขภัณฑ์</li>
                            </ul>
                        </div>
                    </div>

                    <!-- งานหลังคา -->
                    <div class="inspection-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="inspection-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 20h20"></path>
                                <path d="M12 2L2 8l10 6 10-6-10-6z"></path>
                            </svg>
                        </div>
                        <h3 class="inspection-card-title">งานหลังคา <span class="inspection-badge">โดรน</span>
                        </h3>
                        <div class="inspection-content">
                            <p>ตรวจสอบสภาพหลังคา การรั่วซึม และโครงสร้างหลังคาทั้งหมด
                                ด้วยเทคโนโลยีโดรนที่ทันสมัย</p>
                            <ul class="inspection-list">
                                <li>บินโดรนถ่ายภาพมุมสูงเพื่อตรวจสอบหลังคา</li>
                                <li>ตรวจสอบการติดตั้งกระเบื้องหลังคา</li>
                                <li>ตรวจสอบรางน้ำและระบบระบายน้ำฝน</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- แถวล่าง: 2 การ์ด -->
                <div class="inspection-row bottom-row">
                    <!-- งานรั่วซึม -->
                    <div class="inspection-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="inspection-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                        </div>
                        <h3 class="inspection-card-title">งานรั่วซึม <span class="inspection-badge">กล้องอินฟาเรด</span>
                        </h3>
                        <div class="inspection-content">
                            <p>ตรวจสอบการรั่วซึมของน้ำและความชื้นด้วยกล้องอินฟาเรด Thermal Camera
                                ที่สามารถตรวจจับความชื้นที่ซ่อนอยู่ได้</p>
                            <ul class="inspection-list">
                                <li>ใช้กล้อง Thermal Camera ตรวจจับความชื้นในผนัง</li>
                                <li>ตรวจสอบการรั่วซึมบริเวณหน้าต่างและประตู</li>
                                <li>ตรวจสอบการรั่วซึมบริเวณห้องน้ำและห้องครัว</li>
                            </ul>
                        </div>
                    </div>

                    <!-- งานสถาปัตยกรรม -->
                    <div class="inspection-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="inspection-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect>
                                <line x1="7" y1="2" x2="7" y2="22"></line>
                                <line x1="17" y1="2" x2="17" y2="22"></line>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <line x1="2" y1="7" x2="7" y2="7"></line>
                                <line x1="2" y1="17" x2="7" y2="17"></line>
                                <line x1="17" y1="17" x2="22" y2="17"></line>
                                <line x1="17" y1="7" x2="22" y2="7"></line>
                            </svg>
                        </div>
                        <h3 class="inspection-card-title">งานสถาปัตยกรรม</h3>
                        <div class="inspection-content">
                            <p>ตรวจสอบงานสถาปัตยกรรมทั้งภายนอกและภายในบ้าน รวมถึงผนัง พื้น ฝ้าเพดาน ประตู
                                หน้าต่าง และงานตกแต่งต่างๆ</p>
                            <ul class="inspection-list">
                                <li>ตรวจสอบรอยแตกร้าวของผนังและพื้น</li>
                                <li>ตรวจสอบการติดตั้งประตูและหน้าต่าง</li>
                                <li>ตรวจสอบงานสีและวัสดุตกแต่ง</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple animation on scroll
            const animateElements = document.querySelectorAll('[data-aos]');

            // Check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
                    rect.bottom >= 0
                );
            }

            // Add animation class when element is in viewport
            function checkAnimations() {
                animateElements.forEach(element => {
                    if (isInViewport(element)) {
                        element.classList.add('aos-animate');
                    }
                });
            }

            // Run on load
            checkAnimations();

            // Run on scroll
            window.addEventListener('scroll', checkAnimations);

            // Card hover effects
            const cards = document.querySelectorAll('.inspection-card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.inspection-icon');
                    icon.style.transform = 'scale(1.1)';
                });

                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.inspection-icon');
                    icon.style.transform = 'scale(1)';
                });
            });
        });
    </script>

    <section class="process" id="process">
        <div class="container-process">
            <div class="section-header light">
                <h2>ขั้นตอนการให้บริการของเรา</h2>
                <div class="underline"></div>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>1. ติดต่อนัดหมายตรวจบ้าน</h3>
                        <p>ติดต่อกับทีมงาน ตกลงวันเวลานัดหมาย ค่าบริการผ่านทางไลน์ออฟฟิศเชียล @t.home
                            และชำระค่าบริการเพื่อยืนยันคิวตรวจบ้าน</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>2. ตรวจสอบรอบแรก</h3>
                        <p>ทีมงานเข้าดำเนินการตรวจสอบตามสโคปในการตรวจบ้านและออกรายงานการตรวจเป็นไฟล์ PDF
                            ให้กับเจ้าของบ้านผ่านทางอีเมล (จัดส่งให้ 3-5 วัน) </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>3. แก้ไขตามรายงานตรวจรอบแรก </h3>
                        <p>โครงการดำเนินการแก้ไขดีเฟคตามรายงานการตรวจบ้าน และประเมินระยะเวลาในการแก้ไขเก็บงาน
                            จากนั้นแจ้งวันที่พร้อมในการตรวจรอบที่สองให้กับเจ้าของบ้าน เพื่อทำการนัดหมายกับทาง
                            ต.ตรวจบ้าน อีกครั้ง</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>4. ตรวจรอบสอง</h3>
                        <p>ทีมงานดำเนินการเข้าตรวจสอบหลังจากโครงการ/ผู้รับเหมาได้แก้ไขข้อบกพร้องตามจุดที่รายงานระบุไว้แล้วเสร็จ
                            รีเช็กในจุดที่ต้องแก้ไขในรอบแรก พร้อมทำรายการตรวจรอบที่ 2
                            ให้กับลูกค้าเจ้าของบ้านผ่านทางอีเมล</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>5. แก้ไขตามรายงานตรวจรอบสอง</h3>
                        <p>โครงการดำเนินการแก้ไขดีเฟคตามรายงานการตรวจรอบสอง
                            (หากมีรายการคงค้างหรือรายการเพิ่มเติม)</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>6. ตรวจรอบถัดไป*</h3>
                        <p>ในกรณียังมีรายการคงค้างหรือเพิ่มเติมจากการตรวจรอบสอง
                            เจ้าของบ้านสามารถเลือกใช้บริการตรวจรอบถัดไปเพื่อเข้ารีเช็กงานอีกครั้งได้ มีค่าบริการ
                            50% ของค่าตรวจรอบแรก </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        const slides = document.querySelectorAll('.hero-slide');
        let currentSlide = 0;

        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll('.counter');

            const updateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                let count = 0;
                const speed = 200;
                const increment = target / speed;

                const update = () => {
                    count += increment;
                    if (count >= target) {
                        count = target;
                    }
                    counter.textContent = Math.floor(count);
                    if (count < target) {
                        requestAnimationFrame(update);
                    }
                };
                update();
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        updateCounter(counter);
                        observer.unobserve(counter);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>


    <!-- <section id ="pricing" class="pricing-section">
            <h2 class="pricing-heading" data-aos="fade-up">ค่าบริการตรวจบ้านและคอนโด</h2> -->

    <div class="pricing-container">
        <header>
            <div class="logo-container">
                <div class="logo-text">
                    <h1>ค่าบริการตรวจบ้านและคอนโด</h1>
                    <p>T. HOME INSPECTOR</p>
                </div>
            </div>
        </header>

        <div class="tabs">
            <button class="tab-btn active" data-tab="condo">คอนโดมิเนียม</button>
            <button class="tab-btn" data-tab="house">บ้าน/ทาวน์โฮม</button>
        </div>

        <div class="tab-content active" id="condo-content">
            <div class="price-header blue">
                <h2>คอนโดมิเนียม</h2>
            </div>
            <div class="price-table">
                <div class="table-header">
                    <div class="col-area">พื้นที่ใช้สอย</div>
                    <div class="col-price">ราคาตรวจ</div>
                    <div class="col-details">รายละเอียดการตรวจ</div>
                </div>
                <div class="table-subheader">
                    <div class="col-size">ไซส์</div>
                    <div class="col-sqm">ตร.ม</div>
                    <div class="col-round1">รอบ 1</div>
                    <div class="col-round2">รอบ 2</div>
                    <div class="col-time">ระยะเวลา</div>
                    <div class="col-staff">จำนวนช่าง</div>
                </div>

                <!-- S Size -->
                <div class="table-row">
                    <div class="col-size">S</div>
                    <div class="col-sqm">ไม่เกิน 50 ตร.ม</div>
                    <div class="col-round1">5,350 บาท</div>
                    <div class="col-round2">2,675 บาท</div>
                    <div class="col-time">2 ชั่วโมงเศษ</div>
                    <div class="col-staff">2 คน</div>
                </div>

                <!-- M Size -->
                <div class="table-row">
                    <div class="col-size">M</div>
                    <div class="col-sqm">ไม่เกิน 100 ตร.ม</div>
                    <div class="col-round1">6,420 บาท</div>
                    <div class="col-round2">3,210 บาท</div>
                    <div class="col-time">3 ชั่วโมงเศษ</div>
                    <div class="col-staff">2-3 คน</div>
                </div>

                <!-- L Size -->
                <div class="table-row">
                    <div class="col-size">L</div>
                    <div class="col-sqm">ไม่เกิน 150 ตร.ม</div>
                    <div class="col-round1">7,490 บาท</div>
                    <div class="col-round2">3,745 บาท</div>
                    <div class="col-time">3 ชั่วโมงเศษ</div>
                    <div class="col-staff">2-3 คน</div>
                </div>

                <!-- XL Size -->
                <div class="table-row">
                    <div class="col-size">XL</div>
                    <div class="col-sqm">ไม่เกิน 200 ตร.ม</div>
                    <div class="col-round1">8,560 บาท</div>
                    <div class="col-round2">4,280 บาท</div>
                    <div class="col-time">3 ชั่วโมงเศษ</div>
                    <div class="col-staff">2-3 คน</div>
                </div>

                <!-- XXL Size -->
                <div class="table-row">
                    <div class="col-size">XXL</div>
                    <div class="col-sqm">ไม่เกิน 400 ตร.ม</div>
                    <div class="col-round1">12,840 บาท</div>
                    <div class="col-round2">6,420 บาท</div>
                    <div class="col-time">6 ชั่วโมงเศษ</div>
                    <div class="col-staff">3-4 คน</div>
                </div>

                <!-- XXXL Size -->
                <div class="table-row">
                    <div class="col-size">XXXL</div>
                    <div class="col-sqm">ไม่เกิน 600 ตร.ม</div>
                    <div class="col-round1">17,120 บาท</div>
                    <div class="col-round2">8,560 บาท</div>
                    <div class="col-time">6 ชั่วโมงเศษ</div>
                    <div class="col-staff">4-5 คน</div>
                </div>
            </div>

            <div class="price-note">
                <p>***ราคาข้างต้นรวมภาษีมูลค่าเพิ่ม 7% เรียบร้อยแล้ว</p>
            </div>

            <div class="price-info">
                <div class="info-item">
                    <div class="info-number">1</div>
                    <div class="info-text">ค่าบริการตรวจบ้านและคอนโดรอบที่2 และรอบต่อๆ ไป คิดราคา <span
                            class="highlight">50%</span> จากค่าบริการตรวจรอบแรก</div>
                </div>
                <div class="info-item">
                    <div class="info-number">2</div>
                    <div class="info-text">ในการตรวจรอบที่2 และรอบต่อๆ ไป จำนวนคนตรวจและเวลา
                        จะลดเหลือครึ่งหนึ่งจากจำนวนในการตรวจรอบแรก</div>
                </div>
                <div class="info-item">
                    <div class="info-number">3</div>
                    <div class="info-text">ราคาค่าบริการตรวจบ้านเปลี่ยนแปลงได้ขึ้นอยู่กับ <span
                            class="highlight">ขนาดพื้นที่รอบตัวบ้าน บ้านตัวอย่างที่มีการตกแต่ง และระยะทาง</span></div>
                </div>
                <div class="info-item">
                    <div class="info-number">4</div>
                    <div class="info-text">"<span class="highlight">ราคาเหมาะสมกับคุณภาพ</span>"
                        การตรวจบ้านของเรานั้นเน้นคุณภาพและความคุ้มค่าของบริการที่ได้รับ</div>
                </div>
            </div>

            <div class="service-features">
                <div class="web-app">
                    <h3>T.HOME WEB-APPLICATION</h3>
                    <p>เข้าดูรายงานออนไลน์</p>
                </div>
                <div class="plus">+</div>
                <div class="thermal">
                    <h3>กล้องอินฟาเรด (Thermal Imaging)</h3>
                    <p>สำหรับตรวจการรั่วซึมที่มองด้วยตาเปล่าไม่เห็น</p>
                </div>
                <div class="equipment-note">
                    <p>"อุปกรณ์ครบครันทุกทีมตรวจและไม่คิดค่าใช้จ่ายเพิ่ม"</p>
                </div>
            </div>
        </div>

        <div class="tab-content" id="house-content">
            <div class="price-header pink">
                <h2>บ้าน/ทาวน์โฮม</h2>
            </div>
            <div class="price-table">
                <div class="table-header">
                    <div class="col-area">พื้นที่ใช้สอย</div>
                    <div class="col-price">ราคาตรวจ</div>
                    <div class="col-details">รายละเอียดการตรวจ</div>
                </div>
                <div class="table-subheader">
                    <div class="col-size">ไซส์</div>
                    <div class="col-sqm">ตร.ม</div>
                    <div class="col-round1">รอบ 1</div>
                    <div class="col-round2">รอบ 2</div>
                    <div class="col-time">ระยะเวลา</div>
                    <div class="col-staff">จำนวนช่าง</div>
                </div>

                <!-- S Size -->
                <div class="table-row">
                    <div class="col-size">S</div>
                    <div class="col-sqm">ไม่เกิน 200 ตร.ม</div>
                    <div class="col-round1">8,560 บาท</div>
                    <div class="col-round2">4,280 บาท</div>
                    <div class="col-time">3 ชั่วโมงเศษ</div>
                    <div class="col-staff">3 คน</div>
                </div>

                <!-- M Size -->
                <div class="table-row">
                    <div class="col-size">M</div>
                    <div class="col-sqm">ไม่เกิน 400 ตร.ม</div>
                    <div class="col-round1">12,840 บาท</div>
                    <div class="col-round2">6,420 บาท</div>
                    <div class="col-time">3 ชั่วโมงเศษ</div>
                    <div class="col-staff">3-4 คน</div>
                </div>

                <!-- L Size -->
                <div class="table-row">
                    <div class="col-size">L</div>
                    <div class="col-sqm">ไม่เกิน 600 ตร.ม</div>
                    <div class="col-round1">17,120 บาท</div>
                    <div class="col-round2">8,560 บาท</div>
                    <div class="col-time">6 ชั่วโมงเศษ</div>
                    <div class="col-staff">4-5 คน</div>
                </div>

                <!-- XL Size -->
                <div class="table-row">
                    <div class="col-size">XL</div>
                    <div class="col-sqm">ไม่เกิน 800 ตร.ม</div>
                    <div class="col-round1">21,400 บาท</div>
                    <div class="col-round2">10,700 บาท</div>
                    <div class="col-time">6 ชั่วโมงเศษ</div>
                    <div class="col-staff">5-6 คน</div>
                </div>

                <!-- XXL Size -->
                <div class="table-row">
                    <div class="col-size">XXL</div>
                    <div class="col-sqm">ไม่เกิน 1,000 ตร.ม</div>
                    <div class="col-round1">25,680 บาท</div>
                    <div class="col-round2">12,840 บาท</div>
                    <div class="col-time">6 ชั่วโมงเศษ</div>
                    <div class="col-staff">6-7 คน</div>
                </div>

                <!-- XXXL Size -->
                <div class="table-row">
                    <div class="col-size">XXXL</div>
                    <div class="col-sqm">ไม่เกิน 1,500 ตร.ม</div>
                    <div class="col-round1">42,800 บาท</div>
                    <div class="col-round2">21,400 บาท</div>
                    <div class="col-time">6 ชั่วโมงเศษ</div>
                    <div class="col-staff">7-8 คน</div>
                </div>
            </div>

            <div class="price-note">
                <p>***ราคาข้างต้นรวมภาษีมูลค่าเพิ่ม 7% เรียบร้อยแล้ว</p>
            </div>

            <div class="price-info">
                <div class="info-item">
                    <div class="info-number">1</div>
                    <div class="info-text">ค่าบริการตรวจบ้านและคอนโดรอบที่2 และรอบต่อๆ ไป คิดราคา <span
                            class="highlight">50%</span> จากค่าบริการตรวจรอบแรก</div>
                </div>
                <div class="info-item">
                    <div class="info-number">2</div>
                    <div class="info-text">ในการตรวจรอบที่2 และรอบต่อๆ ไป จำนวนคนตรวจและเวลา
                        จะลดเหลือครึ่งหนึ่งจากจำนวนในการตรวจรอบแรก</div>
                </div>
                <div class="info-item">
                    <div class="info-number">3</div>
                    <div class="info-text">ราคาค่าบริการตรวจบ้านเปลี่ยนแปลงได้ขึ้นอยู่กับ <span
                            class="highlight">ขนาดพื้นที่รอบตัวบ้าน บ้านตัวอย่างที่มีการตกแต่ง และระยะทาง</span></div>
                </div>
                <div class="info-item">
                    <div class="info-number">4</div>
                    <div class="info-text">"<span class="highlight">ราคาเหมาะสมกับคุณภาพ</span>"
                        การตรวจบ้านของเรานั้นเน้นคุณภาพและความคุ้มค่าของบริการที่ได้รับ</div>
                </div>
            </div>

            <div class="service-features house-features">
                <div class="web-app">
                    <h3>T.HOME WEB-APPLICATION</h3>
                    <p>เข้าดูรายงานออนไลน์</p>
                </div>
                <div class="plus">+</div>
                <div class="drone">
                    <h3>โดรน (Drone)</h3>
                    <p>ตรวจงานหลังคา</p>
                </div>
                <div class="plus">+</div>
                <div class="thermal">
                    <h3>กล้องอินฟาเรด (Thermal Imaging)</h3>
                    <p>สำหรับตรวจการรั่วซึมที่มองด้วยตาเปล่าไม่เห็น</p>
                </div>
                <div class="equipment-note">
                    <p>"อุปกรณ์ครบครันทุกทีมตรวจและไม่คิดค่าใช้จ่ายเพิ่ม"</p>
                </div>
            </div>
        </div>
    </div>





    <section class="sample-reports">
        <div class="container-reports">
            <div class="content-reports">
                <h2>ตัวอย่างรายงานการตรวจบ้าน</h2>
                <p>
                    รายงานแบบไฟล์ PDF และระบบเมมเบอร์สำหรับลูกค้าต.ตรวจบ้าน ที่เข้าดูรายงานการตรวจได้ 24
                    ชั่วโมง!!
                </p>
                <div class="buttons-container">
                    <button class="cta-button pdf-button" onclick="showPdfSamples()">
                        <span class="icon">📄</span> ดูตัวอย่างรายงาน PDF
                    </button>
                    <button class="cta-button online-button" onclick="showOnlineSamples()">
                        <span class="icon">🌐</span> ดูตัวอย่างรายงานออนไลน์
                    </button>
                </div>
            </div>
            <div class="devices">
                <img src="img/report.png" alt="Reports on multiple devices" class="devices-image">
            </div>
        </div>
    </section>

    <div id="pdf-modal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal('pdf-modal')">&times;</span>
            <h3>ตัวอย่างรายงาน PDF</h3>
            <div class="samples-grid">
                <div class="sample-item">
                    <div class="sample-icon pdf-icon" style="background-color: #FF5733;"></div>
                    <p>รายงานการตรวจสอบ</p>
                    <a href="#" class="download-link">ดาวน์โหลด PDF</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon pdf-icon" style="background-color: #33A8FF;"></div>
                    <p>รายงานการวิเคราะห์</p>
                    <a href="#" class="download-link">ดาวน์โหลด PDF</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon pdf-icon" style="background-color: #33FF57;"></div>
                    <p>รายงานสรุป</p>
                    <a href="#" class="download-link">ดาวน์โหลด PDF</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon pdf-icon" style="background-color: #F033FF;"></div>
                    <p>รายงานละเอียด</p>
                    <a href="#" class="download-link">ดาวน์โหลด PDF</a>
                </div>
            </div>
        </div>
    </div>

    <div id="online-modal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal('online-modal')">&times;</span>
            <h3>ตัวอย่างรายงานออนไลน์</h3>
            <div class="samples-grid">
                <div class="sample-item">
                    <div class="sample-icon online-icon" style="background-color: #FF5733;"></div>
                    <p>รายงานการตรวจสอบ</p>
                    <a href="#" class="view-link">ดูออนไลน์</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon online-icon" style="background-color: #33A8FF;"></div>
                    <p>รายงานการวิเคราะห์</p>
                    <a href="#" class="view-link">ดูออนไลน์</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon online-icon" style="background-color: #33FF57;"></div>
                    <p>รายงานสรุป</p>
                    <a href="#" class="view-link">ดูออนไลน์</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon online-icon" style="background-color: #F033FF;"></div>
                    <p>รายงานละเอียด</p>
                    <a href="#" class="view-link">ดูออนไลน์</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        function showPdfSamples() {
            document.getElementById('pdf-modal').style.display = 'block';
            animateModal('pdf-modal');
        }

        function showOnlineSamples() {
            document.getElementById('online-modal').style.display = 'block';
            animateModal('online-modal');
        }

        function animateModal(modalId) {
            const modalContent = document.querySelector(`#${modalId} .modal-content`);
            modalContent.style.animation = 'fadeIn 0.3s';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        window.onclick = function(event) {
            const pdfModal = document.getElementById('pdf-modal');
            const onlineModal = document.getElementById('online-modal');

            if (event.target === pdfModal) {
                closeModal('pdf-modal');
            }

            if (event.target === onlineModal) {
                closeModal('online-modal');
            }
        }

        const style = document.createElement('style');
        style.innerHTML = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    `;
        document.head.appendChild(style);

        document.addEventListener('DOMContentLoaded', function() {
            const devicesImage = document.querySelector('.devices-image');

            devicesImage.onerror = function() {
                const canvas = document.createElement('canvas');
                canvas.width = 500;
                canvas.height = 300;
                const ctx = canvas.getContext('2d');

                // Draw laptop
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(100, 100, 300, 180);

                // Draw tablet
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(150, 150, 100, 150);

                // Draw phone
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(280, 170, 50, 80);

                // Add colorful circles for report icons
                const colors = ['#FF5733', '#33A8FF', '#33FF57', '#F033FF'];
                for (let i = 0; i < 4; i++) {
                    ctx.fillStyle = colors[i];
                    ctx.beginPath();
                    ctx.arc(150 + i * 70, 140, 15, 0, Math.PI * 2);
                    ctx.fill();
                }

                // Replace the image source with the canvas data URL
                devicesImage.src = canvas.toDataURL();
            };

            // Add pulse animation to buttons periodically
            const buttons = document.querySelectorAll('.cta-button');
            setInterval(() => {
                buttons.forEach(button => {
                    button.style.animation = 'pulse 1s';
                    setTimeout(() => {
                        button.style.animation = '';
                    }, 1000);
                });
            }, 5000);

            // Add click events for download and view links
            const downloadLinks = document.querySelectorAll('.download-link');
            downloadLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('กำลังดาวน์โหลดไฟล์ PDF...');
                });
            });

            const viewLinks = document.querySelectorAll('.view-link');
            viewLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('กำลังเปิดรายงานออนไลน์...');
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            // Add click event to tab buttons
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));

                    // Add active class to clicked button
                    button.classList.add('active');

                    // Show corresponding content
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(`${tabId}-content`).classList.add('active');
                });
            });

            const tableRows = document.querySelectorAll('.table-row');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.transform = 'translateY(-2px)';
                    row.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
                    row.style.transition = 'all 0.3s ease';
                });

                row.addEventListener('mouseleave', () => {
                    row.style.transform = 'translateY(0)';
                    row.style.boxShadow = 'none';
                });
            });

            const infoItems = document.querySelectorAll('.info-item');
            infoItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'all 0.5s ease';

                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 300 + (index * 150));
            });
        });
    </script>



    <section class="app-showcase">
        <div class="container-homebutler">
            <div class="app-content">
                <div class="app-text" data-aos="fade-right">
                    <span class="section-subtitle">แอปพลิเคชัน</span>
                    <h2 class="section-title">นัดหมายจองคิวตรวจบ้านกับเราได้ที่ LINE OFFICIAL ACCOUNT</h2>
                    <p class="section-title-sub">ติดต่อง่าย สะดวก ทักหาแอดมินได้ตลอดเวลา</p>


                    <div class="app-download">
                        <a href="https://line.me/download" class="app-btn">
                            <i class="fab fa-apple"></i>
                            <span>
                                <small>ดาวน์โหลดบน</small>
                                App Store
                            </span>
                        </a>
                        <a href="https://line.me/download" class="app-btn">
                            <i class="fab fa-google-play"></i>
                            <span>
                                <small>ดาวน์โหลดบน</small>
                                Google Play
                            </span>
                        </a>
                    </div>
                </div>

                <div class="app-image" data-aos="fade-left">
                    <img src="/img/lineb3.png" alt="Home Butler App">
                </div>
            </div>
        </div>
    </section>
@endsection
