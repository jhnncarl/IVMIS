<?php include '../templates/header.php'; ?>
    <div class="kiosk-layout">
        <!-- Top Navigation Bar & Progress Header -->
        <div class="kiosk-top-nav-bar">
            <a href="capture-id.php" class="kiosk-back-btn" title="Return to ID Scan">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                <span>Back to ID Scan</span>
            </a>

            <div class="kiosk-progress-card">
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 60%;"></div>
                </div>
                <div class="progress-labels">
                    <div class="progress-step completed-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">ID Selection & Scan</span>
                    </div>
                    <div class="progress-step completed-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">Profile Verified</span>
                    </div>
                    <div class="progress-step active-step">
                        <span class="step-num">3</span>
                        <span class="step-lbl">Purpose & Verification</span>
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

        <!-- Returning Visitor Welcome Banner -->
        <div class="returning-banner-card">
            <div class="returning-banner-info">
                <img id="returningAvatar" src="../assets/images/evsu_logo.png" alt="Stored Profile Avatar" class="returning-avatar-thumb">
                <div class="returning-banner-text">
                    <h3 id="returningWelcomeName">Welcome Back!</h3>
                    <p>Your stored profile has been verified. Registration details skipped for faster check-in.</p>
                </div>
            </div>
            <span class="returning-tag-pill">RETURNING VISITOR</span>
        </div>

        <!-- Main Step Content Container -->
        <div class="capture-container">
            <div class="section-title-box">
                <h2 class="section-title">Step 3: Purpose of Visit & Verification</h2>
                <p class="section-subtitle">Select why you are visiting EVSU-Ormoc campus today and specify the person you intend to visit (if applicable).</p>
            </div>

            <div class="purpose-photo-grid">
                <!-- Left Column: Purpose of Visit Selection -->
                <div class="purpose-selection-card">
                    <div class="card-section-title">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        Select Purpose of Visit <span class="required-star">*</span>
                    </div>

                    <div class="purpose-options-grid">
                        <div class="purpose-card active" data-purpose="Official University Business">
                            <div class="purpose-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 11h12M6 15h12M9 3h6v4H9z"/></svg>
                            </div>
                            <div class="purpose-text">
                                <h4>Official University Business</h4>
                                <p>Registrar, Cashier, Admin Transactions</p>
                            </div>
                        </div>

                        <div class="purpose-card" data-purpose="Academic / Student Inquiry">
                            <div class="purpose-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            </div>
                            <div class="purpose-text">
                                <h4>Academic / Student Inquiry</h4>
                                <p>Consultation, Admissions, Faculty Visit</p>
                            </div>
                        </div>

                        <div class="purpose-card" data-purpose="Delivery / Supplier / Contractor">
                            <div class="purpose-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                            </div>
                            <div class="purpose-text">
                                <h4>Delivery / Supplier / Contractor</h4>
                                <p>Goods Delivery, Maintenance, Service</p>
                            </div>
                        </div>

                        <div class="purpose-card" data-purpose="Personal Visit / Staff Meeting">
                            <div class="purpose-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div class="purpose-text">
                                <h4>Personal Visit / Meeting</h4>
                                <p>Meeting University Staff or Student</p>
                            </div>
                        </div>

                        <div class="purpose-card" data-purpose="Campus Event / Activity">
                            <div class="purpose-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            </div>
                            <div class="purpose-text">
                                <h4>Campus Event / Seminar</h4>
                                <p>Attending Event, Sports, or Conference</p>
                            </div>
                        </div>

                        <div class="purpose-card" data-purpose="Other Campus Purpose">
                            <div class="purpose-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            </div>
                            <div class="purpose-text">
                                <h4>Other Campus Purpose</h4>
                                <p>General Inquiry or Assistance</p>
                            </div>
                        </div>
                    </div>

                    <!-- Person to Visit Field -->
                    <div class="form-field-wrapper" style="margin-top: 1.25rem;">
                        <label class="field-label" for="personToVisit">Person to Visit <span class="optional-tag">(if applicable)</span></label>
                        <div class="input-with-icon">
                            <span class="field-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </span>
                            <input type="text" id="personToVisit" class="form-control active-input" placeholder="e.g. Prof. Juan Dela Cruz, Dr. Santos (Optional)">
                        </div>
                    </div>
                </div>

                <!-- Right Column: Visitor Verification Card -->
                <div class="verification-card">
                    <div class="card-section-title">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span>Verification Status</span>
                    </div>

                    <!-- Verification Status Display -->
                    <div class="verification-status-box">
                        <div class="verification-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="verification-content">
                            <h3 class="verification-title">Visitor Verified</h3>
                            <p class="verification-message">Your identity has been successfully verified through Valid ID scan and OCR processing.</p>
                            <div class="verification-badge">
                                <span class="verification-badge-dot"></span>
                                <span class="verification-badge-text">Returning Visitor</span>
                            </div>
                        </div>
                    </div>

                    <!-- Visitor Profile Summary -->
                    <div class="visitor-profile-summary">
                        <div class="profile-summary-header">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span>Profile on File</span>
                        </div>
                        <div class="profile-summary-details">
                            <div class="profile-detail-item">
                                <span class="detail-label">Name:</span>
                                <span class="detail-value" id="profileName">Loading...</span>
                            </div>
                            <div class="profile-detail-item">
                                <span class="detail-label">ID Document:</span>
                                <span class="detail-value" id="profileIDType">PhilID / National ID</span>
                            </div>
                            <div class="profile-detail-item">
                                <span class="detail-label">Mobile:</span>
                                <span class="detail-value" id="profilePhone">+63 917 123 4567</span>
                            </div>
                            <div class="profile-detail-item">
                                <span class="detail-label">Status:</span>
                                <span class="detail-value status-active">Active Record</span>
                            </div>
                            <div class="profile-detail-item">
                                <span class="detail-label">Last Visit:</span>
                                <span class="detail-value" id="lastVisitDate">Previously Registered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Action Footer Bar -->
            <div class="action-footer-bar" style="margin-top: 1.5rem;">
                <a href="capture-id.php" class="button-secondary action-btn-back">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    Back to ID Scan
                </a>
                <button type="button" class="button-primary action-btn-next" id="btnProceedToReview">
                    <span>Proceed to Final Review</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>

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

            // Load returning visitor data
            const visitorName = sessionStorage.getItem('visitorName') || 'Visitor';
            const storedPhoto = sessionStorage.getItem('visitorPhoto') || '../assets/images/evsu_logo.png';
            const idType = sessionStorage.getItem('visitorIDType') || 'PhilID / National ID';
            const phone = sessionStorage.getItem('visitorPhone') || '+63 917 123 4567';
            const lastVisit = sessionStorage.getItem('visitorLastVisit') || 'Previously Registered';

            document.getElementById('returningWelcomeName').textContent = `Welcome Back, ${visitorName}!`;
            document.getElementById('returningAvatar').src = storedPhoto;
            document.getElementById('profileName').textContent = visitorName;
            document.getElementById('profileIDType').textContent = idType;
            document.getElementById('profilePhone').textContent = phone;
            document.getElementById('lastVisitDate').textContent = lastVisit;

            // Purpose Selection
            const purposeCards = document.querySelectorAll('.purpose-card');
            let selectedPurpose = sessionStorage.getItem('visitorPurpose') || 'Official University Business';

            purposeCards.forEach(card => {
                const cardPurpose = card.getAttribute('data-purpose');
                if (cardPurpose === selectedPurpose) {
                    purposeCards.forEach(c => c.classList.remove('active'));
                    card.classList.add('active');
                }

                card.addEventListener('click', function() {
                    purposeCards.forEach(c => c.classList.remove('active'));
                    this.classList.add('active');
                    selectedPurpose = this.getAttribute('data-purpose');
                });
            });

            // Person to Visit field
            const personToVisitInput = document.getElementById('personToVisit');
            const savedPerson = sessionStorage.getItem('visitorPersonToVisit');
            if (savedPerson && savedPerson !== 'N/A - General Campus Visit') {
                personToVisitInput.value = savedPerson;
            }

            // Proceed to Step 4: Review
            document.getElementById('btnProceedToReview').addEventListener('click', function() {
                const personVal = personToVisitInput.value.trim();
                sessionStorage.setItem('visitorPurpose', selectedPurpose);
                sessionStorage.setItem('visitorPersonToVisit', personVal || 'N/A - General Campus Visit');

                // Navigate to Step 4: Review
                window.location.href = 'review.php';
            });
        });
    </script>
<?php include '../templates/footer.php'; ?>

