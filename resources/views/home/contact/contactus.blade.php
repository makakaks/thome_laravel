@extends('layouts.layout_home')

@section('content')
    <!DOCTYPE html>
    <html lang="en">


    <link rel="stylesheet" href="/css/page/contact-styles.css">

    <section class="contact-form-section">
        <div class="contact-container">
            <div class="form-container">
                <div class="form-header">
                    <h2>ส่งข้อความถึงเรา</h2>
                    <p>กรอกแบบฟอร์มด้านล่างเพื่อติดต่อทีมงานของเรา เราจะติดต่อกลับภายใน 24 ชั่วโมง</p>
                </div>
                <form id="contact-form" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">ชื่อ-นามสกุล</label>
                            <input type="text" id="name" name="name" placeholder="กรุณากรอกชื่อ-นามสกุล"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">อีเมล</label>
                            <input type="email" id="email" name="email" placeholder="กรุณากรอกอีเมล" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="tel" id="phone" name="phone" placeholder="กรุณากรอกเบอร์โทรศัพท์"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="subject">หัวข้อ</label>
                            <select id="subject" name="subject" required>
                                <option value="" disabled selected>เลือกหัวข้อ</option>
                                <option value="general">สอบถามข้อมูลทั่วไป</option>
                                <option value="service">สอบถามบริการ</option>
                                <option value="quote">ขอใบเสนอราคา</option>
                                <option value="partnership">ความร่วมมือทางธุรกิจ</option>
                                <option value="other">อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">ข้อความ</label>
                        <textarea id="message" name="message" placeholder="กรุณากรอกข้อความ" rows="5" required></textarea>
                    </div>
                    <div class="form-group form-checkbox">
                        <input type="checkbox" id="privacy" name="privacy" required>
                        <label for="privacy">ฉันยอมรับ<a href="#"
                                class="privacy-link">นโยบายความเป็นส่วนตัว</a>และยินยอมให้เก็บข้อมูลของฉัน</label>
                    </div>
                    <button type="submit" class="btn btn-primary">ส่งข้อความ</button>
                </form>
            </div>
            <div class="contact-info-container">
                <div class="contact-info-content">
                    <h2>ช่องทางการติดต่ออื่นๆ</h2>
                    <p>นอกจากแบบฟอร์มติดต่อ คุณสามารถติดต่อเราผ่านช่องทางต่อไปนี้</p>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info">
                            <h3>เวลาทำการ</h3>
                            <p>จันทร์ - ศุกร์: 9:00 - 18:00 น.</p>
                            <p>เสาร์: 10:00 - 15:00 น.</p>
                            <p>อาทิตย์: ปิดทำการ</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="info">
                            <h3>ฝ่ายบริการลูกค้า</h3>
                            <p>โทร: +66 (0) 2-555-7891</p>
                            <p>อีเมล: support@elitebutler.com</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="info">
                            <h3>ฝ่ายธุรกิจ</h3>
                            <p>โทร: +66 (0) 2-555-7892</p>
                            <p>อีเมล: business@elitebutler.com</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <h3>ติดตามเรา</h3>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="map-container">
            <h2>ตำแหน่งที่ตั้ง</h2>
            <div class="map-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.9568263553!2d100.53872807495875!3d13.722476186959428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f01858d150f%3A0xf0100b33d0bef400!2sSathorn%20Square!5e0!3m2!1sen!2sth!4v1684394865680!5m2!1sen!2sth"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="map-info">
                <div class="map-info-item">
                    <i class="fas fa-subway"></i>
                    <p>BTS สถานีช่องนนทรี - ทางออก 3 (เดิน 5 นาที)</p>
                </div>
                <div class="map-info-item">
                    <i class="fas fa-car"></i>
                    <p>มีที่จอดรถสำหรับลูกค้า (กรุณาแจ้งล่วงหน้า)</p>
                </div>
                <div class="map-info-item">
                    <i class="fas fa-info-circle"></i>
                    <p>กรุณานัดหมายล่วงหน้าก่อนเข้าพบ</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-container">
            <h2>พร้อมยกระดับการใช้ชีวิตของคุณ?</h2>
            <p>ติดต่อเราวันนี้เพื่อปรึกษาเกี่ยวกับบริการเกี่ยวกับบ้านแบบครบวงจร</p>
            <div class="cta-buttons">
                <a href="tel:+66025557890" class="btn btn-secondary"><i class="fas fa-phone-alt"></i>
                    โทรหาเรา</a>
                <a href="#contact-form" class="btn btn-primary"><i class="fas fa-envelope"></i> ส่งข้อความ</a>
            </div>
        </div>
    </section>
    </main>

    <script src="/js/page/contact-script.js"></script>
@endsection
