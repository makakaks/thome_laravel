document.addEventListener('DOMContentLoaded', function() {
    // Tab switching functionality
    const tabs = document.querySelectorAll('.tab');
    const previewTabs = document.querySelectorAll('.preview-tab');
    const inputGroups = document.querySelectorAll('.input-group');
    const previewContents = document.querySelectorAll('.preview-content');
    const previewBtn = document.getElementById('previewBtn');
    const previewSection = document.getElementById('previewSection');
    const faqForm = document.getElementById('faqForm');
    const notification = document.getElementById('notification');

    // Switch between Thai and English input fields
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const lang = this.getAttribute('data-lang');
            const parent = this.closest('.form-section');
            
            // Update active tab
            parent.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Show corresponding input
            parent.querySelectorAll('.input-group').forEach(group => group.classList.remove('active'));
            parent.querySelector(`.${lang}-input`).classList.add('active');
        });
    });

    // Switch between Thai and English preview
    previewTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const preview = this.getAttribute('data-preview');
            
            // Update active tab
            previewTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Show corresponding preview
            previewContents.forEach(content => content.classList.remove('active'));
            document.querySelector(`.${preview}-preview`).classList.add('active');
        });
    });

    // Preview button functionality
    previewBtn.addEventListener('click', function() {
        const thaiQuestion = document.getElementById('faq-title-thai').value || 'คำถามภาษาไทยจะแสดงที่นี่';
        const engQuestion = document.getElementById('faq-title-eng').value || 'English question will appear here';
        const thaiAnswer = document.getElementById('faq-answer-thai').value || 'คำตอบภาษาไทยจะแสดงที่นี่';
        const engAnswer = document.getElementById('faq-answer-eng').value || 'English answer will appear here';
        
        // Update preview content
        document.getElementById('preview-question-thai').textContent = thaiQuestion;
        document.getElementById('preview-question-eng').textContent = engQuestion;
        document.getElementById('preview-answer-thai').textContent = thaiAnswer;
        document.getElementById('preview-answer-eng').textContent = engAnswer;
        
        // Show preview section
        previewSection.style.display = 'block';
        
        // Scroll to preview
        previewSection.scrollIntoView({ behavior: 'smooth' });
    });

    // Form submission
    faqForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate form
        const thaiQuestion = document.getElementById('faq-title-thai').value;
        const thaiAnswer = document.getElementById('faq-answer-thai').value;
        
        if (!thaiQuestion || !thaiAnswer) {
            showNotification('กรุณากรอกคำถามและคำตอบภาษาไทย', 'error');
            return;
        }
        
        // Here you would typically send the data to your backend
        // For demonstration, we'll just show a success message
        
        // Collect form data
        const formData = {
            thai: {
                question: thaiQuestion,
                answer: thaiAnswer
            },
            english: {
                question: document.getElementById('faq-title-eng').value,
                answer: document.getElementById('faq-answer-eng').value
            }
        };
        
        console.log('FAQ Data:', formData);
        
        // Show success notification
        showNotification('บันทึกข้อมูล FAQ สำเร็จ');
        
        // Reset form
        faqForm.reset();
        previewSection.style.display = 'none';
    });

    // Show notification
    function showNotification(message, type = 'success') {
        const notificationMessage = document.getElementById('notification-message');
        notificationMessage.textContent = message;
        
        // Set color based on type
        if (type === 'error') {
            notification.querySelector('.notification-content').style.backgroundColor = 'var(--danger-color)';
        } else {
            notification.querySelector('.notification-content').style.backgroundColor = 'var(--success-color)';
        }
        
        // Show notification
        notification.classList.add('show');
        
        // Hide after 3 seconds
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
    }
});