<?php
    $pageTitle = "IVMIS - Staff Login";
    $systemLabel = "IVMIS STAFF PORTAL";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IVMIS Authorized Staff Login — Secure portal for Security Guards, Administrators, and System Administrators at EVSU-Ormoc Campus.">
    <title><?php echo $pageTitle; ?> | Eastern Visayas State University</title>
    <link rel="icon" type="image/png" href="assets/images/evsu_logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Animated Background Orbs -->
    <div class="bg-orb bg-orb-1" aria-hidden="true"></div>
    <div class="bg-orb bg-orb-2" aria-hidden="true"></div>
    <div class="bg-orb bg-orb-3" aria-hidden="true"></div>

    <!-- Page Wrapper -->
    <div class="login-page-wrapper">

        <!-- ===== LEFT PANEL — Branding ===== -->
        <aside class="brand-panel" aria-label="EVSU Branding Panel">
            <div class="brand-panel-inner">

                <!-- Top Logo Block -->
                <div class="brand-logo-block">
                    <div class="brand-logo-ring">
                        <img src="assets/images/evsu_logo.png" alt="EVSU Logo" class="brand-logo-img">
                    </div>
                    <div class="brand-name-block">
                        <p class="brand-university">Eastern Visayas State University</p>
                        <p class="brand-campus">Ormoc Campus</p>
                    </div>
                </div>

                <!-- Hero Text -->
                <div class="brand-hero-text">
                    <div class="brand-badge-pill">
                        <span class="pulse-ring" aria-hidden="true"></span>
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>AUTHORIZED ACCESS ONLY</span>
                    </div>
                    <h1 class="brand-headline">
                        Intelligent<br>
                        <span class="text-gradient">Visitor Management</span><br>
                        Information System
                    </h1>
                    <p class="brand-description">
                        Secure, real-time campus visitor oversight for EVSU-Ormoc campus personnel. Monitor, manage, and safeguard every campus entry point.
                    </p>
                </div>

                <!-- Footer Credit -->
                <p class="brand-footer-note">&copy; <?php echo date('Y'); ?> EVSU-Ormoc &mdash; IVMIS v1.0</p>
            </div>
        </aside>

        <!-- ===== RIGHT PANEL — Login Form ===== -->
        <main class="login-panel" id="main-content">

            <!-- Mobile Header (visible only on small screens) -->
            <header class="mobile-header" aria-label="Mobile Site Header">
                <div class="mobile-header-inner">
                    <img src="assets/images/evsu_logo.png" alt="EVSU Logo" class="mobile-logo">
                    <div>
                        <p class="mobile-university">Eastern Visayas State University</p>
                        <p class="mobile-campus">Ormoc Campus &mdash; IVMIS</p>
                    </div>
                </div>
            </header>

            <div class="login-panel-inner">

                <!-- Login Card -->
                <div class="login-card" role="region" aria-label="Staff Login Form">

                    <!-- Card Header -->
                    <div class="login-card-header">
                        <div class="login-icon-wrap" aria-hidden="true">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="login-card-title">Staff Login</h2>
                            <p class="login-card-subtitle">Sign in to access the IVMIS dashboard</p>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="login-divider" aria-hidden="true"></div>

                    <!-- Alert Area (for error/success messages) -->
                    <div class="login-alert login-alert-error" id="loginAlertError" role="alert" aria-live="assertive" hidden>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        <span id="loginAlertErrorText">Invalid username or password.</span>
                    </div>

                    <!-- Login Form -->
                    <form class="login-form" id="loginForm" method="POST" action="#" novalidate aria-label="Login credentials form">

                        <!-- Username Field -->
                        <div class="form-group" id="formGroupUsername">
                            <label class="form-label" for="loginUsername">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                                </svg>
                                Username
                            </label>
                            <div class="input-wrapper">
                                <span class="input-icon" aria-hidden="true">
                                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                                    </svg>
                                </span>
                                <input
                                    type="text"
                                    id="loginUsername"
                                    name="username"
                                    class="form-input"
                                    placeholder="Enter your username"
                                    autocomplete="username"
                                    spellcheck="false"
                                    required
                                    aria-required="true"
                                    aria-describedby="usernameError"
                                >
                            </div>
                            <p class="form-error-msg" id="usernameError" role="alert" hidden>Username is required.</p>
                        </div>

                        <!-- Password Field -->
                        <div class="form-group" id="formGroupPassword">
                            <label class="form-label" for="loginPassword">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                                Password
                            </label>
                            <div class="input-wrapper">
                                <span class="input-icon" aria-hidden="true">
                                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                    </svg>
                                </span>
                                <input
                                    type="password"
                                    id="loginPassword"
                                    name="password"
                                    class="form-input"
                                    placeholder="Enter your password"
                                    autocomplete="current-password"
                                    required
                                    aria-required="true"
                                    aria-describedby="passwordError"
                                >
                                <button
                                    type="button"
                                    class="toggle-password-btn"
                                    id="togglePasswordBtn"
                                    aria-label="Toggle password visibility"
                                    title="Show/Hide password"
                                >
                                    <svg class="eye-icon eye-show" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <svg class="eye-icon eye-hide" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="display:none">
                                        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>
                                    </svg>
                                </button>
                            </div>
                            <p class="form-error-msg" id="passwordError" role="alert" hidden>Password is required.</p>
                        </div>

                        <!-- Remember Me & Forgot -->
                        <div class="login-options-row">
                            <label class="remember-label" for="rememberMe">
                                <input type="checkbox" id="rememberMe" name="remember" class="remember-checkbox">
                                <span class="checkbox-custom-small" aria-hidden="true">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                </span>
                                Remember me
                            </label>
                            <a href="#" class="forgot-link" id="forgotPasswordLink">Forgot password?</a>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="login-btn" id="loginSubmitBtn" aria-label="Sign in">
                            <span class="login-btn-content" id="loginBtnContent">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                                    <polyline points="10 17 15 12 10 7"/>
                                    <line x1="15" y1="12" x2="3" y2="12"/>
                                </svg>
                                Sign in
                            </span>
                            <span class="login-btn-loading" id="loginBtnLoading" hidden aria-hidden="true">
                                <span class="spinner" role="status" aria-label="Signing in, please wait..."></span>
                                Signing In&hellip;
                            </span>
                        </button>

                    </form>

                </div>

                <!-- Bottom Note -->
                <p class="login-bottom-note">
                    &copy; <?php echo date('Y'); ?> Eastern Visayas State University &mdash; All rights reserved.<br>
                    <span>Unauthorized access is strictly prohibited and subject to disciplinary action.</span>
                </p>

            </div>
        </main>

    </div>

    <!-- Forgot Password Modal -->
    <div class="modal-overlay" id="forgotModal" role="dialog" aria-modal="true" aria-labelledby="forgotModalTitle" hidden>
        <div class="modal-backdrop" id="forgotModalBackdrop"></div>
        <div class="modal-box">
            <div class="modal-box-header">
                <div class="modal-box-icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                </div>
                <div>
                    <h3 class="modal-box-title" id="forgotModalTitle">Forgot Password?</h3>
                    <p class="modal-box-subtitle">Contact your System Administrator</p>
                </div>
                <button class="modal-close-btn" id="forgotModalClose" aria-label="Close dialog">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                </button>
            </div>
            <div class="modal-box-body">
                <p>For account recovery or password reset, please contact your assigned <strong>System Administrator</strong> or the EVSU-Ormoc IT Services department.</p>
                <div class="contact-info-card">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13 19.79 19.79 0 0 1 1.61 4.38 2 2 0 0 1 3.58 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.16 6.16l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <div>
                        <p class="contact-label">IT Services Helpdesk</p>
                        <p class="contact-value">EVSU-Ormoc Campus, Main Building</p>
                    </div>
                </div>
            </div>
            <div class="modal-box-footer">
                <button class="modal-ok-btn" id="forgotModalOk">Got it</button>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {

        // Toggle Password Visibility
        var toggleBtn = document.getElementById('togglePasswordBtn');
        var pwInput   = document.getElementById('loginPassword');
        var eyeShow   = toggleBtn.querySelector('.eye-show');
        var eyeHide   = toggleBtn.querySelector('.eye-hide');

        toggleBtn.addEventListener('click', function () {
            var isPassword = pwInput.type === 'password';
            pwInput.type = isPassword ? 'text' : 'password';
            eyeShow.style.display = isPassword ? 'none' : '';
            eyeHide.style.display = isPassword ? '' : 'none';
            toggleBtn.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
        });

        // Clear errors on input
        document.getElementById('loginUsername').addEventListener('input', function () {
            document.getElementById('usernameError').hidden = true;
            document.getElementById('formGroupUsername').classList.remove('has-error');
            document.getElementById('loginAlertError').hidden = true;
        });

        document.getElementById('loginPassword').addEventListener('input', function () {
            document.getElementById('passwordError').hidden = true;
            document.getElementById('formGroupPassword').classList.remove('has-error');
            document.getElementById('loginAlertError').hidden = true;
        });

        // Form Submission
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();
            var isValid = true;

            var username = document.getElementById('loginUsername').value.trim();
            var password = document.getElementById('loginPassword').value;

            if (!username) {
                document.getElementById('usernameError').hidden = false;
                document.getElementById('formGroupUsername').classList.add('has-error');
                isValid = false;
            }

            if (!password) {
                document.getElementById('passwordError').hidden = false;
                document.getElementById('formGroupPassword').classList.add('has-error');
                isValid = false;
            }

            if (!isValid) return;

            document.getElementById('loginBtnContent').hidden = true;
            document.getElementById('loginBtnLoading').hidden = false;
            document.getElementById('loginSubmitBtn').disabled = true;

            // TODO: Replace with actual PHP auth submission
            setTimeout(function () {
                document.getElementById('loginBtnContent').hidden = false;
                document.getElementById('loginBtnLoading').hidden = true;
                document.getElementById('loginSubmitBtn').disabled = false;

                document.getElementById('loginAlertErrorText').textContent = 'Invalid username or password. Please try again.';
                document.getElementById('loginAlertError').hidden = false;

                var card = document.querySelector('.login-card');
                card.classList.add('shake');
                setTimeout(function() { card.classList.remove('shake'); }, 500);

                document.getElementById('loginPassword').value = '';
                document.getElementById('loginPassword').focus();
            }, 1400);
        });

        // Forgot Password Modal
        var forgotModal    = document.getElementById('forgotModal');
        var forgotLink     = document.getElementById('forgotPasswordLink');
        var forgotClose    = document.getElementById('forgotModalClose');
        var forgotOk       = document.getElementById('forgotModalOk');
        var forgotBackdrop = document.getElementById('forgotModalBackdrop');

        function openForgotModal() {
            forgotModal.hidden = false;
            requestAnimationFrame(function() { forgotModal.classList.add('active'); });
            document.body.style.overflow = 'hidden';
            forgotClose.focus();
        }

        function closeForgotModal() {
            forgotModal.classList.remove('active');
            setTimeout(function() { forgotModal.hidden = true; }, 260);
            document.body.style.overflow = '';
            forgotLink.focus();
        }

        forgotLink.addEventListener('click', function (e) { e.preventDefault(); openForgotModal(); });
        forgotClose.addEventListener('click', closeForgotModal);
        forgotOk.addEventListener('click', closeForgotModal);
        forgotBackdrop.addEventListener('click', closeForgotModal);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !forgotModal.hidden) closeForgotModal();
        });

    });
    </script>
</body>
</html>
