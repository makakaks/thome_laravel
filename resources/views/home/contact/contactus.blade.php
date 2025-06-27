@extends('component.layout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <link rel="stylesheet" href="/css/page/contact-styles.css">
    <!-- EmailJS SDK -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <style>
        /* Additional styles for loading and messages */
        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .loading-spinner {
            display: none;
            width: 16px;
            height: 16px;
            border: 2px solid #ffffff;
            border-top: 2px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-right: 8px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .message-overlay {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .message-content {
            background-color: white;
            margin: 15% auto;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .message-content h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .message-content p {
            margin-bottom: 20px;
            line-height: 1.6;
            color: #666;
        }

        .success-content h3 {
            color: #28a745;
        }

        .error-content h3 {
            color: #dc3545;
        }

        .message-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .message-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .form-error {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 2px rgba(220, 53, 69, 0.2) !important;
        }

        .error-text {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 5px;
            display: none;
        }
    </style>

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
                            <input type="text" id="name" name="name" placeholder="กรุณากรอกชื่อ-นามสกุล" required>
                            <div class="error-text" id="name-error">กรุณากรอกชื่อ-นามสกุล</div>
                        </div>
                        <div class="form-group">
                            <label for="email">อีเมล</label>
                            <input type="email" id="email" name="email" placeholder="กรุณากรอกอีเมล" required>
                            <div class="error-text" id="email-error">กรุณากรอกอีเมลให้ถูกต้อง</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="tel" id="phone" name="phone" placeholder="กรุณากรอกเบอร์โทรศัพท์" required>
                            <div class="error-text" id="phone-error">กรุณากรอกเบอร์โทรศัพท์</div>
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
                            <div class="error-text" id="subject-error">กรุณาเลือกหัวข้อ</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">ข้อความ</label>
                        <textarea id="message" name="message" placeholder="กรุณากรอกข้อความ" rows="5" required></textarea>
                        <div class="error-text" id="message-error">กรุณากรอกข้อความ</div>
                    </div>
                    <div class="form-group form-checkbox">
                        <input type="checkbox" id="privacy" name="privacy" required>
                        <label for="privacy">ฉันยอมรับ<a href="#" class="privacy-link">นโยบายความเป็นส่วนตัว</a>และยินยอมให้เก็บข้อมูลของฉัน</label>
                        <div class="error-text" id="privacy-error">กรุณายอมรับนโยบายความเป็นส่วนตัว</div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit-btn">
                        <span class="loading-spinner" id="loading-spinner"></span>
                        <span id="submit-text">ส่งข้อความ</span>
                    </button>
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
                            <p>จันทร์ - ศุกร์: 8:00 - 17:00 น.</p>
                            <p>เสาร์ - อาทิตย์: ปิดทำการ</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="info">
                            <h3>ฝ่ายบริการลูกค้า</h3>
                            <p>โทร: 02-454-2043</p>
                            <p>อีเมล: admin@thomeinspector.com</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="info">
                            <h3>ฝ่ายธุรกิจ</h3>
                            <p>โทร: 082-045-6165</p>
                            <p>อีเมล: admin@thomeinspector.com</p>
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.3826632348396!2d100.41160407586447!3d13.695258498598543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bd6191c4dc0f%3A0x525332376dd66d01!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4lS7guIjguKPguLHguKrguIjguLHguKIg4Liq4Liy4LiB4Lil4LiB4LmI4Lit4Liq4Lij4LmJ4Liy4LiH4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1750735370996!5m2!1sth!2sth"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="map-info">
                <div class="map-info-item">
                    <i class="fas fa-subway"></i>
                    <p>MRT บางแค - ทางออก 3 (เดินทาง 5 นาที)</p>
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

    <!-- Success Message -->
    <div id="success-message" class="message-overlay">
        <div class="message-content success-content">
            <h3>ส่งข้อความเรียบร้อยแล้ว!</h3>
            <p>ขอบคุณที่ติดต่อเรา เราจะตอบกลับภายใน 24 ชั่วโมง</p>
            <button onclick="closeSuccessMessage()" class="message-btn">ปิด</button>
        </div>
    </div>

    <!-- Error Message -->
    <div id="error-message" class="message-overlay">
        <div class="message-content error-content">
            <h3>เกิดข้อผิดพลาด</h3>
            <p id="error-text">เกิดข้อผิดพลาดในการส่งข้อความ กรุณาลองใหม่อีกครั้ง</p>
            <button onclick="closeErrorMessage()" class="message-btn">ปิด</button>
        </div>
    </div>

    </main>

    <script>
        // Initialize EmailJS
        (function() {
            // Replace 'YOUR_PUBLIC_KEY' with your actual EmailJS public key
            emailjs.init('rJoednBWRySd43PyI');
        })();

        // Subject mapping for Thai to English
        const subjectMapping = {
            'general': 'สอบถามข้อมูลทั่วไป / General Inquiry',
            'service': 'สอบถามบริการ / Service Inquiry', 
            'quote': 'ขอใบเสนอราคา / Quote Request',
            'partnership': 'ความร่วมมือทางธุรกิจ / Business Partnership',
            'other': 'อื่นๆ / Other'
        };

        // Form validation functions
        function validateField(fieldId, errorId, customValidator = null) {
            const field = document.getElementById(fieldId);
            const errorElement = document.getElementById(errorId);
            let isValid = true;

            if (customValidator) {
                isValid = customValidator(field.value);
            } else {
                isValid = field.value.trim() !== '';
            }

            if (!isValid) {
                field.classList.add('form-error');
                errorElement.style.display = 'block';
            } else {
                field.classList.remove('form-error');
                errorElement.style.display = 'none';
            }

            return isValid;
        }

        function validateEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function validateForm() {
            let isValid = true;

            // Validate name
            isValid = validateField('name', 'name-error') && isValid;

            // Validate email
            isValid = validateField('email', 'email-error', validateEmail) && isValid;

            // Validate phone
            isValid = validateField('phone', 'phone-error') && isValid;

            // Validate subject
            isValid = validateField('subject', 'subject-error') && isValid;

            // Validate message
            isValid = validateField('message', 'message-error') && isValid;

            // Validate privacy checkbox
            const privacyCheckbox = document.getElementById('privacy');
            const privacyError = document.getElementById('privacy-error');
            if (!privacyCheckbox.checked) {
                privacyError.style.display = 'block';
                isValid = false;
            } else {
                privacyError.style.display = 'none';
            }

            return isValid;
        }

        // Show loading state
        function showLoading() {
            const submitBtn = document.getElementById('submit-btn');
            const loadingSpinner = document.getElementById('loading-spinner');
            const submitText = document.getElementById('submit-text');
            
            submitBtn.disabled = true;
            loadingSpinner.style.display = 'inline-block';
            submitText.textContent = 'กำลังส่ง...';
        }

        // Reset submit button
        function resetSubmitButton() {
            const submitBtn = document.getElementById('submit-btn');
            const loadingSpinner = document.getElementById('loading-spinner');
            const submitText = document.getElementById('submit-text');
            
            submitBtn.disabled = false;
            loadingSpinner.style.display = 'none';
            submitText.textContent = 'ส่งข้อความ';
        }

        // Show success message
        function showSuccessMessage() {
            document.getElementById('success-message').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        // Close success message
        function closeSuccessMessage() {
            document.getElementById('success-message').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Show error message
        function showErrorMessage(message) {
            document.getElementById('error-text').textContent = message;
            document.getElementById('error-message').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        // Close error message
        function closeErrorMessage() {
            document.getElementById('error-message').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Handle form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate form
            if (!validateForm()) {
                return;
            }

            // Show loading state
            showLoading();

            // Get form data
            const formData = new FormData(this);
            const data = {};
            for (const [key, value] of formData.entries()) {
                data[key] = value;
            }

            // Prepare email template parameters
            const templateParams = {
                to_email: 'ananthaxb@gmail.com',
                from_name: data.name,
                from_email: data.email,
                phone: data.phone,
                subject_type: subjectMapping[data.subject] || data.subject,
                message: data.message,
                subject: `ข้อความจากเว็บไซต์: ${subjectMapping[data.subject] || data.subject} - ${data.name}`,
                full_message: `
รายละเอียดผู้ติดต่อ / CONTACT DETAILS:
- ชื่อ-นามสกุล / Full Name: ${data.name}
- อีเมล / Email: ${data.email}
- เบอร์โทรศัพท์ / Phone: ${data.phone}
- หัวข้อ / Subject: ${subjectMapping[data.subject] || data.subject}

ข้อความ / MESSAGE:
${data.message}

กรุณาติดต่อกลับที่ ${data.email} หรือ ${data.phone}
Please contact back at ${data.email} or ${data.phone}
                `.trim()
            };

            // Send email using EmailJS
            emailjs.send('Thome', 'template_shjqlbp', templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    resetSubmitButton();
                    showSuccessMessage();
                    // Reset form
                    document.getElementById('contact-form').reset();
                    // Clear any error states
                    document.querySelectorAll('.form-error').forEach(el => el.classList.remove('form-error'));
                    document.querySelectorAll('.error-text').forEach(el => el.style.display = 'none');
                }, function(error) {
                    console.log('FAILED...', error);
                    resetSubmitButton();
                    showErrorMessage(`เกิดข้อผิดพลาดในการส่งอีเมล: ${error.text || error.message || 'Unknown error'}`);
                });
        });

        // Real-time validation
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listeners for real-time validation
            document.getElementById('name').addEventListener('blur', function() {
                validateField('name', 'name-error');
            });

            document.getElementById('email').addEventListener('blur', function() {
                validateField('email', 'email-error', validateEmail);
            });

            document.getElementById('phone').addEventListener('blur', function() {
                validateField('phone', 'phone-error');
            });

            document.getElementById('subject').addEventListener('change', function() {
                validateField('subject', 'subject-error');
            });

            document.getElementById('message').addEventListener('blur', function() {
                validateField('message', 'message-error');
            });

            document.getElementById('privacy').addEventListener('change', function() {
                const privacyError = document.getElementById('privacy-error');
                if (this.checked) {
                    privacyError.style.display = 'none';
                }
            });

            // Clear error states on input
            document.querySelectorAll('input, select, textarea').forEach(function(element) {
                element.addEventListener('input', function() {
                    if (this.classList.contains('form-error')) {
                        this.classList.remove('form-error');
                        const errorId = this.id + '-error';
                        const errorElement = document.getElementById(errorId);
                        if (errorElement) {
                            errorElement.style.display = 'none';
                        }
                    }
                });
            });
        });

        // Close modals when clicking outside
        window.addEventListener('click', function(event) {
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');

            if (event.target === successMessage) {
                closeSuccessMessage();
            }

            if (event.target === errorMessage) {
                closeErrorMessage();
            }
        });

        // Handle escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const successMessage = document.getElementById('success-message');
                const errorMessage = document.getElementById('error-message');

                if (successMessage.style.display === 'block') {
                    closeSuccessMessage();
                }

                if (errorMessage.style.display === 'block') {
                    closeErrorMessage();
                }
            }
        });
    </script>

    <!-- Keep your original script if needed for other functionality -->
    <!-- <script src="/js/page/contact-script.js"></script> -->
@endsection