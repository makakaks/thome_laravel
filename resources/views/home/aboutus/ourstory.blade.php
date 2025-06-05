@extends('component.layout')

@section('content')
    <link rel="stylesheet" href="/css/home/aboutus/ourstory.css">
    <section class="story-container">
        <!-- Background image and title section -->
        <div class="story-header">
            <img src="/img/ourstoryimage1.png" alt="Building B" class="header-image">
            <h1 class="header-title">OUR STORY</h1>
        </div>

        <!-- Story description section -->
        <section class="story-content">
            <p>
                ต.ตรวจบ้าน เริ่มต้นเมื่อปี 2015 โดยเจ้าของ คุณสุเมธ เจตธำรงชัย และคุณสุเทพ เจตธำรงชัย
                เริ่มจากการที่รับตรวจบ้าน
                และคอนโดให้กับกลุ่มพี่น้องและเพื่อนฝูงคนรู้จักจนได้รับการบอกต่อปากต่อปาก
                จนกระทั่งเป็นที่รู้จักมากขึ้นทำให้ปัจจุบัน ต.ตรวจบ้าน
                เป็นผู้นำด้านการตรวจบ้านอันดับต้นๆ ในประเทศไทยที่ลูกค้าบอกต่อมากที่สุด
            </p>
        </section>
        <section class="vision-mission aos-init" data-aos="fade-up">
            <h2>Our Vision and Mission</h2>
            <div class="head aos-init" data-aos="fade-up">
                <h2>“ผู้นำด้านการตรวจบ้าน”</h2><br>
                <p>บริการตรวจสอบบ้านมือสองของบ้านและคอนโดก่อนโอนกรรมสิทธิ์ดีที่สุด อันดับ 1
                    ที่ลูกค้าเลือกมากที่สุดในประเทศไทย</p>
            </div>
            <div class="values">
                <div class="value aos-init" data-aos="fade-up-right">
                    <img src="/icon/ICON/trusted.png" alt="Trust Icon">
                    <h3>TRUST</h3>
                    <p>การสร้างความเชื่อมั่นด้วยการตรวจสอบที่มีมาตรฐาน</p>
                </div>
                <div class="value aos-init" data-aos="fade-up">
                    <img src="/icon/ICON/future.png" alt="Tech Icon">
                    <h3>TECH</h3>
                    <p>บริการตรวจสอบคุณภาพบ้านโดยใช้เทคโนโลยีใหม่</p>
                </div>
                <div class="value aos-init" data-aos="fade-up-left">
                    <img src="/icon/ICON/group.png" alt="Team Icon">
                    <h3>TEAM</h3>
                    <p>ทีมงานคุณภาพพร้อมให้บริการลูกค้า</p>
                </div>
            </div>
        </section>

        <section class="our-founders aos-init" data-aos="fade-up">
            <h2>Our Founders</h2>
            <div class="founders-container">
                <div class="founder aos-init" data-aos="fade-right">
                    <img src="/img/staff/CEO.jpg" alt="Sumes Chetthamrongchai" class="founder-photo">
                    <h3>Sumes Chetthamrongchai</h3>
                    <p>Founder &amp; Managing Director, NACHI Certified Inspector</p>
                </div>
                <div class="founder aos-init" data-aos="fade-left">
                    <img src="/img/staff/Co-founder.jpg" alt="Suthep Chetthamrongchai" class="founder-photo">
                    <h3>Suthep Chetthamrongchai</h3>
                    <p>Co-Founder &amp; Civil Engineer</p>
                </div>
            </div>
        </section>


        <section class="commitment aos-init" data-aos="fade-up">
            <h2>Our Commitment to the Client</h2>
            <div class="commitment-content">
                <!-- <img src="/icon/ICON/cummit.png" alt="Commitment Image" class="commitment-image" -->
                <!-- data-aos="fade-up-right"> -->
                <ul class="centered-list aos-init" data-aos="fade-up-left">
                    <li>ซื่อสัตย์และโปร่งใส
                        ไม่ใช่คนในบริษัทอสังหาริมทรัพย์ออกมารับงานเองหรือตรวจงานโครงการตัวเอง</li>
                    <li>ตรวจครบทุกฟังก์ชันการใช้งานหลัก ใช้เทคโนโลยีที่ทันสมัยเข้ามาใช้ในการตรวจเพื่อความแม่นยำ
                    </li>
                    <li>ตรวจบ้านทุกวันเป็น "อาชีพหลัก ไม่ใช่งานเสริม"</li>
                    <li>ตรวจด้วยช่างผู้เชี่ยวชาญงานจริง ไม่ใช้คำว่าวิศวกรมาหากิน</li>
                    <li>ไม่เน้นล่ารายการดีเฟคเพื่อให้เล่มรายงานดูเยอะ</li>
                    <li>บริษัทรับงานเองและไม่มีการส่งงานต่อให้ซับกินค่าหัวคิว</li>
                    <li>คติของเรา “ตรวจจริง เห็นกับตา ไปพร้อมลูกค้า”</li>
                </ul>
            </div>
        </section>



        <footer class="footer">
            <div class="footer-container">
                <!-- Left Section: Social Media & Branding -->
                <div class="footer-left">
                    <!-- <h2>HomeInspector</h2> -->
                    <img src="/img/footer_logo.png" alt="HomeInspector Logo" class="footer-logo">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/t.homeinspector/" target="_blank"><img src="/icon/ICON/Fb.png"
                                alt="Facebook"></a>
                        <a href="https://www.instagram.com/t.homeinspector/" target="_blank"><img src="/icon/ICON/IG.png"
                                alt="Instagram"></a>
                        <a href="https://page.line.me/t.home?openQrModal=true" target="_blank"><img
                                src="/icon/ICON/line.png" alt="Line"></a>
                        <a href="https://www.tiktok.com/@thomeinspector" target="_blank"><img src="/icon/ICON/Tiktok.png"
                                alt="TikTok"></a>
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
                        <li><a href="/hinspector">ต.ตรวจบ้าน</a></li>
                        <li><a href="/hinterior">ต.ตงแต่ง</a></li>
                        <li><a href="/hconstruction">ต.เติม</a></li>
                        <li><a href="/hbulter">H.Bulter</a></li>
                        <li><a href="/cal-electric">ตรวจสอบระบบไฟฟ้า</a></li>
                        <li><a href="/app-inspector">ตรวจบ้านเอง</a></li>
                        <li><a href="/checklist">เทียบสเปกบ้าน</a></li>
                    </ul>
                </div>

                <!-- Extra Section: Customer Help -->
                <div class="footer-help">
                    <h2>ช่วยเหลือ <span class="toggle-icon">+</span></h2>
                    <ul>
                        <li><a href="/#faq">คำถามที่พบบ่อย (FAQ)</a></li>
                        <li><a href="/joinwithus">รวมงานกับเรา</a></li>
                        <li><a href="/promotion">โปรโมชั่น</a></li>
                        <li><a href="/contactus">ติดต่อเรา</a></li>
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

    </section>
@endsection
