@extends('component.layout_admin')

@section('content')
    <link rel="stylesheet" href="/css/admin/change_password.css">
    <div class="container">
        <div class="card-header">
            <h1>เปลี่ยนรหัสผ่าน</h1>
        </div>

        <form id="passwordChangeForm" class="row d-flex justify-content-around align-items-start">
            <div class="col-6">
                <div class="form-group">
                    <label for="currentPassword">รหัสผ่านปัจจุบัน</label>
                    <div class="password-input-container">
                        <input type="password" id="currentPassword" name="currentPassword" required>
                        <button type="button" class="toggle-password" data-target="currentPassword">
                            <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="eye-off-icon hidden" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                </path>
                                <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line x1="2" x2="22" y1="2" y2="22"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="error-message" id="currentPasswordError"></div>
                </div>

                <div class="form-group">
                    <label for="newPassword">รหัสผ่านใหม่</label>
                    <div class="password-input-container">
                        <input type="password" id="newPassword" name="newPassword" required>
                        <button type="button" class="toggle-password" data-target="newPassword">
                            <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="eye-off-icon hidden" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                </path>
                                <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line x1="2" x2="22" y1="2" y2="22"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="error-message" id="newPasswordError"></div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">ยืนยันรหัสผ่าน</label>
                    <div class="password-input-container">
                        <input type="password" id="confirmPassword" name="confirmPassword" required>
                        <button type="button" class="toggle-password" data-target="confirmPassword">
                            <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="eye-off-icon hidden" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                </path>
                                <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line x1="2" x2="22" y1="2" y2="22"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="error-message" id="confirmPasswordError"></div>
                </div>
            </div>


            <div class="password-requirements col-5">
                <h3>Password Requirements:</h3>
                <ul>
                    <li id="length">At least 8 characters long</li>
                    <li id="uppercase">Contains uppercase letter</li>
                    <li id="lowercase">Contains lowercase letter</li>
                    <li id="number">Contains a number</li>
                    <li id="special">Contains a special character</li>
                </ul>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary" id="submitBtn">Update Password</button>
            </div>
        </form>

        <!-- Success Modal -->
        <div class="modal" id="successModal" style="height: fit-content;">
            <div class="modal-content">
                <div class="modal-icon success">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <h2>Password Updated Successfully</h2>
                <p>Your password has been changed. You'll use your new password the next time you sign in.</p>
                <button class="btn btn-primary" id="successCloseBtn">Close</button>
            </div>
        </div>

        <!-- Error Modal -->
        <div class="modal" id="errorModal">
            <div class="modal-content">
                <div class="modal-icon error">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>
                <h2>Error</h2>
                <p id="errorMessage">There was a problem updating your password. Please try again.</p>
                <button class="btn btn-primary" id="errorCloseBtn">Close</button>
            </div>
        </div>

        <div class="modal-overlay" id="modalOverlay"></div>
    </div>

    <script src="/js/admin/change_password.js"></script>
@endsection
