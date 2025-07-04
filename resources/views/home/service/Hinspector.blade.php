@extends('layouts.layout_home')

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
                            <p>ตรวจสอบงานระบบไฟฟ้าภายในบ้าน การทำงานของระบบป้องกันไฟรั่ว ไฟดูด
                            การเข้าสายที่เต้ารับไฟ ค่าความต้านทานของหลักสายดิน การทำางานของ
                            สวิตซ์ไฟและแสงสว่าง
                            </p>
                            <a href="https://scopeofwork.thomeinspector.com/electrical" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
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
                            <p>ตรวจสอบระบบประปาและสุขาภิบาลภายในบ้าน ระบบระบายน้ำ
                            ระบบบำบัดน้ำเสีย แรงดันน้ำ ท่อน้ำดี ท่อน้ำทิ้ง
                            </p>
                            <a href="https://scopeofwork.thomeinspector.com/sanitary" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
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
                        <h3 class="inspection-card-title">งานหลังคา <span class="inspection-badge">+มีบินโดรน</span>
                        </h3>
                        <div class="inspection-content">
                            <p>ตรวจสอบงานหลังคา บินโดรนตรวจสอบแผ่นมุงหลังคา
                                ความเรียบร้อยใต้หลังคา ฉนวนกันความร้อน ระบบท่อร้อยสายไฟและปิดฝา
                                บล็อก
                                ตรวจสอบคราบนารั่วซึม โครงหลังคา
                                </p>
                            <a href="https://scopeofwork.thomeinspector.com/roof" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
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
                        <h3 class="inspection-card-title">งานรั่วซึม <span class="inspection-badge">+มีกล้องอินฟาเรด</span>
                        </h3>
                        <div class="inspection-content">
                            <p>ตรวจสอบการรั่วซึมแผ่นฝ้าเพดาน รอยต่อประตู-หน้าต่าง ด้วยเครื่องวัด
                                ความชื้นและกล้องอินฟาเรด
                                </p>
                            <a href="https://scopeofwork.thomeinspector.com/leakage" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
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
                            <p>ตรวจสอบงานฝ้าเพดาน งานผนัง งานพื้น งานระเบียง งานสวน
                                การติดตั้งใช้งานประตู หน้าต่าง สุขภัณฑ์ งานบันได
                                </p>
                            <a href="https://scopeofwork.thomeinspector.com/architecture" class="link-top">ดูรายละเอียดเพิ่มเติม</a>
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

<div class="pricing-body">
        <div class="pricing-container">
            <h1 class="main-title">ค่าบริการตรวจบ้านและคอนโด</h1>

            <div class="tabs">
                <button class="tab-btn active" data-tab="house">บ้าน</button>
                <button class="tab-btn" data-tab="condo">คอนโด</button>
            </div>

            <!-- House Content -->
            <div class="tab-content active" id="house-content">
                <div class="section-header-pricing">
                    <h2>บ้านเดี่ยว / บ้านแฝด / ทาวน์โฮม</h2>
                </div>

                <table class="pricing-table">
                    <thead>
                        <tr class="table-header">
                            <th rowspan="2" class="size-col">ไซส์</th>
                            <th rowspan="2" class="area-col">พื้นที่ใช้สอย<br>(ตร.ม.)</th>
                            <th colspan="2" class="price-col">ราคาตรวจ</th>
                            <th rowspan="2" class="time-col">ระยะเวลา</th>
                            <th rowspan="2" class="staff-col">จำนวนช่าง</th>
                        </tr>
                        <tr class="table-subheader">
                            <th class="round-col">รอบที่ 1</th>
                            <th class="round-col">รอบที่ 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-row">
                            <td class="size-cell">S</td>
                            <td class="area-cell">ไม่เกิน 200</td>
                            <td class="price-cell">8,560 บาท</td>
                            <td class="price-cell">4,280 บาท</td>
                            <td class="time-cell">3 ชั่วโมง</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">3 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">M</td>
                            <td class="area-cell">ไม่เกิน 400</td>
                            <td class="price-cell">12,840 บาท</td>
                            <td class="price-cell">6,420 บาท</td>
                            <td class="time-cell">3 ชั่วโมง</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">3-4 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">L</td>
                            <td class="area-cell">ไม่เกิน 600</td>
                            <td class="price-cell">17,120 บาท</td>
                            <td class="price-cell">8,560 บาท</td>
                            <td class="time-cell">6 ชั่วโมง</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">4 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">XL</td>
                            <td class="area-cell">ไม่เกิน 800</td>
                            <td class="price-cell">21,400 บาท</td>
                            <td class="price-cell">10,700 บาท</td>
                            <td class="time-cell">6 ชั่วโมง</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">4-5 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">XXL</td>
                            <td class="area-cell">ไม่เกิน 1,000</td>
                            <td class="price-cell">25,680 บาท</td>
                            <td class="price-cell">12,840 บาท</td>
                            <td class="time-cell">6 ชั่วโมง</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">5 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">3XL</td>
                            <td class="area-cell">ไม่เกิน 1,500</td>
                            <td class="price-cell">42,800 บาท</td>
                            <td class="price-cell">21,400 บาท</td>
                            <td class="time-cell">6 ชั่วโมง</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">5-6 คน</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="notes-section">
                    <div class="notes-layout">
                        <h3 class="notes-title-vertical">หมายเหตุ</h3>
                        <div class="notes-grid">
                            <div class="note-item">
                                <span class="note-number">1</span>
                                <span class="note-text">ค่าบริการเฉพาะ กรุงเทพและปริมณฑลเท่านั้น ราคารวมภาษีมูลค่าเพิ่ม <strong>7%</strong> เรียบร้อยแล้ว</span>
                            </div>
                            <div class="note-item">
                                <span class="note-number">2</span>
                                <span class="note-text">ค่าบริการตรวจรอบที่ 2 และรอบต่อๆ ไป คิด <strong>50%</strong> ของค่าบริการตรวจรอบที่ 1</span>
                            </div>
                            <div class="note-item">
                                <span class="note-number">3</span>
                                <span class="note-text">ค่าบริการสามารถเปลี่ยนแปลงได้ขึ้นอยู่กับขนาดพื้นที่รอบตัวบ้าน บ้านตัวอย่าง ตำแหน่งหรือระยะทาง</span>
                            </div>
                            <div class="note-item">
                                <span class="note-number">4</span>
                                <span class="note-text">ราคาเหมาะสมกับคุณภาพ การตรวจบ้านของเราเน้นคุณภาพและความคุ้มค่าของบริการที่ได้รับ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Condo Content -->
            <div class="tab-content" id="condo-content">
                <div class="section-header-condo">
                    <h2>คอนโดมิเนียม</h2>
                </div>

                <table class="pricing-table">
                    <thead>
                        <tr class="table-header">
                            <th rowspan="2" class="size-col">ไซส์</th>
                            <th rowspan="2" class="area-col">พื้นที่ใช้สอย<br>(ตร.ม.)</th>
                            <th colspan="2" class="price-col">ราคาตรวจ</th>
                            <th rowspan="2" class="time-col">ระยะเวลา</th>
                            <th rowspan="2" class="staff-col">จำนวนช่าง</th>
                        </tr>
                        <tr class="table-subheader">
                            <th class="round-col">รอบที่ 1</th>
                            <th class="round-col">รอบที่ 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-row">
                            <td class="size-cell">S</td>
                            <td class="area-cell">ไม่เกิน 50</td>
                            <td class="price-cell">5,350 บาท</td>
                            <td class="price-cell">2,675 บาท</td>
                            <td class="time-cell">2 ชั่วโมงเศษ</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">2 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">M</td>
                            <td class="area-cell">ไม่เกิน 100</td>
                            <td class="price-cell">6,420 บาท</td>
                            <td class="price-cell">3,210 บาท</td>
                            <td class="time-cell">3 ชั่วโมงเศษ</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">2-3 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">L</td>
                            <td class="area-cell">ไม่เกิน 150</td>
                            <td class="price-cell">7,490 บาท</td>
                            <td class="price-cell">3,745 บาท</td>
                            <td class="time-cell">3 ชั่วโมงเศษ</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">2-3 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">XL</td>
                            <td class="area-cell">ไม่เกิน 200</td>
                            <td class="price-cell">8,560 บาท</td>
                            <td class="price-cell">4,280 บาท</td>
                            <td class="time-cell">3 ชั่วโมงเศษ</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">2-3 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">XXL</td>
                            <td class="area-cell">ไม่เกิน 400</td>
                            <td class="price-cell">12,840 บาท</td>
                            <td class="price-cell">6,420 บาท</td>
                            <td class="time-cell">6 ชั่วโมงเศษ</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">3-4 คน</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="size-cell">3XL</td>
                            <td class="area-cell">ไม่เกิน 600</td>
                            <td class="price-cell">17,120 บาท</td>
                            <td class="price-cell">8,560 บาท</td>
                            <td class="time-cell">6 ชั่วโมงเศษ</td>
                            <td class="staff-cell">
                                <div class="staff-info">
                                    <div class="staff-icons">
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <svg class="staff-icon" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="staff-count">4-5 คน</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="notes-section">
                    <div class="notes-layout">
                        <h3 class="notes-title-vertical">หมายเหตุ</h3>
                        <div class="notes-grid">
                            <div class="note-item">
                                <span class="note-number">1</span>
                                <span class="note-text">ค่าบริการเฉพาะ กรุงเทพและปริมณฑลเท่านั้น ราคารวมภาษีมูลค่าเพิ่ม <strong>7%</strong> เรียบร้อยแล้ว</span>
                            </div>
                            <div class="note-item">
                                <span class="note-number">2</span>
                                <span class="note-text">ค่าบริการตรวจรอบที่ 2 และรอบต่อๆ ไป คิด <strong>50%</strong> ของค่าบริการตรวจรอบที่ 1</span>
                            </div>
                            <div class="note-item">
                                <span class="note-number">3</span>
                                <span class="note-text">ค่าบริการสามารถเปลี่ยนแปลงได้ขึ้นอยู่กับขนาดพื้นที่รอบตัวบ้าน บ้านตัวอย่าง ตำแหน่งหรือระยะทาง</span>
                            </div>
                            <div class="note-item">
                                <span class="note-number">4</span>
                                <span class="note-text">ราคาเหมาะสมกับคุณภาพ การตรวจบ้านของเราเน้นคุณภาพและความคุ้มค่าของบริการที่ได้รับ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promotional Banner -->
            <div class="promo-banner">
                <div class="promo-content">
                    <div class="promo-icons">
                        <div class="promo-item">
                            <div class="icon-box">
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21 2H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7l-2 3v1h8v-1l-2-3h7c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H3V4h18v10z"/>
                                </svg>
                            </div>
                            <span>T.HOME WEB APPLICATION</span>
                        </div>

                        <div class="plus-sign">+</div>

                        <div class="promo-item">
                            <div class="icon-box">
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span>โดรน + กล้องอินฟราเรด</span>
                        </div>

                        <div class="plus-sign">+</div>

                        <div class="promo-item">
                            <div class="icon-box">
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                                </svg>
                            </div>
                            <span>Thermal Imaging</span>
                        </div>
                    </div>

                    <div class="promo-text">
                        <div class="text-line">ทุกเทคโนโลยีการบิน <strong>โดรน (Drone)</strong> ตรวจงานก่อสร้าง</div>
                        <div class="text-line">และ <strong>กล้องอินฟราเรด (Thermal Imaging)</strong></div>
                        <div class="text-line">สำหรับตรวจการรั่วซึมในงานก่อสร้างหาตำแหน่งไม่ได้ก็เก็บ</div>
                        <div class="highlight-text">"อุปกรณ์ครบครันทุกกิจกรรมและเมื่อได้คำค่าใช้จ่ายเพิ่ม"</div>
                    </div>
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
                    <p>รายงานการตรวจบ้าน</p>
                    <a href="https://www.dropbox.com/scl/fi/tjxe239nynmg1pta92uhc/2025.pdf?rlkey=xcsmo683gvkeza0k8soqs9wer&st=ctrnx95g&dl=1" download target="_blank" class="download-link">ดาวน์โหลด PDF</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon pdf-icon" style="background-color: #33A8FF;"></div>
                    <p>รายงานการคอนโด</p>
                    <a href="https://www.dropbox.com/scl/fi/o8ogutlr4wrq1loahq1zq/2025.pdf?rlkey=7z6nht3yv9bt6vborrryuloax&st=ksvc191d&dl=1" download target="_blank" class="download-link">ดาวน์โหลด PDF</a>
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
                    <p>รายงานการตรวจบ้าน</p>
                    <a href="https://www.dropbox.com/scl/fi/tjxe239nynmg1pta92uhc/2025.pdf?rlkey=xcsmo683gvkeza0k8soqs9wer&st=ctrnx95g&dl=0" class="view-link">ดูออนไลน์</a>
                </div>
                <div class="sample-item">
                    <div class="sample-icon online-icon" style="background-color: #33A8FF;"></div>
                    <p>รายงานการคอนโด</p>
                    <a href="https://www.dropbox.com/scl/fi/o8ogutlr4wrq1loahq1zq/2025.pdf?rlkey=7z6nht3yv9bt6vborrryuloax&st=ksvc191d&dl=0" class="view-link">ดูออนไลน์</a>
                </div>
            </div>
        </div>
    </div>


    <script>

        document.addEventListener("DOMContentLoaded", () => {
  // Get all tab buttons and content
  const tabButtons = document.querySelectorAll(".tab-btn")
  const tabContents = document.querySelectorAll(".tab-content")

  // Add click event listeners to tab buttons
  tabButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const targetTab = this.getAttribute("data-tab")

      // Remove active class from all buttons and contents
      tabButtons.forEach((btn) => btn.classList.remove("active"))
      tabContents.forEach((content) => content.classList.remove("active"))

      // Add active class to clicked button
      this.classList.add("active")

      // Show corresponding content
      const targetContent = document.getElementById(targetTab + "-content")
      if (targetContent) {
        targetContent.classList.add("active")
      }
    })
  })

  // Add hover effects to table rows
  const tableRows = document.querySelectorAll(".table-row")
  tableRows.forEach((row) => {
    row.addEventListener("mouseenter", function () {
      this.style.transform = "scale(1.01)"
      this.style.transition = "transform 0.2s ease"
    })

    row.addEventListener("mouseleave", function () {
      this.style.transform = "scale(1)"
    })
  })

  // Add smooth scrolling for better UX
  function smoothScrollToElement(element) {
    element.scrollIntoView({
      behavior: "smooth",
      block: "start",
    })
  }

  // Add animation to notes when they come into view
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1"
        entry.target.style.transform = "translateY(0)"
      }
    })
  }, observerOptions)

  // Observe notes and promo banner
  const animatedElements = document.querySelectorAll(".notes-section, .promo-banner")
  animatedElements.forEach((element) => {
    element.style.opacity = "0"
    element.style.transform = "translateY(20px)"
    element.style.transition = "opacity 0.6s ease, transform 0.6s ease"
    observer.observe(element)
  })

  // Add click animation to buttons
  tabButtons.forEach((button) => {
    button.addEventListener("click", function () {
      this.style.transform = "scale(0.95)"
      setTimeout(() => {
        this.style.transform = "scale(1)"
      }, 150)
    })
  })

  // Initialize with house tab active
  const houseTab = document.querySelector('[data-tab="house"]')
  const houseContent = document.getElementById("house-content")

  if (houseTab && houseContent) {
    houseTab.classList.add("active")
    houseContent.classList.add("active")
  }
})

// Add loading animation
window.addEventListener("load", () => {
  document.body.style.opacity = "0"
  document.body.style.transition = "opacity 0.5s ease"

  setTimeout(() => {
    document.body.style.opacity = "1"
  }, 100)
})

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
                    }, 300);
                });
            }, 5000);

            const downloadLinks = document.querySelectorAll('.download-link');
            downloadLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // แสดงข้อความกำลังโหลดแบบนุ่มนวล (เช่น Toast หรือข้อความใน DOM)
                    const msg = document.createElement('div');
                    msg.textContent = 'กำลังดาวน์โหลดไฟล์ PDF...';
                    msg.style.position = 'fixed';
                    msg.style.bottom = '20px';
                    msg.style.left = '50%';
                    msg.style.transform = 'translateX(-50%)';
                    msg.style.background = '#333';
                    msg.style.color = '#fff';
                    msg.style.padding = '10px 20px';
                    msg.style.borderRadius = '8px';
                    msg.style.zIndex = '1000';
                    document.body.appendChild(msg);

                    // ลบข้อความหลัง 2 วินาที
                    setTimeout(() => {
                        msg.remove();
                    }, 2000);

                    // สั่งดาวน์โหลดทันที
                    const a = document.createElement('a');
                    a.href = this.href;
                    a.setAttribute('download', '');
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                });
            });


            const viewLinks = document.querySelectorAll('.view-link');
                viewLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        window.open(this.href, '_blank');
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

    document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                const targetTab = button.getAttribute('data-tab');

                // Remove active class from all buttons and content
                document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

                // Add active class to clicked button and corresponding content
                button.classList.add('active');
                document.getElementById(targetTab + '-content').classList.add('active');
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
