@extends('layouts.layout_home')

@section('content')
    <link rel="stylesheet" href="/css/home/index.css">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg" id="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 id="hero-title">Loading...</h1>
            <p id="hero-subtitle"></p>
        </div>
    </section>

    <script>
        let texts = [{
                title: 'Thailand’s No.1',
                subtitle: 'Home Inspection Company'
            },
            {
                title: 'บริษัทตรวจบ้านอันดับ 1',
                subtitle: 'ที่ลูกค้าบอกต่อมากที่สุดในประเทศ'
            }
        ];
        let bgImages = [
            '/img/hero-bg1.jpg',
            '/img/hero-bg3.jpg'
        ];
        let textIndex = 0;
        let bgIndex = 0;

        // โหลดข้อมูลจาก backend
        // fetch('/backend/panel/get_hero_data')
        //     .then(res => res.json())
        //     .then(data => {
        //         texts = data.texts;
        //         bgImages = data.backgrounds;

        //         if (texts.length > 0 && bgImages.length > 0) {
        //             startHeroRotation();
        //         } else {
        //             console.warn("ไม่พบข้อมูล Hero หรือ Background");
        //         }
        //     })
        //     .catch(err => console.error("โหลดข้อมูลผิดพลาด", err));

        // เริ่มเปลี่ยนข้อความ + รูป
        function startHeroRotation() {
            updateHeroContent();

            setInterval(() => {
                textIndex = (textIndex + 1) % texts.length;
                bgIndex = (bgIndex + 1) % bgImages.length;
                updateHeroContent();
            }, 8000); // เปลี่ยนทุก 8 วินาที
        }

        // อัปเดตเนื้อหา Hero
        function updateHeroContent() {
            document.getElementById('hero-title').innerHTML = texts[textIndex].title;
            document.getElementById('hero-subtitle').innerText = texts[textIndex].subtitle;
            document.getElementById('hero-bg').style.backgroundImage = `url('${bgImages[bgIndex]}')`;
        }

        startHeroRotation();
    </script>

    <!-- Services Section -->
    {{-- <section class="services">
        <div class="services-header" data-aos="fade-up">
            <h2>บริการของเรา</h2>
        </div>
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card" data-aos="fade-up-right">
                <div class="service-icon">
                    <a href="/hinspector">
                        <img src="/img/s1.png" alt="T. Home Inspector">
                    </a>
                </div>
                <h3>T. Home Inspector</h3>
            </div>

            <!-- Service 2 -->
            <div class="service-card" data-aos="fade-up">
                <div class="service-icon">
                    <a href="/hinterior">
                        <img src="/img/s2.png" alt="T. Home Interior">
                    </a>
                </div>
                <h3>T. Home Interior</h3>
            </div>

            <!-- Service 3 -->
            <div class="service-card" data-aos="fade-up">
                <div class="service-icon">
                    <a href="/hconstruction">
                        <img src="/img/s3.png" alt="T. Home Construction">
                    </a>
                </div>
                <h3>T. Home Construction</h3>
            </div>

            <!-- Service 4 -->
            <div class="service-card" data-aos="fade-up-left">
                <div class="service-icon">
                    <a href="/hbutler">
                        <img src="/img/s4-bg.png" alt="Home Butler">
                    </a>
                </div>
                <h3>Home Butler</h3>
            </div>
        </div>
        <!-- Inspection Info Section -->
        <div class="wrapper" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="inspection-info">
                <div class="info-content">
                    <h2>ตรวจบ้านต้องทำอย่างไร ?</h2>
                    <h3 data-translate="inspection-details">
                        รายละเอียดที่ต้องตกลง และเตรียมก่อนตรวจบ้าน
                    </h3>
                    <a href="/description">
                        <button data-translate="see-details">
                            <i class="fa-solid fa-eye"></i> ดูรายละเอียด
                        </button>
                    </a>
                </div>
                <div class="info-image">
                    <!-- <img src="/img/how.png" alt="Inspection Process"> -->
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const servicesSection = document.querySelector(".services");
            const images = [
                "/img/inspector-bg.jpg",
                "/img/interior-bg.jpg",
                "/img/construction-bg.jpg",
                "/img/interior-bg.jpg"
            ]
            let index = 0;

            function changeBackground() {
                console.log("ok")
                servicesSection.style.backgroundImage = `url('${images[index]}')`;
                index = (index + 1) % images.length;
            }
            if (images.length > 0) {
                changeBackground();
                setInterval(changeBackground, 5000);
            }
        });
    </script> --}}



    <section class="services" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="services-header">
            <h2>Our Services</h2>
        </div>
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-icon">
                    <a href="/HOMESPECTOR/Homepage/service1.php">
                        <img src="/img/s1.png" alt="T. Home Inspector">
                    </a>
                </div>
                <h3>T. Home Inspector</h3>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <a href="/HOMESPECTOR/Homepage/review_interior.php">
                        <img src="/img/s2.png" alt="T. Home Interior">
                    </a>
                </div>
                <h3>T. Home Interior</h3>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-icon">
                    <a href="/HOMESPECTOR/Homepage/Hconstruction.php">
                        <img src="/img/s3.png" alt="T. Home Construction">
                    </a>
                </div>
                <h3>T. Home Construction</h3>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-icon">
                    <a href="/HOMESPECTOR/Homepage/Hbulter.php">
                        <img src="/img/s4-bg.png" alt="Home Butler">
                    </a>
                </div>
                <h3>Home Butler</h3>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const servicesSection = document.querySelector(".services");

            const bgImages = [
                "/HOMESPECTOR/img/hero-bg3.jpg",
                "/HOMESPECTOR/img/inspector-bg.jpg",
                "/HOMESPECTOR/img/interior-bg.jpg",
                "/HOMESPECTOR/img/construction-bg.jpg",
            ];

            let index = 0;

            function changeBackground() {
                servicesSection.style.backgroundImage = `url(${bgImages[index]})`;
                index = (index + 1) % bgImages.length;
            }
            setInterval(changeBackground, 5000);
            changeBackground();
        });
    </script>


    <!-- why choose us -->
    <section class="why-choose-us" style="overflow: hidden;">
        <h2 class="section-title aos-init aos-animate" data-translate="why-choose-us-title" data-aos="fade-down">
            ทำไมต้องเลือก ต.ตรวจบ้าน</h2>
        <div class="content-container"><!-- Left Text Section -->
            <div class="text-section">
                <div class="text-item">
                    <div class="icon-box"><img src="/icon/ICON/trusted.png" alt="Trust Icon" data-aos="fade-right"
                            class="fr-fic fr-dii aos-init" style="width: 150px;"></div>
                    <div class="text-content aos-init" data-aos="fade-right">
                        <h3 data-translate="trust-title">TRUST&nbsp;</h3>
                        <p data-translate="trust-details">บริษัทตรวจบ้านอันดับ 1 ที่ลูกค้าบอกต่อมากที่สุดในประเทศไทย
                            เราเป็นผู้นำด้านการตรวจบ้านอันดับต้นๆของประเทศ<br>ที่ลูกค้าไว้วางใจให้ตรวจบ้าน
                            โครงการแบรนด์ชั้นนำต่างๆ ในประเทศ</p>
                    </div>
                </div>
                <div class="text-item">
                    <div class="icon-box"><img src="/icon/ICON/future.png" alt="Tech Icon" data-aos="fade-right"
                            class="fr-fic fr-dii aos-init" style="width: 148px;"></div>
                    <div class="text-content aos-init" data-aos="fade-right">
                        <h3 data-translate="tech-title">TECH</h3>
                        <p data-translate="tech-details">บริษัทตรวจบ้านเจ้าแรกและเจ้าเดียวที่ออกแบบและพัฒนาระบบ
                            Web-Application ในการตรวจบ้านเป็นของตัวเอง<br>เป็นผู้นำการใช้อุปกรณ์การตรวจที่ทันสมัย เช่น
                            กล้องอินฟาเรด และโดรนตรวจหลังคา</p>
                    </div>
                </div>
                <div class="text-item">
                    <div class="icon-box"><img src="/icon/ICON/group.png" alt="Team Icon" data-aos="fade-right"
                            class="fr-fic fr-dii aos-init" style="width: 203px;"></div>
                    <div class="text-content aos-init" data-aos="fade-right">
                        <h3 data-translate="team-title">TEAM</h3>
                        <p data-translate="team-details">เราทำงานเป็นระบบแบบมืออาชีพ มีประสบการณ์และเชี่ยวชาญ
                            ทีมของเราไม่ใช่พนักงานของ บริษัทอสังหาริมทรัพย์ที่ออกมาตรวจรับงานตัวเอง
                            และไม่มีการส่งต่องานให้ซับ</p>
                    </div>
                </div>
            </div><!-- Right Image Section -->
            <div class="image-section aos-init" data-aos="fade-up-left"><img
                    src="/img/uploads_old/1743739712_carousel2.1.jpg" alt="Example Image" class="fr-fic fr-dii"
                    loading="lazy"></div>
        </div>
        <div class="certifications aos-init" data-aos="fade-up-right">
            <div class=" certification"><img src="/img/certified1.png" alt="T. Home Inspector" class="fr-fic fr-dii">
                <p data-translate="certification1">ต.ตรวจบ้าน ได้รับการรับรองมาตรฐาน ISO/IEC 29110-4-3: 2018</p>
            </div>
            <div class="certification aos-init" data-aos="fade-up-right"><img src="/img/certified2.png"
                    alt="Certified Professional Inspector" class="fr-fic fr-dii" style="width: 378px;">
                <p data-translate="certification2">ได้รับ Certified จาก Inter NACHI</p>
            </div>
            <div class="certification aos-init" data-aos="fade-up-right"><img src="/img/certified3.png"
                    alt="Certified Professional Inspector" class="fr-fic fr-dii" style="width: 343px;">
                <p data-translate="certification3">ได้รับ Certified จาก Inter NACHI</p>
            </div>
        </div>
    </section>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('/backend/panel/get_why_choose_us')
                .then(res => res.json())
                .then(data => {
                    document.getElementById("why-choose-us-container").innerHTML = data.content;
                })
                .catch(err => console.error("โหลดเนื้อหาผิดพลาด:", err));
        });
    </script> --}}

    <div class="cal-container" data-aos="zoom-in-down">
        <div class="cal">
            <div class="cal-item">
                <div>
                    <h2><i class="fas fa-calculator"></i> About the Calculator (เกี่ยวกับเครื่องคำนวณ)</h2>
                    <p><i class="fas fa-info-circle"></i> This calculator helps you estimate the cost of home
                        inspection services.
                        (เครื่องคำนวณนี้ช่วยประมาณค่าบริการตรวจสอบบ้านของคุณ)</p>
                    <p><i class="fas fa-check-circle"></i> Simply enter the required details, and the system
                        will provide an instant estimate.
                        (เพียงป้อนข้อมูลที่จำเป็น ระบบจะคำนวณราคาให้คุณทันที)</p>
                    <p><i class="fas fa-phone"></i> If you have any questions, feel free to contact us.
                        (หากมีข้อสงสัย ติดต่อเราได้ทุกเมื่อ)</p>
                </div>
                <div class="logo-container">
                    <img src="https://img.freepik.com/free-vector/household-HOMESPECTOR-utilities-design-concept-illustrated-consumption-accounting-energetic-water-resources-isometric-vector-illustration_98292-9053.jpg?t=st=1738919465~exp=1738923065~hmac=e56ee21aff5e511ecc26ae700c498f651b595e534afce2935ef0b8959ced7d59&w=1060"
                        alt="House Logo">
                </div>
            </div>

            <!-- Right side iframe -->
            <iframe class="cal-iframe" src="https://requestform.thomeinspector.com/calc/"></iframe>
        </div>

        <!-- CTA Section -->
        <div class="cta-section" data-aos="fade-up">
            <h2>เริ่มต้นวางแผนระบบไฟฟ้าภายในบ้านของคุณ!</h2>
            <a href="cal-electric" class="btn">เริ่มต้นคำนวณเลย</a>
        </div>
    </div>



    <section class="projects" data-aos="fade-up" data-aos-duration="3000">
        <h2 class="projects-title">
            ผลงาน
        </h2>
        <a href="/projects_media.html" class="btn btn-firstall">ดูทั้งหมด</a>
        <div class="projects-grid" id="project-cards">
            <!-- Cards will be dynamically populated here -->
        </div>
    </section>

    <!-- content -->
    <div class="carousel-container3 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <div class="carousel-header3">
            <h2 class="carousel-title3">Content</h2>
            <a href="/Homepage/content.php" class="btn btn-all">ดูทั้งหมด</a>
        </div>

        <div class="carousel3">
            <div class="carousel-slides3" id="carousel-slides">
                <div class="carousel-slide3 active">
                    <img src="/img/thumbnail4.jpg" alt="Feature 1">
                    <div class="slide-content3">
                        <h3>รีวิวตรวจบ้านดารา เซเลบ อินฟลู</h3>
                        <p>6 EPISODES</p>
                        <p>รีวิวการตรวจบ้านเดี่ยว พระเอกดัง!! " ตงตง เดอะสตาร์</p>
                        <a href="/Homepage/carousel_content.html" class="btn">ดูทั้งหมด</a>
                    </div>
                </div>
                <div class="carousel-slide3">
                    <img src="/img/uploads_old/carousel_thumb1.jpg" alt="Feature 2">
                    <div class="slide-content3">
                        <h3>ต.ตรวจบ้าน x การตลาดวันละตอน</h3>
                        <p>5 EPISODES</p>
                        <p>พาดูบ้านหรู 89 ล้าน! แกรนด์ บางกอก บูเลอวาร์ด ยาร์ด บางนา</p>
                        <a href="/Homepage/carousel_content1.html" class="btn">ดูทั้งหมด</a>
                    </div>
                </div>
                <div class="carousel-slide3">
                    <img src="/img/uploads_old/thumbnail3.jpg" alt="Feature 3">
                    <div class="slide-content3">
                        <h3>สุดพิเศษ! พาดูบ้านหรู</h3>
                        <p>3 EPISODES</p>
                        <p>รีวิวตรวจบ้านหรู 40ล้าน! CEO #บุญนําพา</p>
                        <a href="/Homepage/carousel_content2.html" class="btn">ดูทั้งหมด</a>
                    </div>
                </div>
                <div class="carousel-slide3">
                    <img src="/img/carousel_thumb2.jpg" alt="Feature 4">
                    <div class="slide-content3">
                        <h3>ตรวจบ้านก่อนโอน by ต.ตรวจบ้าน</h3>
                        <p>6 EPISODES</p>
                        <p>ตรวจบ้านก่อนโอน by ต.ตรวจบ้าน...🏡⛈️</p>
                        <a href="/Homepage/carousel_content3.html" class="btn">ดูทั้งหมด</a>
                    </div>
                </div>
                <div class="carousel-slide3">
                    <img src="/img/warentty.jpg" alt="Feature 5">
                    <div class="slide-content3">
                        <h3>ประกันภัยบ้าน แฮปปี้โฮม ธนชาต</h3>
                        <p>8 EPISODES</p>
                        <p>ช่วงนี้หน้าฝน อย่ามองข้ามสิ่งนี้🏡⛈️</p>
                        <a href="/Homepage/carousel_content4.html" class="btn">ดูทั้งหมด</a>
                    </div>
                </div>
                <div class="carousel-slide3">
                    <img src="/img/team_thumb.jpg" alt="Feature 6">
                    <div class="slide-content3">
                        <h3>สนุก มันส์ ฮา กับช่างตรวจ</h3>
                        <p>10 EPISODES</p>
                        <p>สนุก มันส์ ฮา กับช่างตรวจ</p>
                        <a href="/Homepage/carousel_content5.html" class="btn">ดูทั้งหมด</a>
                    </div>
                </div>
            </div>

            <div class="carousel-thumbnails" id="carousel-thumbnails">
                <button class="prev-btn" onclick="changeSlide(-1)">&lt;</button>
                <!-- Thumbnails will be added here -->
                <div class="thumbnail active" onclick="showSlide(0)"><img src="/img/thumbnail4.jpg" alt="Thumb 1">
                </div>
                <div class="thumbnail" onclick="showSlide(1)"><img src="/img/uploads_old/carousel_thumb1.jpg"
                        alt="Thumb 2"></div>
                <div class="thumbnail" onclick="showSlide(2)"><img src="/img/uploads_old/thumbnail3.jpg" alt="Thumb 3">
                </div>
                <div class="thumbnail" onclick="showSlide(3)"><img src="/img/carousel_thumb2.jpg" alt="Thumb 4"></div>
                <div class="thumbnail" onclick="showSlide(4)"><img src="/img/uploads_old/warentty.jpg" alt="Thumb 5">
                </div>
                <div class="thumbnail" onclick="showSlide(5)"><img src="/img/uploads_old/team_thumb.jpg" alt="Thumb 6">
                </div><button class="next-btn" onclick="changeSlide(1)">&gt;</button>
            </div>
        </div>
    </div>

    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-slide3');
            const thumbnails = document.querySelectorAll('.thumbnail');
            let totalSlides = thumbnails.length;

            console.log('before', slides, thumbnails)
            if (index < 0) index = totalSlides - 1;
            if (index >= totalSlides) index = 0;
            currentSlide = index;
            console.log('id :', index)
            slides.forEach((slide, i) => {
                if (i == index)
                    slide.classList.add('active');
                else if (slide.classList.contains('active'))
                    slide.classList.remove('active');
            });

            thumbnails.forEach((thumb, i) => {
                if (i == index)
                    thumb.classList.add('active');
                else if (thumb.classList.contains('active'))
                    thumb.classList.remove('active');;
            });
            console.log('after ', slides, thumbnails)
        }

        function changeSlide(step) {
            showSlide(currentSlide + step);
        }

        //     fetch("/backend/panel/fetch_content_carousel")
        //         .then(res => res.json())
        //         .then(data => {
        //             const slidesContainer = document.getElementById("carousel-slides");
        //             const thumbnailsContainer = document.getElementById("carousel-thumbnails");

        //             data.forEach((item, index) => {
        //                 // Slide
        //                 const slide = document.createElement("div");
        //                 slide.className = "carousel-slide3" + (index === 0 ? " active" : "");
        //                 slide.innerHTML = `
    //                 <img src="${item.image_url}" alt="Feature ${index + 1}">
    //                 <div class="slide-content3">
    //                     <h3>${item.title}</h3>
    //                     <p>${item.episodes}</p>
    //                     <p>${item.description}</p>
    //                     <a href="${item.link_url}" class="btn">ดูทั้งหมด</a>
    //                 </div>
    //                 `;
        //                 slidesContainer.appendChild(slide);

        //                 // Thumbnail
        //                 const thumb = document.createElement("div");
        //                 thumb.className = "thumbnail" + (index === 0 ? " active" : "");
        //                 thumb.setAttribute("onclick", `showSlide(${index})`);
        //                 thumb.innerHTML = `<img src="${item.thumbnail_url}" alt="Thumb ${index + 1}">`;
        //                 thumbnailsContainer.insertBefore(thumb, thumbnailsContainer.querySelector(".next-btn"));
        //             });

        //             totalSlides = data.length;
        //         });
        //
    </script>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            fetch("/backend/panel/get_index_reviews")
                .then(res => res.json())
                .then(data => {
                    // Set review title and subtitle (allow HTML from Froala)
                    // document.getElementById('review-title').innerText = data.text.title;
                    document.getElementById('review-subtitle').innerHTML = data.text.subtitle;

                    // Generate stat boxes
                    const statsContainer = document.getElementById('stats-container');
                    data.stats.forEach(stat => {
                        const box = document.createElement("div");
                        box.className = "stat-box";
                        box.innerHTML = `
                            <img src="${stat.icon_url}" alt="${stat.label}">
                            <h2 id="stat-${stat.id}">0</h2>
                            <p>${stat.label}</p>
                        `;
                        statsContainer.appendChild(box);
                    });

                    // Animate numbers only when in view
                    let animated = false;
                    const animateValue = (id, end, duration) => {
                        let start = 0;
                        let increment = Math.ceil(end / (duration / 50));
                        const element = document.getElementById(id);
                        const interval = setInterval(() => {
                            start += increment;
                            if (start >= end) {
                                start = end;
                                clearInterval(interval);
                            }
                            element.textContent = start.toLocaleString();
                        }, 50);
                    };

                    window.addEventListener("scroll", () => {
                        const section = document.getElementById("stats-section");
                        const offset = section.offsetTop;

                        if (!animated && window.scrollY + window.innerHeight > offset) {
                            data.stats.forEach(stat => {
                                animateValue(`stat-${stat.id}`, stat.final_value, stat
                                    .animation_duration);
                            });
                            animated = true;
                        }
                    });
                })
                .catch(err => {
                    console.error("โหลดข้อมูลรีวิวผิดพลาด:", err);
                });
        });
    </script> -->


    <section class="articles" data-aos="fade-up" data-aos-delay="100">
        <h2 class="articles-title">Latest Articles</h2>
        <a href="/article" class="btn btn-firstall">ดูทั้งหมด</a>
        <div class="review-cards">
            @if (isset($latestArticles) && count($latestArticles) > 0)
                @foreach ($latestArticles as $article)
                    <div class="new-card">
                        <a href="/article/detail?news_id={{ $article->id }}"><img
                                src="{{ $article->translation->coverPageImg }}" alt="" loading="lazy"></a>
                        <a href="/article/detail?news_id={{ $article->id }}"
                            class="new-card-title">{{ $article->translation->title }}</a>
                        <div class="new-card-tags">
                            @foreach ($article->tags as $tag)
                                <a href="/article?tag={{ $tag->name }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <div>
                            <span
                                class="upload-date">{{ \Carbon\Carbon::parse($article->created_at)->locale(app()->getlocale())->isoFormat('D-MM-YYYY') }}
                            </span>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>

    <!-- newapp -->
    <div class="container-newapp aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
        <div class="header-newapp">
            <h1>New</h1>
            <h2>Application ตรวจบ้านด้วยตัวเอง</h2>
            <p>ตรวจบ้านด้วยตัวเอง พร้อมออกรายงานในตัว ตรวจไม่เป็นก็มีคลิปสอนให้ภายในแอป</p>
        </div>
        <div class="content-newapp">
            <div class="app-preview">
                <img src="/img/app1.png" alt="App Preview 1">
                <img src="/img/app2.png" alt="App Preview 2">
            </div>
            <div class="main-btn">
                <button>
                    <a href="https://liff.line.me/2005695449-36Xrdj94">ใช้งานฟรี!</a>
                </button>
            </div>
        </div>
    </div>



    <!-- Reviews Section -->
    <section class="stats-section" id="stats-section">
        <div class="content-wrapper">
            <div class="text-content">
                <!-- <h2 class="section-title" id="review-title">Loading...</h2> -->
                <p class="section-subtitle" id="review-subtitle">Please wait...</p>
            </div>
            <div class ="trustindex">
                <script defer async src='https://cdn.trustindex.io/loader.js?5ed29ff45a93626df0964d775e4'></script>
            </div>
            <div class="trustindex data-widget-id=5ed29ff45a93626df0964d775e4" data-elfsight-app-lazy></div>

            <div class="insight-metrics animate-text delay-3">
                <div class="metric-box">
                    <span class="metric-number" data-target="1250">1250</span><span class="metric-unit">+</span>
                    <p class="metric-label">ตรวจบ้านมาแล้วกว่า</p>
                </div>
                <div class="metric-box">
                    <span class="metric-number" data-target="99.9">99.9</span><span class="metric-unit">%</span>
                    <p class="metric-label">ความพึงพอใจ</p>
                </div>
                <div class="metric-box">
                    <span class="metric-number" data-target="10">10</span><span class="metric-unit">+ปี</span>
                    <p class="metric-label">ประสบการณ์กว่า</p>
                </div>

                <div class="metrics-extra" id="stats-container"></div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const counters = document.querySelectorAll('.metric-number');

                    const runCounter = (counter) => {
                        const target = +counter.getAttribute('data-target');
                        const duration = 1500; // ms
                        const stepTime = Math.max(Math.floor(duration / target), 10);
                        let current = 0;

                        const timer = setInterval(() => {
                            current += Math.ceil(target / (duration / stepTime));
                            if (current >= target) {
                                counter.textContent = target;
                                clearInterval(timer);
                            } else {
                                counter.textContent = current;
                            }
                        }, stepTime);
                    };

                    // Optional: Run when in viewport
                    const observer = new IntersectionObserver((entries, obs) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                runCounter(entry.target);
                                obs.unobserve(entry.target); // Run once
                            }
                        });
                    }, {
                        threshold: 0.5
                    });

                    counters.forEach(counter => observer.observe(counter));
                });
            </script>


    </section>

    <!-- faq Section -->
    <section class="faq" id="faq">
        <div class="faq-container">
            <h1 class="faq-title">คำถามที่พบบ่อย</h1>
            <div class="faq-content">
                <aside class="faq-menu">
                    <ul id="faq-category-list">
                        <li class="active" data-category="all" onclick="filterFAQ('all')">ทั้งหมด</li>
                    </ul>
                </aside>

                <div class="faq-questions" id="faq-content">

                    @if (isset($faqs) && count($faqs) > 0)
                        @foreach ($faqs as $faq)
                            <div> {{ $faq->translation->question }}</div>
                            <div> {{ $faq->translation->answer }}</div>
                            <div>
                                @foreach ($faq->tags as $tag)
                                    <div> {{ $tag->name }}</div>
                                @endforeach
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <script>
            function slugify(str) {
                return str.toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
            }

            function toggleAnswer(button) {
                const answer = button.nextElementSibling;
                const icon = button.querySelector(".icon");
                const isVisible = answer.style.display === "block";
                answer.style.display = isVisible ? "none" : "block";
                icon.textContent = isVisible ? "+" : "−";
            }

            function filterFAQ(category) {
                document.querySelectorAll("#faq-category-list li").forEach(li => li.classList.remove("active"));
                document.querySelector(`#faq-category-list li[data-category="${category}"]`)?.classList.add("active");

                document.querySelectorAll(".faq-item").forEach(item => {
                    item.style.display = category === "all" || item.getAttribute("data-category") === category ?
                        "block" : "none";
                });
            }

            // Fetch FAQs
            window.addEventListener("DOMContentLoaded", () => {
                const faqs = @json($faqs);
                const categories = new Set();
                const faqContent = document.getElementById("faq-content");
                const categoryList = document.getElementById("faq-category-list");
                faqContent.innerHTML = "";

                const grouped = {};
                faqs.forEach(faq => {
                    faq.tags.forEach(cat => {
                        categories.add(cat.name);
                        if (!grouped[cat.name]) grouped[cat.name] = [];
                        grouped[cat.name].push(faq);
                    })
                });

                categories.forEach(cat => {
                    const li = document.createElement("li");
                    li.textContent = cat;
                    li.setAttribute("data-category", cat);
                    li.onclick = () => filterFAQ(cat);
                    categoryList.appendChild(li);
                });

                for (const cat in grouped) {
                    grouped[cat].forEach(faq => {
                        const item = document.createElement("div");
                        item.className = "faq-item";
                        item.setAttribute("data-category", cat);
                        item.innerHTML = `
                                <button class="faq-question" onclick="toggleAnswer(this)">
                                    <span class="icon">+</span>
                                    <span class="question-text">${faq.translation.question}</span>
                                </button>
                                <div class="faq-answer"><p>${faq.translation.answer}</p></div>
                                `;
                        faqContent.appendChild(item);
                    });
                }


                filterFAQ("all");
            });
        </script>
    </section>


    <section class="elfsight" data-aos="fade-up">
        <h1>Facebook</h1>

        <div class="trustindex-widget" data-widget-id="d4242bb455c262618f46fda8250"></div>
    </section>

    <script defer async src='https://cdn.trustindex.io/loader-feed.js?d4242bb455c262618f46fda8250'></script>
    <script></script>
@endsection
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon1.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap">
    <link rel="stylesheet" href="/CSS/index.css">
    <title>Header Design</title>
</head> --}}

{{-- <body>
    <div class="content-box">
        <div class="content-box">








            <footer class="footer">
                <div class="footer-container">
                    <!-- Left Section: Social Media & Branding -->
                    <div class="footer-left">
                        <!-- <h2>HomeInspector</h2> -->
                        <img src="/img/footer_logo.png" alt="HomeInspector Logo" class="footer-logo">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/t.homeinspector/" target="_blank"><img
                                    src="/icon/ICON/Fb.png" alt="Facebook"></a>
                            <a href="https://www.instagram.com/t.homeinspector/" target="_blank"><img
                                    src="/icon/ICON/IG.png" alt="Instagram"></a>
                            <a href="https://page.line.me/t.home?openQrModal=true" target="_blank"><img
                                    src="/icon/ICON/line.png" alt="Line"></a>
                            <a href="https://www.tiktok.com/@thomeinspector" target="_blank"><img
                                    src="/icon/ICON/Tiktok.png" alt="TikTok"></a>
                            <a href="https://www.youtube.com/channel/UC1BPUCVPBW4-ml7MrxQWjug" target="_blank"><img
                                    src="/icon/ICON/YB.png" alt="YouTube"></a>
                        </div>
                    </div>

                    <!-- Center Section: Company -->
                    <div class="footer-center">
                        <h2>เกี่ยวกับเรา <span class="toggle-icon">+</span></h2>
                        <ul>
                            <li><a href="/ourstory">ประวัติของเรา</a></li>
                            <li><a href="/ourteam">ทีมงานของเรา</a></li>
                        </ul>
                    </div>

                    <!-- Right Section: Our Services -->
                    <div class="footer-right">
                        <h2>บริการของเรา <span class="toggle-icon">+</span></h2>
                        <ul>
                            <li><a href="/Hinspector">ต.ตรวจบ้าน</a></li>
                            <li><a href="/Hinterior">ต.ตงแต่ง</a></li>
                            <li><a href="/Hconstruction">ต.เติม</a></li>
                            <li><a href="/Hbulter">H.Bulter</a></li>
                            <li><a href="/cal-electric">ตรวจสอบระบบไฟฟ้า</a></li>
                            <li><a href="/app-inspector">ตรวจบ้านเอง</a></li>
                            <li><a href="/checklist">เทียบสเปกบ้าน</a></li>
                        </ul>
                    </div>

                    <!-- Extra Section: Customer Help -->
                    <div class="footer-help">
                        <h2>ช่วยเหลือ <span class="toggle-icon">+</span></h2>
                        <ul>
                            <li><a href="/index#faq">คำถามที่พบบ่อย (FAQ)</a></li>
                            <li><a href="/joinwithus">รวมงานกับเรา</a></li>
                            <li><a href="/promotion">โปรโมชั่น</a></li>
                            <li><a href="/Contactus">ติดต่อเรา</a></li>
                        </ul>
                    </div>

                    <!-- Payment Logos -->
                    <div class="footer-payment">
                        <h2>ชำระเงินด้วย</h2>
                        <div class="payment-logos">
                            <img src="/img/visacard.png" alt="Visa">
                            <img src="/img/Mastercard.webp" alt="MasterCard">
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <p>© 2024 HomeInspector. All Rights Reserved.</p>
                </div>
            </footer>


        </div>
    </div>

    <script src="/JS/Toggle_Navbar.js"></script>
    <script src="/JS/dropdown.js"></script>
    <script src="/JS/pull_articles.js"></script>
    <!-- <script src="/JS/carousel.js"></script>
    <script src="/JS/carousel2.js"></script>
    <script src="/JS/carousel4.js"></script> -->
    <!-- <script src="/JS/stats-section.js"></script> -->
    <script src="/JS/pull_project.js"></script>
    <!-- <script src="/JS/faq.js"></script> -->
    <script src="/JS/search_ham.js"></script>
    <script src="/JS/footer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://static.elfsight.com/platform/platform.js" async></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const heroBg = document.querySelector(".hero-bg");

            let scale = 1;
            let growing = true;

            function animateBackground() {
                if (growing) {
                    scale += 0.005; // Slowly zoom in
                    if (scale >= 1.1) growing = false;
                } else {
                    scale -= 0.005; // Slowly zoom out
                    if (scale <= 1) growing = true;
                }
                heroBg.style.transform = `scale(${scale})`;
                requestAnimationFrame(animateBackground);
            }

            animateBackground();
        });
    </script>

</body>

</html> --}}
