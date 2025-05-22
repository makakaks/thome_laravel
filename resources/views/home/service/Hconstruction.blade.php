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
                    <h1 class="hero-title">บริการต่อเติมบ้านคุณภาพ</h1>
                    <div class="hero-description">ต.ต่อเติม มุ่งมั่นที่จะมอบบริการต่อเติมบ้านที่มีคุณภาพสูงสุด ด้วยทีมงานมืออาชีพและประสบการณ์มากกว่า 10 ปี</div>
                    <a href="Homepage/Contactus.php" class="hero-btn">ติดต่อเรา</a>
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
        <h2 class="section-title">ทำไมต้องเลือกเรา</h2>
        <div class="about-container">
            <figure class="about-image">
                <img src="img/Hconstruction-bg.jpg" alt="ทีมงานของเรา">
            </figure>
            <div class="about-content">
                <p class="about-description">บริษัทของเรามีประสบการณ์ในวงการก่อสร้างและต่อเติมบ้านมากกว่า 10 ปี เรามุ่งมั่นที่จะมอบบริการที่มีคุณภาพสูงสุดให้กับลูกค้าทุกท่าน</p>
                <ul class="about-features">
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>ทีมงานมืออาชีพ ประสบการณ์สูง</span>
                    </li>
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>วัสดุคุณภาพสูง ได้มาตรฐาน</span>
                    </li>
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>ราคายุติธรรม โปร่งใส</span>
                    </li>
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>รับประกันผลงาน</span>
                    </li>
                    <li class="about-feature">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <span>บริการหลังการขายที่ดีเยี่ยม</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- 🎞️ Carousel Section -->
<section class="carousel2 py-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
    <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item">
                <div class="carousel-content mx-auto text-center">
                    <div class="carousel-heading">ราคาค่าบริการตรวจบ้านทาวน์โฮม</div>
                    <img src="img/servicecharge1.png" alt="Service Pricing 1" class="img-fluid">
                </div>
            </div>
            <!-- Second Slide -->
            <div class="carousel-item active">
                <div class="carousel-content mx-auto text-center">
                    <div class="carousel-heading">ราคาค่าบริการตรวจบ้านทาวน์โฮม</div>
                    <img src="img/servicecharge2.png" alt="Service Pricing 2" class="img-fluid">
                </div>
            </div>
            <!-- Third Slide -->
            <div class="carousel-item">
                <div class="carousel-content mx-auto text-center">
                    <div class="carousel-heading">ราคาค่าบริการตรวจบ้านทาวน์โฮม</div>
                    <img src="img/servicecharge3.png" alt="Service Details" class="img-fluid">
                </div>
            </div>
            <!-- Fourth Slide -->
            <div class="carousel-item">
                <div class="carousel-content mx-auto text-center">
                    <div class="carousel-heading">ราคาค่าบริการตรวจบ้านทาวน์โฮม</div>
                    <img src="img/servicecharge4.png" alt="Service Details" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- Previous Button -->
        <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; width: 40px; height: 40px;"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!-- Next Button -->
        <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; width: 40px; height: 40px;"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<script src="/js/home/service/Hconstruction.js"></script>

@endsection

