@extends('component.layout')

@section('content')
    <link rel="stylesheet" href="/css/home/aboutus/ourstory.css">

    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-element" data-speed="0.5">🏠</div>
        <div class="floating-element" data-speed="0.3">🔍</div>
        <div class="floating-element" data-speed="0.7">⭐</div>
        <div class="floating-element" data-speed="0.4">🛡️</div>
        <div class="floating-element" data-speed="0.6">🔧</div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-icon">🏆</span>
                    <span class="badge-text">ผู้นำอันดับ 1</span>
                </div>
                <h1 class="hero-title">
                    <span class="title-line">ผู้นำด้าน</span>
                    <span class="title-highlight">การตรวจบ้าน</span>
                </h1>
                <p class="hero-subtitle">บริการตรวจสอบบ้านมือสองที่ลูกค้าเชื่อถือมากที่สุดในประเทศไทย</p>
            
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section" id="story">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <span class="badge-icon">📖</span>
                    <span class="badge-text">เรื่องราวของเรา</span>
                </div>
                <h2 class="section-title">OUR STORY</h2>
                <p class="section-subtitle">การเดินทางสู่ความเป็นผู้นำด้านการตรวจบ้าน</p>
            </div>
            <div class="story-content">
                <div class="story-timeline">
                    <div class="timeline-item">
                        <div class="timeline-year">2015</div>
                        <div class="timeline-content">
                            <h3>จุดเริ่มต้น</h3>
                            <p>เริ่มต้นจากการตรวจบ้านให้กับเพื่อนและครอบครัว</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2018</div>
                        <div class="timeline-content">
                            <h3>การเติบโต</h3>
                            <p>ขยายบริการและได้รับการบอกต่อจากลูกค้า</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2023</div>
                        <div class="timeline-content">
                            <h3>ผู้นำตลาด</h3>
                            <p>กลายเป็นผู้นำด้านการตรวจบ้านในประเทศไทย</p>
                        </div>
                    </div>
                </div>
                <div class="story-visual">
                    <div class="story-card">
                        <div class="card-image">
                            <img src="/placeholder.svg?height=400&width=600" alt="Company Story">
                        </div>
                        <div class="card-content">
                            <h3>ความมุ่งมั่นในคุณภาพ</h3>
                            <p>ต.ตรวจบ้าน เริ่มต้นเมื่อปี 2015 โดยเจ้าของ คุณสุเมธ เจตธำรงชัย และคุณสุเทพ เจตธำรงชัย เริ่มจากการที่รับตรวจบ้าน และคอนโดให้กับกลุ่มพี่น้องและเพื่อนฝูงคนรู้จักจนได้รับการบอกต่อปากต่อปาก</p>
                            <div class="card-features">
                                <div class="feature-item">
                                    <span class="feature-icon">🎯</span>
                                    <span class="feature-text">ความแม่นยำสูง</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">⚡</span>
                                    <span class="feature-text">บริการรวดเร็ว</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">💎</span>
                                    <span class="feature-text">คุณภาพพรีเมียม</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="vision-section" id="vision">
        <div class="vision-background">
            <div class="vision-overlay"></div>
        </div>
        <div class="container">
            <div class="vision-content">
                <div class="vision-card">
                    <div class="card-header">
                        <div class="header-icon">🎯</div>
                        <h2 class="card-title">Our Vision and Mission</h2>
                    </div>
                    <div class="card-body">
                        <p class="vision-text">บริการตรวจสอบบ้านมือสองของบ้านและคอนโดก่อนโอนกรรมสิทธิ์ดีที่สุด อันดับ 1 ที่ลูกค้าเลือกมากที่สุดในประเทศไทย</p>
                        <div class="vision-features">
                            <div class="feature-grid">
                                <div class="grid-item">
                                    <div class="item-icon">🏆</div>
                                    <div class="item-text">ผู้นำตลาด</div>
                                </div>
                                <div class="grid-item">
                                    <div class="item-icon">🔍</div>
                                    <div class="item-text">ตรวจสอบละเอียด</div>
                                </div>
                                <div class="grid-item">
                                    <div class="item-icon">⭐</div>
                                    <div class="item-text">คุณภาพสูง</div>
                                </div>
                                <div class="grid-item">
                                    <div class="item-icon">🤝</div>
                                    <div class="item-text">ความไว้วางใจ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section" id="values">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <span class="badge-icon">💎</span>
                    <span class="badge-text">หลักการของเรา</span>
                </div>
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">สามเสาหลักที่ทำให้เราเป็นผู้นำ</p>
            </div>
            <div class="values-grid">
                <div class="value-card" data-tilt>
                    <div class="card-background"></div>
                    <div class="card-header">
                        <div class="card-icon">
                            <div class="icon-bg"></div>
                            <span class="icon-symbol">🛡️</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">TRUST</h3>
                        <p class="card-description">การสร้างความเชื่อมั่นด้วยการตรวจสอบที่มีมาตรฐาน</p>
                        <div class="card-features">
                            <div class="feature-point">✓ มาตรฐานสากล</div>
                            <div class="feature-point">✓ ความโปร่งใส</div>
                            <div class="feature-point">✓ ความน่าเชื่อถือ</div>
                        </div>
                    </div>
                </div>
                
                <div class="value-card" data-tilt>
                    <div class="card-background"></div>
                    <div class="card-header">
                        <div class="card-icon">
                            <div class="icon-bg"></div>
                            <span class="icon-symbol">🔧</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">TECH</h3>
                        <p class="card-description">บริการตรวจสอบคุณภาพบ้านโดยใช้เทคโนโลยีใหม่</p>
                        <div class="card-features">
                            <div class="feature-point">✓ เทคโนโลยีทันสมัย</div>
                            <div class="feature-point">✓ อุปกรณ์ล้ำสมัย</div>
                            <div class="feature-point">✓ ระบบดิจิทัล</div>
                        </div>
                    </div>
                </div>
                
                <div class="value-card" data-tilt>
                    <div class="card-background"></div>
                    <div class="card-header">
                        <div class="card-icon">
                            <div class="icon-bg"></div>
                            <span class="icon-symbol">👥</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">TEAM</h3>
                        <p class="card-description">ทีมงานคุณภาพพร้อมให้บริการลูกค้า</p>
                        <div class="card-features">
                            <div class="feature-point">✓ ผู้เชี่ยวชาญ</div>
                            <div class="feature-point">✓ ประสบการณ์สูง</div>
                            <div class="feature-point">✓ บริการเป็นเลิศ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founders Section -->
    <section class="founders-section" id="founders">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <span class="badge-icon">👑</span>
                    <span class="badge-text">ผู้ก่อตั้ง</span>
                </div>
                <h2 class="section-title">Our Founders</h2>
                <p class="section-subtitle">ผู้นำที่มีวิสัยทัศน์และประสบการณ์</p>
            </div>
            <div class="founders-grid">
                <div class="founder-card">
                    <div class="card-background"></div>
                    <div class="founder-image">
                        <img src="/img/staff/CEO.jpg" alt="Sumes Chetthamrongchai">
                        <div class="image-overlay">
                            <div class="social-links">
                                <a href="#" class="social-link">📧</a>
                                <a href="#" class="social-link">📱</a>
                                <a href="#" class="social-link">💼</a>
                            </div>
                        </div>
                    </div>
                    <div class="founder-info">
                        <h3 class="founder-name">Sumes Chetthamrongchai</h3>
                        <p class="founder-title">Founder & Managing Director</p>
                        <p class="founder-subtitle">NACHI Certified Inspector</p>
                        <div class="founder-achievements">
                            <div class="achievement-item">
                                <span class="achievement-icon">🏆</span>
                                <span class="achievement-text">8+ ปีประสบการณ์</span>
                            </div>
                            <div class="achievement-item">
                                <span class="achievement-icon">📜</span>
                                <span class="achievement-text">ใบรับรองสากล</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="founder-card">
                    <div class="card-background"></div>
                    <div class="founder-image">
                        <img src="/img/staff/CO-founder.jpg" alt="Suthep Chetthamrongchai">
                        <div class="image-overlay">
                            <div class="social-links">
                                <a href="#" class="social-link">📧</a>
                                <a href="#" class="social-link">📱</a>
                                <a href="#" class="social-link">💼</a>
                            </div>
                        </div>
                    </div>
                    <div class="founder-info">
                        <h3 class="founder-name">Suthep Chetthamrongchai</h3>
                        <p class="founder-title">Co-Founder & Civil Engineer</p>
                        <p class="founder-subtitle">Technical Director</p>
                        <div class="founder-achievements">
                            <div class="achievement-item">
                                <span class="achievement-icon">🔧</span>
                                <span class="achievement-text">วิศวกรโยธา</span>
                            </div>
                            <div class="achievement-item">
                                <span class="achievement-icon">🎯</span>
                                <span class="achievement-text">ผู้เชี่ยวชาญ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Commitment Section -->
    <section class="commitment-section" id="commitment">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <span class="badge-icon">🤝</span>
                    <span class="badge-text">คำมั่นสัญญา</span>
                </div>
                <h2 class="section-title">Our Commitment to the Client</h2>
                <p class="section-subtitle">สิ่งที่เรามุ่งมั่นให้กับลูกค้าทุกท่าน</p>
            </div>
            
            <div class="commitment-showcase">
                        <span class="badge-icon">✨</span>
                        <span class="badge-text">มาตรฐานสูงสุด</span>
                    </div>
                </div>
            </div>

            <div class="commitment-grid">
                <div class="commitment-item">
                    <div class="item-icon">
                        <span class="icon-bg"></span>
                        <span class="icon-symbol">🎯</span>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">ความซื่อสัตย์และโปร่งใส</h3>
                        <p class="item-description">ไม่ใช่คนในบริษัทอสังหาริมทรัพย์ออกมารับงานเองหรือตรวจงานโครงการตัวเอง</p>
                    </div>
                </div>

                <div class="commitment-item">
                    <div class="item-icon">
                        <span class="icon-bg"></span>
                        <span class="icon-symbol">🔍</span>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">การตรวจสอบครบถ้วน</h3>
                        <p class="item-description">ตรวจครบทุกฟังก์ชันการใช้งานหลัก ใช้เทคโนโลยีที่ทันสมัยเข้ามาใช้ในการตรวจเพื่อความแม่นยำ</p>
                    </div>
                </div>

                <div class="commitment-item">
                    <div class="item-icon">
                        <span class="icon-bg"></span>
                        <span class="icon-symbol">💼</span>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">อาชีพหลัก ไม่ใช่งานเสริม</h3>
                        <p class="item-description">ตรวจบ้านทุกวันเป็น "อาชีพหลัก ไม่ใช่งานเสริม"</p>
                    </div>
                </div>

                <div class="commitment-item">
                    <div class="item-icon">
                        <span class="icon-bg"></span>
                        <span class="icon-symbol">👨‍🔧</span>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">ช่างผู้เชี่ยวชาญ</h3>
                        <p class="item-description">ตรวจด้วยช่างผู้เชี่ยวชาญงานจริง ไม่ใช้คำว่าวิศวกรมาหากิน</p>
                    </div>
                </div>

                <div class="commitment-item">
                    <div class="item-icon">
                        <span class="icon-bg"></span>
                        <span class="icon-symbol">📋</span>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">คุณภาพ ไม่ใช่ปริมาณ</h3>
                        <p class="item-description">ไม่เน้นล่ารายการดีเฟคเพื่อให้เล่มรายงานดูเยอะ</p>
                    </div>
                </div>

                <div class="commitment-item">
                    <div class="item-icon">
                        <span class="icon-bg"></span>
                        <span class="icon-symbol">🏢</span>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">บริการโดยตรง</h3>
                        <p class="item-description">บริษัทรับงานเองและไม่มีการส่งงานต่อให้ซับกินค่าหัวคิว</p>
                    </div>
                </div>
            </div>

            <div class="motto-section">
                <div class="motto-card">
                    <div class="motto-icon">💫</div>
                    <h3 class="motto-title">คติของเรา</h3>
                    <p class="motto-text">"ตรวจจริง เห็นกับตา ไปพร้อมลูกค้า"</p>
                    <div class="motto-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-dot"></div>
                        <div class="decoration-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">ต.ตรวจบ้าน</div>
                    <p class="footer-description">ผู้นำด้านการตรวจบ้านที่ลูกค้าไว้วางใจมากที่สุด</p>
                </div>
                <div class="footer-links">
                    <div class="link-group">
                        <h4 class="group-title">บริการ</h4>
                        <a href="#" class="footer-link">ตรวจบ้านเดี่ยว</a>
                        <a href="#" class="footer-link">ตรวจคอนโด</a>
                        <a href="#" class="footer-link">ตรวจทาวน์เฮาส์</a>
                    </div>
                    <div class="link-group">
                        <h4 class="group-title">ติดต่อ</h4>
                        <a href="#" class="footer-link">📞 02-xxx-xxxx</a>
                        <a href="#" class="footer-link">📧 info@homeinspection.th</a>
                        <a href="#" class="footer-link">📍 กรุงเทพมหานคร</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 ต.ตรวจบ้าน. สงวนลิขสิทธิ์.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <span class="arrow-up">↑</span>
    </button>

    <script>
                // DOM Elements
        const loadingScreen = document.getElementById("loadingScreen")
        const navbar = document.getElementById("navbar")
        const navToggle = document.getElementById("navToggle")
        const navMenu = document.getElementById("navMenu")
        const backToTop = document.getElementById("backToTop")

        // Loading Screen
        window.addEventListener("load", () => {
        setTimeout(() => {
            loadingScreen.classList.add("hidden")
        }, 1500)
        })

        // Navigation
        let lastScrollTop = 0

        window.addEventListener("scroll", () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop

        // Navbar scroll effect
        if (scrollTop > 100) {
            navbar.classList.add("scrolled")
        } else {
            navbar.classList.remove("scrolled")
        }

        // Back to top button
        if (scrollTop > 500) {
            backToTop.classList.add("visible")
        } else {
            backToTop.classList.remove("visible")
        }

        // Parallax effect for floating elements
        const floatingElements = document.querySelectorAll(".floating-element")
        floatingElements.forEach((element, index) => {
            const speed = Number.parseFloat(element.dataset.speed) || 0.5
            const yPos = -(scrollTop * speed)
            element.style.transform = `translateY(${yPos}px)`
        })

        lastScrollTop = scrollTop
        })

        // Mobile Navigation Toggle
        navToggle.addEventListener("click", () => {
        navToggle.classList.toggle("active")
        navMenu.classList.toggle("active")
        })

        // Close mobile menu when clicking on a link
        document.querySelectorAll(".nav-link").forEach((link) => {
        link.addEventListener("click", () => {
            navToggle.classList.remove("active")
            navMenu.classList.remove("active")
        })
        })

        // Back to Top Button
        backToTop.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        })
        })

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault()
            const target = document.querySelector(this.getAttribute("href"))
            if (target) {
            const offsetTop = target.offsetTop - 80
            window.scrollTo({
                top: offsetTop,
                behavior: "smooth",
            })
            }
        })
        })

        // Active Navigation Link
        window.addEventListener("scroll", () => {
        const sections = document.querySelectorAll("section[id]")
        const navLinks = document.querySelectorAll(".nav-link")

        let current = ""
        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 100
            const sectionHeight = section.clientHeight
            if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
            current = section.getAttribute("id")
            }
        })

        navLinks.forEach((link) => {
            link.classList.remove("active")
            if (link.getAttribute("href") === `#${current}`) {
            link.classList.add("active")
            }
        })
        })

        // Intersection Observer for Animations
        const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
        }

        const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
            entry.target.classList.add("visible")
            }
        })
        }, observerOptions)

        // Observe elements for animations
        document.addEventListener("DOMContentLoaded", () => {
        const animatedElements = document.querySelectorAll(".fade-in, .slide-in-left, .slide-in-right, .scale-in")
        animatedElements.forEach((el) => observer.observe(el))
        })

        // Counter Animation
        function animateCounter(element, target, duration = 2000) {
        let start = 0
        const increment = target / (duration / 16)

        const timer = setInterval(() => {
            start += increment
            if (start >= target) {
            element.textContent = target
            clearInterval(timer)
            } else {
            element.textContent = Math.floor(start)
            }
        }, 16)
        }

        // Animate counters when they come into view
        const counterObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counter = entry.target
                const target = Number.parseInt(counter.dataset.count)
                animateCounter(counter, target)
                counterObserver.unobserve(counter)
            }
            })
        },
        { threshold: 0.5 },
        )

        document.querySelectorAll(".stat-number").forEach((counter) => {
        counterObserver.observe(counter)
        })

        // Tilt Effect for Cards
        document.querySelectorAll("[data-tilt]").forEach((card) => {
        card.addEventListener("mousemove", (e) => {
            const rect = card.getBoundingClientRect()
            const x = e.clientX - rect.left
            const y = e.clientY - rect.top

            const centerX = rect.width / 2
            const centerY = rect.height / 2

            const rotateX = (y - centerY) / 10
            const rotateY = (centerX - x) / 10

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`
        })

        card.addEventListener("mouseleave", () => {
            card.style.transform = "perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)"
        })
        })

        // Particle Effect (Simple version)
        function createParticles() {
        const particlesContainer = document.getElementById("particles-js")
        if (!particlesContainer) return

        for (let i = 0; i < 50; i++) {
            const particle = document.createElement("div")
            particle.className = "particle"
            particle.style.cssText = `
                    position: absolute;
                    width: 2px;
                    height: 2px;
                    background: rgba(255, 255, 255, 0.5);
                    border-radius: 50%;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    animation: float ${3 + Math.random() * 4}s ease-in-out infinite;
                    animation-delay: ${Math.random() * 2}s;
                `
            particlesContainer.appendChild(particle)
        }
        }

        // Initialize particles
        createParticles()

        // Form Validation (if forms are added later)
        function validateForm(form) {
        const inputs = form.querySelectorAll("input[required], textarea[required]")
        let isValid = true

        inputs.forEach((input) => {
            if (!input.value.trim()) {
            input.classList.add("error")
            isValid = false
            } else {
            input.classList.remove("error")
            }
        })

        return isValid
        }

        // Lazy Loading for Images
        const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
            const img = entry.target
            img.src = img.dataset.src
            img.classList.remove("lazy")
            imageObserver.unobserve(img)
            }
        })
        })

        document.querySelectorAll("img[data-src]").forEach((img) => {
        imageObserver.observe(img)
        })

        // Keyboard Navigation
        document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            // Close mobile menu
            navToggle.classList.remove("active")
            navMenu.classList.remove("active")
        }
        })

        // Performance Optimization
        let ticking = false

        function updateOnScroll() {
        // Throttle scroll events
        if (!ticking) {
            requestAnimationFrame(() => {
            // Scroll-dependent updates here
            ticking = false
            })
            ticking = true
        }
        }

        window.addEventListener("scroll", updateOnScroll)

        // Error Handling
        window.addEventListener("error", (e) => {
        console.error("JavaScript Error:", e.error)
        })

        // Service Worker Registration (for PWA capabilities)
        if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
            navigator.serviceWorker
            .register("/sw.js")
            .then((registration) => {
                console.log("SW registered: ", registration)
            })
            .catch((registrationError) => {
                console.log("SW registration failed: ", registrationError)
            })
        })
        }

        // Analytics (placeholder for Google Analytics or similar)
        function trackEvent(action, category, label) {
        if (typeof gtag !== "undefined") {
            gtag("event", action, {
            event_category: category,
            event_label: label,
            })
        }
        }

        // Track button clicks
        document.querySelectorAll(".btn").forEach((btn) => {
        btn.addEventListener("click", () => {
            trackEvent("click", "button", btn.textContent.trim())
        })
        })

        // Accessibility Improvements
        document.addEventListener("DOMContentLoaded", () => {
        // Add skip link
        const skipLink = document.createElement("a")
        skipLink.href = "#main-content"
        skipLink.textContent = "Skip to main content"
        skipLink.className = "skip-link"
        skipLink.style.cssText = `
                position: absolute;
                top: -40px;
                left: 6px;
                background: var(--primary-blue);
                color: white;
                padding: 8px;
                text-decoration: none;
                border-radius: 4px;
                z-index: 10000;
                transition: top 0.3s;
            `

        skipLink.addEventListener("focus", () => {
            skipLink.style.top = "6px"
        })

        skipLink.addEventListener("blur", () => {
            skipLink.style.top = "-40px"
        })

        document.body.insertBefore(skipLink, document.body.firstChild)

        // Add main content landmark
        const mainContent = document.querySelector(".main-content") || document.querySelector("main")
        if (mainContent) {
            mainContent.id = "main-content"
            mainContent.setAttribute("role", "main")
        }
        })

        // Initialize everything when DOM is loaded
        document.addEventListener("DOMContentLoaded", () => {
        console.log("🏠 ต.ตรวจบ้าน website loaded successfully!")

        // Add any additional initialization here
        setTimeout(() => {
            document.body.classList.add("loaded")
        }, 100)
        })



    </script>
@endsection
