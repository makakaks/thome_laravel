@extends('component.layout')
@section('title', 'T. Home Construction')

@section('content')

<link rel="stylesheet" href="/css/home/service/Hconstruction.css">

<section class="hero-section">
    <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>                    
        </div>
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
                <img src="https://img.freepik.com/free-photo/people-renovating-house-concept_53876-20664.jpg" class="hero-bg" alt="...">
                <div class="hero-content">
                    <div class="logo-container">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/s3-3bLs5HKnwRUrK4px4T8zPO4uMNVUmo.png" alt="T. HOME CONSTRUCTION Logo" class="hero-logo">
                    </div>
                    <h1 class="hero-title">ต.ต่อเติม </h1>
                    <div class="hero-description">บริการรับเหมาก่อสร้าง ต่อเติมบ้าน ห้องครัว โครงหลังคาโรงรถ ลงเสาเข็ม ต่อเติมครบ ฟังก์ชั่นเยอะ พร้อมเข้าอยู่ พร้อมบริการแบบ One Stop Service ที่ช่วยดูแลคุณตั้งแต่เริ่มงานจนจบงาน</div>
                    <a href="Homepage/Contactus.php" class="hero-btn">ติดต่อเราตอนนี้ 066-168-8181 </a>
                </div>
            </div>
            <div class="carousel-item h-100 p-0">
                <div class="hero-detail-container">
                    <img src="img/Construction-bg.jpg" alt="...">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- <img src="https://img.freepik.com/free-photo/people-renovating-house-concept_53876-20664.jpg" alt="" class="hero-bg"> -->
    <!-- <div class="hero-content">
        <div class="logo-container">
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/s3-3bLs5HKnwRUrK4px4T8zPO4uMNVUmo.png" alt="T. HOME CONSTRUCTION Logo" class="hero-logo">
        </div>
        <h1 class="hero-title">บริการต่อเติมบ้านคุณภาพ</h1>
        <div class="hero-description">ต.ต่อเติม มุ่งมั่นที่จะมอบบริการต่อเติมบ้านที่มีคุณภาพสูงสุด ด้วยทีมงานมืออาชีพและประสบการณ์มากกว่า 10 ปี</div>
        <a href="Homepage/Contactus.php" class="hero-btn">ติดต่อเรา</a>
    </div> -->
</section>

<!-- 🏠 Services Section -->
<section class="services-section" id="services" data-aos="fade-up">
    <div>
        <h2 class="section-title">บริการของเรา</h2>
        <div class="services-description">
            <div>บริการรับเหมาต่อเติมบ้านครบวงจร ตกแต่ง รีโนเวทบ้านเก่าให้เหมือนใหม่ งานหลังคา ผนังเบา ระบบไฟฟ้า ประปา และอื่นๆ</div>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-tools"></i></div>
                <div class="service-title">งานต่อเติม</div>
                <div class="service-text">ต่อเติมห้องครัว โรงรถ ห้องเก็บของ ฯลฯ</div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-paint-roller"></i></div>
                <div class="service-title">รีโนเวทบ้าน</div>
                <div class="service-text">ปรับปรุงบ้านเก่าให้สวยทันสมัย</div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-hard-hat"></i></div>
                <div class="service-title">งานโครงสร้าง</div>
                <div class="service-text">งานหลังคา โครงเหล็ก งานฐานราก</div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="service-title">งานระบบไฟฟ้า</div>
                <div class="service-text">เดินสายไฟ แก้ไขระบบ ปรับปรุงใหม่</div>
            </div>
        </div>
    </div>
</section>


<!-- ส่วนเกี่ยวกับเรา -->
<section class="about-section" id="about" data-aos="fade-up">
    <div class="container">
        <h2 class="section-title">ที่ ต.ต่อเติม</h2>
        <div class="about-container gap-sm-4 gap-md-5">
            <figure class="about-image justify-content-sm-center justify-content-md-end">
                <img src="img/Hconstruction-bg.jpg" alt="ทีมงานของเรา">
            </figure>
            <div class="about-content">
                <p class="about-description">บริษัทของเรามีประสบการณ์ในวงการก่อสร้างและต่อเติมบ้านมากกว่า 10 ปี เรามุ่งมั่นที่จะมอบบริการที่มีคุณภาพสูงสุดให้กับลูกค้าทุกท่าน</p>
                <ul class="about-features">
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>ออกแบบ 3D ฟรี เมื่อชำระยอดมัดจำ ค่าแบบงานหลังคาหัก 3,000 บาท </span>
                    </li>
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>ระยะเวลาในการต่อเติมส่วนหลังคา 7 วัน สำหรับงานรางน้ำและฝ้าระแนงไม้เทียม 7-14 วัน</span>
                    </li>
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>ในกรณีต่อเติมหลังคาพื้นที่ขั้นต่ำกว่า 15 ตร.ม. จะคิดเป็นราคา 15 ตร.ม. </span>
                    </li>
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>ต่อเติมหลังคากันสาด 30 ตร.ม. ขึ้นไป แถมเสาระแนงตกแต่งหรือไฟดาวน์ไลท์ 2 จุด</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="review-page aos-init aos-animate" data-aos="fade-up">
  <h1>ผลงานของเรา</h1>
        <br>
        <div class="categories aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
            <button class="category-btn active" data-category="all">ทั้งหมด</button>
            <button class="category-btn" data-category="Modern">หลังคากันสาด</button>
            <button class="category-btn" data-category="Modern Luxury">โรงจอดรถ</button>
            <button class="category-btn" data-category="Modern Classic">ห้องครัว</button>
        </div>
        <div class="review-cards">
            <a class="card" data-category="Modern" href="https://thomeinspector1.netlify.app/after_review_interior1">
                <img src="/img/after_review/interrior-bg1.jpg" alt="House Review 1">
                <p>Bangkok Boulevard Ramintra109</p>
            </a>
            <a class="card" data-category="Modern" href="https://thomeinspector1.netlify.app/after_review_interior2">
                <img src="/img/after_review/interrior-bg2.jpg" alt="House Review 1">
                <p>Nantawan Pinklao</p>
            </a>
            <a class="card" data-category="Modern" href="https://thomeinspector1.netlify.app/after_review_interior3">
                <img src="/img/after_review/interrior-bg3.jpg" alt="House Review 2">
                <p>Veritz Sathupradit34</p>
            </a>
            <a class="card" data-category="Modern Luxury"
                href="https://thomeinspector1.netlify.app/after_review_interior4">
                <img src="/img/after_review/interrior-bg4.jpg" alt="House Review 3">
                <p>CHAIYAPRUEK Bangna km 15</p>
            </a>
            <a class="card" data-category="Modern Luxury"
                href="https://thomeinspector1.netlify.app/after_review_interior5">
                <img src="/img/after_review/interrior-bg5.jpg" alt="House Review 5">
                <p>Grand Bangkok boulevard Krungthepkreetra</p>
            </a>
            <a class="card" data-category="Modern Luxury"
                href="https://thomeinspector1.netlify.app/after_review_interior6">
                <img src="/img/after_review/interrior-bg6.jpg" alt="House Review 6">
                <p>S'RIN Ratchapruek-Sai1</p>
            </a>
            <a class="card" data-category="Modern Classic"
                href="https://thomeinspector1.netlify.app/after_review_interior7">
                <img src="/img/after_review/interrior-bg7.jpg" alt="House Review 7">
                <p>MANTANA Barom-thaweewattana</p>
            </a>
            <a class="card" data-category="Modern Classic"
                href="https://thomeinspector1.netlify.app/after_review_interior8">
                <img src="/img/after_review/interrior-bg8.jpg" alt="House Review 8">
                <p>Prinn Sathorn-ratchapruek</p>
            </a>
            <a class="card" data-category="Modern Classic"
                href="https://thomeinspector1.netlify.app/after_review_interior9">
                <img src="/img/after_review/interrior-bg9.jpg" alt="House Review 9">
                <p>THE CITY Pinklao-sirinthorn</p>
            </a>
        </div>
    </div>

<script src="/js/home/service/Hconstruction.js"></script>

@endsection

