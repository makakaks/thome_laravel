document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const form = document.getElementById('passwordChangeForm');
    const currentPasswordInput = document.getElementById('currentPassword');
    const newPasswordInput = document.getElementById('newPassword');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const togglePasswordButtons = document.querySelectorAll('.toggle-password');
    const cancelBtn = document.getElementById('cancelBtn');
    const submitBtn = document.getElementById('submitBtn');
    const successModal = document.getElementById('successModal');
    const errorModal = document.getElementById('errorModal');
    const modalOverlay = document.getElementById('modalOverlay');
    const successCloseBtn = document.getElementById('successCloseBtn');
    const errorCloseBtn = document.getElementById('errorCloseBtn');
    const errorMessage = document.getElementById('errorMessage');
    
    // Error message elements
    const currentPasswordError = document.getElementById('currentPasswordError');
    const newPasswordError = document.getElementById('newPasswordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');
    
    // Password requirement elements
    const lengthRequirement = document.getElementById('length');
    const uppercaseRequirement = document.getElementById('uppercase');
    const lowercaseRequirement = document.getElementById('lowercase');
    const numberRequirement = document.getElementById('number');
    const specialRequirement = document.getElementById('special');
    
    // For demo purposes - the "current" password
    const demoCurrentPassword = "Admin123!";
    
    // Toggle password visibility
    togglePasswordButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetInput = document.getElementById(targetId);
            const eyeIcon = this.querySelector('.eye-icon');
            const eyeOffIcon = this.querySelector('.eye-off-icon');
            
            if (targetInput.type === 'password') {
                targetInput.type = 'text';
                eyeIcon.classList.add('hidden');
                eyeOffIcon.classList.remove('hidden');
            } else {
                targetInput.type = 'password';
                eyeIcon.classList.remove('hidden');
                eyeOffIcon.classList.add('hidden');
            }
        });
    });
    
    // Check password strength and update requirements
    newPasswordInput.addEventListener('input', function() {
        const password = this.value;
        const strength = checkPasswordStrength(password);
        updatePasswordRequirements(password);
    });
    
    // Check if passwords match
    confirmPasswordInput.addEventListener('input', function() {
        if (newPasswordInput.value !== this.value) {
            confirmPasswordError.textContent = "Passwords do not match";
        } else {
            confirmPasswordError.textContent = "";
        }
    });
    
    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset error messages
        currentPasswordError.textContent = "";
        newPasswordError.textContent = "";
        confirmPasswordError.textContent = "";
        
        // Get values
        const currentPassword = currentPasswordInput.value;
        const newPassword = newPasswordInput.value;
        const confirmPassword = confirmPasswordInput.value;
        
        // Validate current password (for demo purposes)
        if (currentPassword !== demoCurrentPassword) {
            currentPasswordError.textContent = "Current password is incorrect";
            return;
        }
        
        // Validate new password
        const strength = checkPasswordStrength(newPassword);
        if (strength.score < 2) {
            newPasswordError.textContent = "Password is too weak";
            return;
        }
        
        // Validate password match
        if (newPassword !== confirmPassword) {
            confirmPasswordError.textContent = "Passwords do not match";
            return;
        }
        
        // If all validations pass, show success modal
        showModal(successModal);
        
        // Reset form
        form.reset();
        resetPasswordRequirements();
    });
    
    // Cancel button
    // cancelBtn.addEventListener('click', function() {
    //     // For demo purposes, just reset the form
    //     form.reset();
    //     resetPasswordRequirements();
        
    //     // Clear error messages
    //     currentPasswordError.textContent = "";
    //     newPasswordError.textContent = "";
    //     confirmPasswordError.textContent = "";
    // });
    
    // Modal close buttons
    successCloseBtn.addEventListener('click', function() {
        hideModal(successModal);
    });
    
    errorCloseBtn.addEventListener('click', function() {
        hideModal(errorModal);
    });
    
    // Close modal when clicking on overlay
    modalOverlay.addEventListener('click', function() {
        hideModal(successModal);
        hideModal(errorModal);
    });
    
    // Password strength checker
    function checkPasswordStrength(password) {
        let score = 0;
        const results = {
            hasLength: password.length >= 8,
            hasUppercase: /[A-Z]/.test(password),
            hasLowercase: /[a-z]/.test(password),
            hasNumber: /[0-9]/.test(password),
            hasSpecial: /[^A-Za-z0-9]/.test(password),
            score: 0
        };
        
        // Calculate score
        if (results.hasLength) score++;
        if (results.hasUppercase) score++;
        if (results.hasLowercase) score++;
        if (results.hasNumber) score++;
        if (results.hasSpecial) score++;
        
        results.score = score;
        
        return results;
    }
    
    // Update password requirements
    function updatePasswordRequirements(password) {
        const strength = checkPasswordStrength(password);
        
        // Update requirement indicators
        lengthRequirement.className = strength.hasLength ? "valid" : "";
        uppercaseRequirement.className = strength.hasUppercase ? "valid" : "";
        lowercaseRequirement.className = strength.hasLowercase ? "valid" : "";
        numberRequirement.className = strength.hasNumber ? "valid" : "";
        specialRequirement.className = strength.hasSpecial ? "valid" : "";
    }
    
    // Reset password requirements
    function resetPasswordRequirements() {
        lengthRequirement.className = "";
        uppercaseRequirement.className = "";
        lowercaseRequirement.className = "";
        numberRequirement.className = "";
        specialRequirement.className = "";
    }
    
    // Show modal
    function showModal(modal) {
        modalOverlay.style.display = "block";
        modal.style.display = "block";
    }
    
    // Hide modal
    function hideModal(modal) {
        modalOverlay.style.display = "none";
        modal.style.display = "none";
    }
});