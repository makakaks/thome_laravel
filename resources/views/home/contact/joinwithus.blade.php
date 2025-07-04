@extends('layouts.layout_home')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us - Thome Inspector</title>
    <!-- EmailJS SDK -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Arial", sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Join Us Section */
        .join-us-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
            min-height: 70vh;
            gap: 60px;
        }

        .join-us-content {
            flex: 1;
            max-width: 500px;
        }

        .join-us-content h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .join-us-content p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .join-us-image {
            flex: 1;
            text-align: center;
        }

        .join-us-image img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Job Listings Section */
        .apply-job {
            background: white;
            padding: 80px 20px;
            text-align: center;
        }

        .apply-job h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .apply-job > p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .job-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .job-listing {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .job-listing:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .job-listing h2 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .job-listing p {
            margin-bottom: 15px;
            color: #666;
            text-align: left;
        }

        .job-listing strong {
            color: #333;
        }

        .apply-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            font-size: 1rem;
        }

        .apply-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        /* Modal Styles */
        .modal {
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

        .modal-content {
            background-color: white;
            margin: 2% auto;
            padding: 40px;
            border-radius: 15px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .close {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            color: #999;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: #333;
        }

        #modalTitle {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-group small {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
            display: block;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 30px;
        }

        .btn-cancel {
            background: #6c757d;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-cancel:hover {
            background: #5a6268;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        /* Loading Spinner */
        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid #ffffff;
            border-top: 2px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-right: 10px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Success Message */
        .success-message {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .success-content {
            background-color: white;
            margin: 15% auto;
            padding: 40px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .success-content h3 {
            color: #28a745;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .success-content p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* Error Message */
        .error-message {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .error-content {
            background-color: white;
            margin: 15% auto;
            padding: 40px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .error-content h3 {
            color: #dc3545;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .error-content p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .join-us-container {
                flex-direction: column;
                text-align: center;
                padding: 40px 20px;
                gap: 40px;
            }

            .join-us-content h1 {
                font-size: 2.5rem;
            }

            .job-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .modal-content {
                margin: 5% auto;
                padding: 30px 20px;
                width: 95%;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn-cancel,
            .btn-submit {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .join-us-content h1 {
                font-size: 2rem;
            }

            .apply-job h1 {
                font-size: 2rem;
            }

            .job-listing {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Join Us Section -->
    <div class="join-us-container">
        <div class="join-us-content">
            <h1>JOIN US !</h1>
            <p>
                Join us to be a part of the professional consulting team, providing extraordinary
                level of expertise on services and solutions of the ever growing industry.
            </p>
            <a href="mailto:ananthaxb@gmail.com" class="btn">Join Us</a>
        </div>

        <div class="join-us-image">
            <img src="/img/joinwithus2.png" alt="Join Us Illustration">
        </div>
    </div>

    <!-- Job Listings Section -->
    <div class="apply-job">
        <h1>We're Hiring!</h1>
        <p>Join our team and grow your career with us. Check out our latest job openings below</p>

        <div class="job-container">
            <div class="job-listing">
                <h2>Admin</h2>
                <p><strong>Location:</strong> Office</p>
                <p><strong>Requirements:</strong> Experience with office management, scheduling, and communication skills.</p>
                <button class="apply-btn" onclick="openJobModal('admin')">Apply Now</button>
            </div>

            <div class="job-listing">
                <h2>Civil Engineer</h2>
                <p><strong>Location:</strong> On-site</p>
                <p><strong>Requirements:</strong> Experience with structural analysis, CAD software, and construction management.</p>
                <button class="apply-btn" onclick="openJobModal('civil-engineer')">Apply Now</button>
            </div>
        </div>
    </div>

    <!-- Job Application Modal -->
    <div id="jobModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeJobModal()">&times;</span>
            <h2 id="modalTitle">Apply for Position</h2>

            <form id="jobApplicationForm">
                <div class="form-group">
                    <label for="fullName">ชื่อ-นามสกุล / Full Name *</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>

                <div class="form-group">
                    <label for="email">อีเมล / Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">เบอร์โทรศัพท์ / Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="position">ตำแหน่งที่สมัคร / Position Applied For *</label>
                    <input type="text" id="position" name="position" readonly>
                </div>

                <div class="form-group">
                    <label for="experience">ประสบการณ์ทำงาน / Years of Experience</label>
                    <select id="experience" name="experience">
                        <option value="">เลือกประสบการณ์ / Select experience</option>
                        <option value="0-1">0-1 ปี / years</option>
                        <option value="1-3">1-3 ปี / years</option>
                        <option value="3-5">3-5 ปี / years</option>
                        <option value="5-10">5-10 ปี / years</option>
                        <option value="10+">มากกว่า 10 ปี / 10+ years</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="education">ระดับการศึกษา / Education Level</label>
                    <select id="education" name="education">
                        <option value="">เลือกระดับการศึกษา / Select education</option>
                        <option value="high-school">มัธยมศึกษา / High School</option>
                        <option value="diploma">ประกาศนียบัตร / Diploma</option>
                        <option value="bachelor">ปริญญาตรี / Bachelor's Degree</option>
                        <option value="master">ปริญญาโท / Master's Degree</option>
                        <option value="phd">ปริญญาเอก / PhD</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="coverLetter">จดหมายสมัครงาน / Cover Letter</label>
                    <textarea id="coverLetter" name="coverLetter" rows="5" placeholder="เล่าเกี่ยวกับตัวคุณและเหตุผลที่สนใจตำแหน่งนี้... / Tell us about yourself and why you're interested in this position..."></textarea>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="closeJobModal()">ยกเลิก / Cancel</button>
                    <button type="submit" class="btn-submit" id="submitBtn">
                        <span class="loading-spinner" id="loadingSpinner"></span>
                        <span id="submitText">ส่งใบสมัคร / Submit Application</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Message -->
    <div id="successMessage" class="success-message">
        <div class="success-content">
            <h3>ส่งใบสมัครเรียบร้อยแล้ว! / Application Submitted Successfully!</h3>
            <p>ขอบคุณที่สนใจ เราจะตรวจสอบใบสมัครของคุณและติดต่อกลับโดยเร็ว / Thank you for your interest. We will review your application and get back to you soon.</p>
            <button onclick="closeSuccessMessage()" class="btn">ปิด / Close</button>
        </div>
    </div>

    <!-- Error Message -->
    <div id="errorMessage" class="error-message">
        <div class="error-content">
            <h3>เกิดข้อผิดพลาด / Error Occurred</h3>
            <p id="errorText">เกิดข้อผิดพลาดในการส่งใบสมัคร กรุณาลองใหม่อีกครั้ง / There was an error submitting your application. Please try again.</p>
            <button onclick="closeErrorMessage()" class="btn">ปิด / Close</button>
        </div>
    </div>

    <script>
        // Initialize EmailJS
        (function() {
            // Replace 'YOUR_PUBLIC_KEY' with your actual EmailJS public key
            emailjs.init('rJoednBWRySd43PyI');
        })();

        // Job positions data
        const jobPositions = {
            admin: {
                title: "ตำแหน่งแอดมิน / Admin Position",
                position: "Admin",
            },
            "civil-engineer": {
                title: "ตำแหน่งวิศวกรโยธา / Civil Engineer Position",
                position: "Civil Engineer",
            },
        }

        // Open job application modal
        function openJobModal(jobType) {
            const modal = document.getElementById("jobModal")
            const modalTitle = document.getElementById("modalTitle")
            const positionInput = document.getElementById("position")

            const jobData = jobPositions[jobType]

            modalTitle.textContent = `สมัครงาน ${jobData.title} / Apply for ${jobData.title}`
            positionInput.value = jobData.position

            modal.style.display = "block"
            document.body.style.overflow = "hidden"
        }

        // Close job application modal
        function closeJobModal() {
            const modal = document.getElementById("jobModal")
            modal.style.display = "none"
            document.body.style.overflow = "auto"

            // Reset form
            document.getElementById("jobApplicationForm").reset()
            resetSubmitButton()
        }

        // Close success message
        function closeSuccessMessage() {
            const successMessage = document.getElementById("successMessage")
            successMessage.style.display = "none"
            document.body.style.overflow = "auto"
        }

        // Close error message
        function closeErrorMessage() {
            const errorMessage = document.getElementById("errorMessage")
            errorMessage.style.display = "none"
            document.body.style.overflow = "auto"
        }

        // Show loading state
        function showLoading() {
            const submitBtn = document.getElementById("submitBtn")
            const loadingSpinner = document.getElementById("loadingSpinner")
            const submitText = document.getElementById("submitText")

            submitBtn.disabled = true
            loadingSpinner.style.display = "inline-block"
            submitText.textContent = "กำลังส่ง... / Sending..."
        }

        // Reset submit button
        function resetSubmitButton() {
            const submitBtn = document.getElementById("submitBtn")
            const loadingSpinner = document.getElementById("loadingSpinner")
            const submitText = document.getElementById("submitText")

            submitBtn.disabled = false
            loadingSpinner.style.display = "none"
            submitText.textContent = "ส่งใบสมัคร / Submit Application"
        }

        // Show error message
        function showError(message) {
            const errorMessage = document.getElementById("errorMessage")
            const errorText = document.getElementById("errorText")

            errorText.textContent = message
            errorMessage.style.display = "block"
        }

        // Handle form submission
        document.getElementById("jobApplicationForm").addEventListener("submit", function (e) {
            e.preventDefault()

            // Get form data
            const formData = new FormData(this)
            const data = {}

            for (const [key, value] of formData.entries()) {
                data[key] = value
            }

            // Validate required fields
            const requiredFields = ["fullName", "email", "phone", "position"]
            let isValid = true

            requiredFields.forEach((field) => {
                const input = document.getElementById(field)
                if (!data[field] || data[field].trim() === "") {
                    input.style.borderColor = "#dc3545"
                    isValid = false
                } else {
                    input.style.borderColor = "#e9ecef"
                }
            })

            if (!isValid) {
                showError("กรุณากรอกข้อมูลให้ครบถ้วน / Please fill in all required fields.")
                return
            }

            // Validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
            if (!emailRegex.test(data.email)) {
                document.getElementById("email").style.borderColor = "#dc3545"
                showError("กรุณากรอกอีเมลให้ถูกต้อง / Please enter a valid email address.")
                return
            }

            // Show loading state
            showLoading()

            // Prepare email template parameters
            const templateParams = {
                to_email: 'ananthaxb@gmail.com',
                from_name: data.fullName,
                from_email: data.email,
                phone: data.phone,
                position: data.position,
                experience: data.experience || 'ไม่ระบุ / Not specified',
                education: data.education || 'ไม่ระบุ / Not specified',
                cover_letter: data.coverLetter || 'ไม่มีจดหมายสมัครงาน / No cover letter provided',
                subject: `ใบสมัครงาน: ${data.position} - ${data.fullName}`,
                message: `
รายละเอียดผู้สมัคร / APPLICANT DETAILS:
- ชื่อ-นามสกุล / Full Name: ${data.fullName}
- อีเมล / Email: ${data.email}
- เบอร์โทรศัพท์ / Phone: ${data.phone}
- ตำแหน่งที่สมัคร / Position Applied: ${data.position}
- ประสบการณ์ทำงาน / Years of Experience: ${data.experience || 'ไม่ระบุ / Not specified'}
- ระดับการศึกษา / Education Level: ${data.education || 'ไม่ระบุ / Not specified'}

จดหมายสมัครงาน / COVER LETTER:
${data.coverLetter || 'ไม่มีจดหมายสมัครงาน / No cover letter provided'}

กรุณาติดต่อผู้สมัครที่ ${data.email} หรือ ${data.phone} เพื่อการติดต่อเพิ่มเติม
Please contact the applicant at ${data.email} or ${data.phone} for further communication.
                `.trim()
            }

            // Send email using EmailJS
            emailjs.send('Thome', 'template_shjqlbp', templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    resetSubmitButton()
                    closeJobModal()
                    document.getElementById("successMessage").style.display = "block"
                }, function(error) {
                    console.log('FAILED...', error);
                    resetSubmitButton()
                    showError(`เกิดข้อผิดพลาดในการส่งอีเมล: ${error.text || error.message || 'Unknown error'} / Email sending failed: ${error.text || error.message || 'Unknown error'}`)
                });
        })

        // Close modal when clicking outside
        window.addEventListener("click", (event) => {
            const modal = document.getElementById("jobModal")
            const successMessage = document.getElementById("successMessage")
            const errorMessage = document.getElementById("errorMessage")

            if (event.target === modal) {
                closeJobModal()
            }

            if (event.target === successMessage) {
                closeSuccessMessage()
            }

            if (event.target === errorMessage) {
                closeErrorMessage()
            }
        })

        // Handle escape key
        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape") {
                const modal = document.getElementById("jobModal")
                const successMessage = document.getElementById("successMessage")
                const errorMessage = document.getElementById("errorMessage")

                if (modal.style.display === "block") {
                    closeJobModal()
                }

                if (successMessage.style.display === "block") {
                    closeSuccessMessage()
                }

                if (errorMessage.style.display === "block") {
                    closeErrorMessage()
                }
            }
        })

        // Form validation on input
        document.addEventListener("DOMContentLoaded", () => {
            const inputs = document.querySelectorAll("input[required], select[required]")

            inputs.forEach((input) => {
                input.addEventListener("blur", function () {
                    if (this.value.trim() === "") {
                        this.style.borderColor = "#dc3545"
                    } else {
                        this.style.borderColor = "#e9ecef"
                    }
                })

                input.addEventListener("input", function () {
                    if (this.value.trim() !== "") {
                        this.style.borderColor = "#e9ecef"
                    }
                })
            })
        })
    </script>
</body>
</html>
@endsection
