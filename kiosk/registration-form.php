<?php include '../templates/header.php'; ?>
    <div class="kiosk-layout">
        <!-- Top Navigation Bar & Progress Header -->
        <div class="kiosk-top-nav-bar">
            <div class="kiosk-progress-card">
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 40%;"></div>
                </div>
                <div class="progress-labels">
                    <div class="progress-step completed-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">ID Selection & Scan</span>
                    </div>
                    <div class="progress-step active-step">
                        <span class="step-num">2</span>
                        <span class="step-lbl">Verify OCR Info</span>
                    </div>
                    <div class="progress-step">
                        <span class="step-num">3</span>
                        <span class="step-lbl">Purpose & Photo</span>
                    </div>
                    <div class="progress-step">
                        <span class="step-num">4</span>
                        <span class="step-lbl">Review</span>
                    </div>
                    <div class="progress-step">
                        <span class="step-num">5</span>
                        <span class="step-lbl">Get QR Pass</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Form Container -->
        <div class="form-container-card">
            <div class="section-title-box">
                <div class="title-with-badge">
                    <h2 class="section-title">Step 2: Verify Your Details & Add Contact Info</h2>
                    <span class="ocr-verified-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        ID OCR Verified
                    </span>
                </div>
                <p class="section-subtitle">Extracted details from your ID are locked for security compliance. Please enter your contact number to proceed.</p>
            </div>

            <form id="registrationForm" onsubmit="return false;">
                <!-- Section A: Disabled / Read-Only Extracted OCR Fields -->
                <div class="form-section-group locked-section">
                    <div class="section-group-header">
                        <div class="group-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="group-title">Extracted ID Information <span class="locked-pill">🔒 Disabled / Read-Only</span></h3>
                            <p class="group-subtitle">Information extracted automatically from scanned ID document.</p>
                        </div>
                    </div>

                    <div class="form-grid-2col">
                        <!-- Document Type (Disabled) -->
                        <div class="form-field-wrapper">
                            <label class="field-label">ID Document Type</label>
                            <div class="input-with-icon disabled-input-group">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"></rect><circle cx="9" cy="10" r="2.5"></circle></svg>
                                </span>
                                <input type="text" id="regIDType" class="form-control disabled-field" value="PhilID / National ID" disabled readonly>
                                <span class="field-lock-tag">Locked</span>
                            </div>
                        </div>

                        <!-- Full Name (Disabled) -->
                        <div class="form-field-wrapper">
                            <label class="field-label">Full Name (Last, First, Middle)</label>
                            <div class="input-with-icon disabled-input-group">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </span>
                                <input type="text" id="regFullName" class="form-control disabled-field highlight-text" value="JUAN PEDRO DELA CRUZ" disabled readonly>
                                <span class="field-lock-tag">Locked</span>
                            </div>
                        </div>

                        <!-- ID Number (Disabled) -->
                        <div class="form-field-wrapper">
                            <label class="field-label">ID / Control Number</label>
                            <div class="input-with-icon disabled-input-group">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line></svg>
                                </span>
                                <input type="text" id="regIDNumber" class="form-control disabled-field" value="1234-5678-9012-3456" disabled readonly>
                                <span class="field-lock-tag">Locked</span>
                            </div>
                        </div>

                        <!-- Date of Birth (Disabled) -->
                        <div class="form-field-wrapper">
                            <label class="field-label">Date of Birth</label>
                            <div class="input-with-icon disabled-input-group">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                </span>
                                <input type="text" id="regDOB" class="form-control disabled-field" value="JUNE 15, 1995" disabled readonly>
                                <span class="field-lock-tag">Locked</span>
                            </div>
                        </div>

                        <!-- Sex / Gender (Disabled) -->
                        <div class="form-field-wrapper">
                            <label class="field-label">Sex / Gender</label>
                            <div class="input-with-icon disabled-input-group">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4M12 8h.01"/></svg>
                                </span>
                                <input type="text" id="regGender" class="form-control disabled-field" value="MALE" disabled readonly>
                                <span class="field-lock-tag">Locked</span>
                            </div>
                        </div>

                        <!-- Address (Disabled) -->
                        <div class="form-field-wrapper full-width-field">
                            <label class="field-label">Home / Permanent Address</label>
                            <div class="input-with-icon disabled-input-group">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </span>
                                <input type="text" id="regAddress" class="form-control disabled-field" value="BRGY. CAN-ADIENG, ORMOC CITY, LEYTE, PHILIPPINES" disabled readonly>
                                <span class="field-lock-tag">Locked</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section B: Editable Contact Information -->
                <div class="form-section-group active-section">
                    <div class="section-group-header">
                        <div class="group-icon active-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="group-title">Contact & Security Log Reference <span class="required-star">* Required</span></h3>
                            <p class="group-subtitle">Enter your active mobile phone number for campus security logging and emergency contact reference.</p>
                        </div>
                    </div>

                    <div class="form-grid-2col">
                        <!-- Mobile Number (Editable) -->
                        <div class="form-field-wrapper">
                            <label class="field-label" for="regMobile">Mobile Phone Number <span class="req-mark">*</span></label>
                            <div class="input-with-icon">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                </span>
                                <input type="tel" id="regMobile" class="form-control active-input" placeholder="0917 123 4567" value="0917-123-4567" required autocomplete="off">
                            </div>
                        </div>

                        <!-- Email Address (Editable / Optional) -->
                        <div class="form-field-wrapper">
                            <label class="field-label" for="regEmail">Email Address <span class="opt-mark">(Optional)</span></label>
                            <div class="input-with-icon">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </span>
                                <input type="email" id="regEmail" class="form-control active-input" placeholder="example@email.com" value="juan.delacruz@gmail.com" autocomplete="off">
                            </div>
                        </div>

                        <!-- Emergency Contact Person (Editable) -->
                        <div class="form-field-wrapper full-width-field">
                            <label class="field-label" for="regEmergency">Emergency Contact Person & Phone</label>
                            <div class="input-with-icon">
                                <span class="field-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </span>
                                <input type="text" id="regEmergency" class="form-control active-input" placeholder="Contact Name - 09XX XXX XXXX" value="MARIA DELA CRUZ (SPOUSE) - 0918-987-6543">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Action Buttons -->
                <div class="action-footer-bar">
                    <a href="capture-id.php" class="button-secondary action-btn-back">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        Back to ID Scan
                    </a>
                    <button type="button" class="button-primary action-btn-next" id="btnSubmitForm">
                        <span>Proceed to Purpose & Visitor Photo</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    </main>

    <!-- Page JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Live Header Clock
            function updateClock() {
                const clockTime = document.getElementById('clockTime');
                const clockDate = document.getElementById('clockDate');
                if (!clockTime || !clockDate) return;
                const now = new Date();
                let hours = now.getHours();
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12 || 12;
                clockTime.textContent = `${String(hours).padStart(2, '0')}:${minutes} ${ampm}`;
                clockDate.textContent = now.toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' });
            }
            updateClock();
            setInterval(updateClock, 1000);

            // Guard Check: Returning visitors bypass Step 2 automatically
            if (sessionStorage.getItem('isReturningVisitor') === 'true') {
                window.location.href = 'capture-photo.php';
                return;
            }

            // Populate selected ID type if passed from sessionStorage
            const savedIDType = sessionStorage.getItem('visitorIDType');
            if (savedIDType) {
                const regIDType = document.getElementById('regIDType');
                if (regIDType) regIDType.value = savedIDType;
            }

            // Submit Button -> Next Step: `capture-photo.php`
            const btnSubmitForm = document.getElementById('btnSubmitForm');
            const regMobile = document.getElementById('regMobile');

            btnSubmitForm.addEventListener('click', function() {
                if (!regMobile.value.trim()) {
                    alert('Please enter your Mobile Phone Number before proceeding.');
                    regMobile.focus();
                    return;
                }

                // Store contact details for review step
                sessionStorage.setItem('visitorMobile', regMobile.value);
                sessionStorage.setItem('visitorEmail', document.getElementById('regEmail').value);
                sessionStorage.setItem('visitorEmergency', document.getElementById('regEmergency').value);

                // Navigate to Step 3: Purpose & Photo Capture
                window.location.href = 'capture-photo.php';
            });
        });
    </script>
    <footer class="main-footer">
        <div class="footer-container">
            <p class="footer-copyright">&copy; <?php echo date('Y'); ?> Eastern Visayas State University. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>