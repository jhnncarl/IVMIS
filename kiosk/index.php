<?php include '../templates/header.php'; ?>
    <div class="kiosk-layout">
        <!-- Main Bento Hero Section -->
        <div class="bento-grid">
            <!-- Left Hero Card -->
            <div class="bento-column-left">
                <div class="welcome-card">
                    <div class="kiosk-badge-pill">
                        <span class="pulse-ring"></span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>OFFICIAL CAMPUS VISITOR PORTAL</span>
                    </div>
                    
                    <h1 class="hero-title">Welcome to <span class="text-gradient">EVSU-Ormoc</span> Campus</h1>
                    <p class="hero-description">Fast, touch-friendly visitor check-in. Please complete registration before entering campus grounds.</p>
                    
                    <div class="hero-action-box">
                        <button class="button-primary register-button" id="startRegBtn" aria-label="Start Visitor Registration">
                            <span class="btn-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                            </span>
                            <span class="btn-text">START REGISTRATION</span>
                            <span class="btn-arrow">→</span>
                        </button>
                    </div>

                    <div class="kiosk-features-row">
                        <div class="feature-chip">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            Data Protected
                        </div>
                        <div class="feature-chip">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            Instant QR Pass
                        </div>
                        <div class="feature-chip">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            OCR Auto-Fill
                        </div>
                    </div>

                    <p class="terms-text">By tapping Start, you agree to our <button type="button" class="link-btn" id="openTermsLink">Terms & Data Privacy Notice</button>.</p>
                </div>
            </div>

            <!-- Right Bento Card: ID Scanner Readiness -->
            <div class="bento-column-right">
                <div class="bento-card before-begin-card">
                    <div class="bento-header">
                        <div class="bento-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                                <line x1="7" y1="8" x2="17" y2="8"></line>
                                <line x1="7" y1="12" x2="13" y2="12"></line>
                                <circle cx="15.5" cy="14.5" r="1.5"></circle>
                            </svg>
                        </div>
                        <div>
                            <h3 class="bento-title">ID Scanning Ready</h3>
                            <p class="bento-subtitle">Have any government valid ID ready</p>
                        </div>
                    </div>

                    <div class="id-visual">
                        <div class="slideshow-container" id="idSlideshow">
                            <img src="../assets/images/national-id.png" alt="National ID" class="slide-image active" data-index="0">
                            <img src="../assets/images/driver-liscense.png" alt="Driver License" class="slide-image" data-index="1">
                            <img src="../assets/images/philhealth-id.png" alt="PhilHealth ID" class="slide-image" data-index="2">
                            <img src="../assets/images/passport-id.png" alt="Passport ID" class="slide-image" data-index="3">
                            
                            <div class="slideshow-indicators">
                                <span class="indicator active" data-slide="0"></span>
                                <span class="indicator" data-slide="1"></span>
                                <span class="indicator" data-slide="2"></span>
                                <span class="indicator" data-slide="3"></span>
                            </div>
                        </div>
                    </div>

                    <div class="ocr-status">
                        <div class="status-indicator">
                            <span class="status-dot"></span>
                            <span class="status-text">CAMERA & OCR SENSOR ACTIVE</span>
                        </div>
                        <p class="status-description">Scanning reads your details automatically to save time.</p>
                    </div>

                    <div class="supported-ids">
                        <h4 class="supported-ids-title">Supported Identification:</h4>
                        <div class="id-chips">
                            <span class="id-chip active-chip" data-slide="0">PhilID</span>
                            <span class="id-chip" data-slide="1">Driver's License</span>
                            <span class="id-chip" data-slide="2">PhilHealth</span>
                            <span class="id-chip" data-slide="3">Passport</span>
                        </div>
                    </div>

                    <div class="time-estimate-bar">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>Est. Time: <strong>1 - 2 minutes</strong></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Horizontal Process Steps Grid -->
        <div class="steps-card">
            <div class="steps-header-mobile">
                <span class="steps-badge">HOW IT WORKS</span>
                <h3>5 Easy Steps to Enter</h3>
            </div>
            
            <div class="steps-wrapper">
                <div class="step-item">
                    <div class="step-number-badge">01</div>
                    <div class="step-content">
                        <h4 class="step-title">Scan / Capture ID</h4>
                        <p class="step-text">Place ID facing scanner camera.</p>
                    </div>
                </div>
                
                <div class="step-arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
                
                <div class="step-item">
                    <div class="step-number-badge">02</div>
                    <div class="step-content">
                        <h4 class="step-title">Verify OCR Details</h4>
                        <p class="step-text">Confirm extracted name & ID info.</p>
                    </div>
                </div>
                
                <div class="step-arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
                
                <div class="step-item">
                    <div class="step-number-badge">03</div>
                    <div class="step-content">
                        <h4 class="step-title">Visit Purpose & Person to Visit</h4>
                        <p class="step-text">Select purpose & specify person to visit.</p>
                    </div>
                </div>
                
                <div class="step-arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
                
                <div class="step-item">
                    <div class="step-number-badge">04</div>
                    <div class="step-content">
                        <h4 class="step-title">Confirm & Check-In</h4>
                        <p class="step-text">Submit record to campus database.</p>
                    </div>
                </div>
                
                <div class="step-arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
                
                <div class="step-item highlight-step">
                    <div class="step-number-badge accent-badge">05</div>
                    <div class="step-content">
                        <h4 class="step-title">Get QR Campus Pass</h4>
                        <p class="step-text">Save pass for gate & time-out scan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

    <!-- Consent & Privacy Touch Modal -->
    <div class="consent-modal" id="consentModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="modal-backdrop" id="modalBackdrop"></div>
        <div class="modal-container">
            <div class="modal-header">
                <div class="modal-header-content">
                    <div class="modal-header-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="modal-title" id="modalTitle">Visitor Notice & Data Privacy</h2>
                        <p class="modal-subtitle">Please read and acknowledge before proceeding to registration.</p>
                    </div>
                </div>
                <button class="modal-close" id="modalClose" aria-label="Close modal">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-content">
                <div class="scrollable-content" id="scrollableContent">
                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-icon-box">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                            </div>
                            <h3 class="info-title">Data Privacy Act (R.A. 10173)</h3>
                        </div>
                        <div class="info-card-body">
                            <ul class="info-list">
                                <li>Personal information collected (Name, ID scan, Photo, Contact info) is strictly processed for EVSU-Ormoc campus visitor logging, security management, and emergency tracking.</li>
                                <li>All captured data is safely encrypted and stored in compliance with National Privacy Commission regulations.</li>
                                <li>Visitor logs are retained strictly in accordance with institutional security policies and are never shared with unauthorized 3rd parties.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-icon-box">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                </svg>
                            </div>
                            <h3 class="info-title">Campus Visitor Guidelines</h3>
                        </div>
                        <div class="info-card-body">
                            <ul class="info-list">
                                <li>Visitors must present their generated QR pass or badge upon entry and exit.</li>
                                <li>Please follow institutional decorum and stay within authorized building areas.</li>
                                <li>In case of emergency, immediately follow directions provided by EVSU security personnel.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="scroll-fade" id="scrollFade"></div>
            </div>
            <div class="modal-footer">
                <div class="modal-consent">
                    <label class="consent-checkbox" for="consentCheckbox">
                        <input type="checkbox" id="consentCheckbox">
                        <span class="checkbox-custom">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        <span class="checkbox-label">I have read, understood, and accept the <strong>Privacy Policy & Visitor Guidelines</strong>.</span>
                    </label>
                </div>
                <div class="modal-actions">
                    <button class="modal-btn modal-btn-cancel" id="modalCancel">Cancel</button>
                    <button class="modal-btn modal-btn-continue" id="modalContinue" disabled>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Agree & Proceed
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Live Header Clock
            function updateClock() {
                const clockTime = document.getElementById('clockTime');
                const clockDate = document.getElementById('clockDate');
                if (!clockTime || !clockDate) return;

                const now = new Date();
                
                // Format Time (e.g. 02:45 PM)
                let hours = now.getHours();
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12;
                const hoursStr = String(hours).padStart(2, '0');
                clockTime.textContent = `${hoursStr}:${minutes} ${ampm}`;

                // Format Date (e.g. Thu, Sep 3, 2026)
                const options = { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' };
                clockDate.textContent = now.toLocaleDateString('en-US', options);
            }
            updateClock();
            setInterval(updateClock, 1000);

            // Fast Slideshow & Interactive Chips
            const slides = document.querySelectorAll('.slide-image');
            const indicators = document.querySelectorAll('.slideshow-indicators .indicator');
            const idChips = document.querySelectorAll('.id-chips .id-chip');
            let currentSlide = 0;
            let slideInterval;

            function goToSlide(index) {
                if (index === currentSlide) return;
                slides[currentSlide].classList.remove('active');
                indicators[currentSlide].classList.remove('active');
                if (idChips[currentSlide]) idChips[currentSlide].classList.remove('active-chip');

                currentSlide = index;
                slides[currentSlide].classList.add('active');
                indicators[currentSlide].classList.add('active');
                if (idChips[currentSlide]) idChips[currentSlide].classList.add('active-chip');
            }

            function nextSlide() {
                const nextIndex = (currentSlide + 1) % slides.length;
                goToSlide(nextIndex);
            }

            function startSlideshow() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 2800);
            }

            startSlideshow();

            // Clickable ID Chips & Indicators for Touch Kiosk
            indicators.forEach(ind => {
                ind.addEventListener('click', function() {
                    const idx = parseInt(this.getAttribute('data-slide'));
                    goToSlide(idx);
                    startSlideshow();
                });
            });

            idChips.forEach(chip => {
                chip.addEventListener('click', function() {
                    const idx = parseInt(this.getAttribute('data-slide'));
                    goToSlide(idx);
                    startSlideshow();
                });
            });

            // Modal Functionality
            const consentModal = document.getElementById('consentModal');
            const startRegBtn = document.getElementById('startRegBtn');
            const openTermsLink = document.getElementById('openTermsLink');
            const modalClose = document.getElementById('modalClose');
            const modalCancel = document.getElementById('modalCancel');
            const modalContinue = document.getElementById('modalContinue');
            const consentCheckbox = document.getElementById('consentCheckbox');
            const modalBackdrop = document.getElementById('modalBackdrop');

            function openModal() {
                consentModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                consentModal.classList.remove('active');
                document.body.style.overflow = '';
            }

            function proceedToRegistration() {
                closeModal();
                // Navigate seamlessly to ID Capture step
                window.location.href = 'capture-id.php';
            }

            if (startRegBtn) startRegBtn.addEventListener('click', openModal);
            if (openTermsLink) openTermsLink.addEventListener('click', openModal);
            if (modalClose) modalClose.addEventListener('click', closeModal);
            if (modalCancel) modalCancel.addEventListener('click', closeModal);
            if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);
            if (modalContinue) modalContinue.addEventListener('click', proceedToRegistration);

            if (consentCheckbox) {
                consentCheckbox.addEventListener('change', function() {
                    modalContinue.disabled = !this.checked;
                });
            }

            // Keyboard ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && consentModal.classList.contains('active')) {
                    closeModal();
                }
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