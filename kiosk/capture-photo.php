<?php include '../templates/header.php'; ?>
    <div class="kiosk-layout">
        <!-- Top Navigation Bar & Progress Header -->
        <div class="kiosk-top-nav-bar">
            <a href="capture-id.php" class="kiosk-back-btn" id="btnBackToPreviousStep" title="Return to ID Scan">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                <span id="backBtnText">Back to ID Scan</span>
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
                    <div class="progress-step completed-step" id="step2LabelWrapper">
                        <span class="step-num">✓</span>
                        <span class="step-lbl" id="step2LabelText">Verify Info</span>
                    </div>
                    <div class="progress-step active-step">
                        <span class="step-num">3</span>
                        <span class="step-lbl">Purpose & Person to Visit</span>
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
        <div class="returning-banner-card" id="returningBannerCard" style="display: none;">
            <div class="returning-banner-info">
                <img id="returningAvatar" src="../assets/images/evsu_logo.png" alt="Stored Profile Avatar" class="returning-avatar-thumb">
                <div class="returning-banner-text">
                    <h3 id="returningWelcomeName">Welcome Back, JUAN PEDRO DELA CRUZ!</h3>
                    <p>Your stored profile has been verified. Registration details skipped for faster check-in.</p>
                </div>
            </div>
            <span class="returning-tag-pill">RETURNING VISITOR</span>
        </div>

        <!-- Main Step Content Container -->
        <div class="capture-container">
            <div class="section-title-box">
                <h2 class="section-title">Step 3: Purpose of Visit & Person to Visit</h2>
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

                    <!-- Person to Visit Field (Replaces Destination Office) -->
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

                <!-- Right Column: Visitor Photo Capture -->
                <div class="photo-capture-card">
                    <div class="card-section-title">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                        <span id="photoCardTitle">Visitor Headshot Photo</span> <span class="required-star" id="photoReqStar">*</span>
                    </div>

                    <!-- Photo Camera Viewfinder Box -->
                    <div class="photo-viewport-box">
                        <video id="headshotVideo" autoplay playsinline muted></video>
                        <canvas id="headshotCanvas" style="display: none;"></canvas>
                        <img id="headshotPreviewImg" style="display: none; width: 100%; height: 100%; object-fit: cover;" alt="Visitor Photo Preview">

                        <!-- Face Alignment Oval Guide -->
                        <div class="face-target-oval" id="faceTargetOval">
                            <div class="face-oval-ring"></div>
                            <span class="face-guide-text">Position face inside oval</span>
                        </div>

                        <!-- Fallback / Demo Placeholder -->
                        <div class="camera-placeholder" id="photoPlaceholder" style="display: none;">
                            <div class="placeholder-icon">
                                <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                            <h4>Camera Feed Offline / Demo Mode</h4>
                            <p>Click <strong>Take Photo Headshot</strong> to capture sample visitor photo.</p>
                        </div>
                    </div>

                    <!-- Photo Action Controls -->
                    <div class="photo-controls-bar">
                        <button type="button" class="scanner-btn scanner-btn-capture" id="btnTakeHeadshot">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4" fill="currentColor"/></svg>
                            <span id="btnTakeHeadshotText">Take Photo Headshot</span>
                        </button>
                        
                        <button type="button" class="scanner-btn scanner-btn-cancel" id="btnRetakeHeadshot" style="display: none;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 4v6h-6"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
                            Retake / Update Photo
                        </button>

                        <button type="button" class="scanner-btn scanner-btn-upload" id="btnUploadHeadshot">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                            Upload Photo
                        </button>
                        <input type="file" id="fileHeadshotInput" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>

            <!-- Bottom Action Footer Bar -->
            <div class="action-footer-bar" style="margin-top: 1.5rem;">
                <a href="registration-form.php" class="button-secondary action-btn-back" id="btnFooterBack">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    <span id="footerBackText">Back to Registration Details</span>
                </a>
                <button type="button" class="button-primary action-btn-next" id="btnProceedToReview">
                    <span>Proceed to Final Review</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
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

            // Visitor Mode Handling
            const isReturning = sessionStorage.getItem('isReturningVisitor') === 'true';
            const returningBanner = document.getElementById('returningBannerCard');
            const returningName = document.getElementById('returningWelcomeName');
            const returningAvatar = document.getElementById('returningAvatar');
            const btnFooterBack = document.getElementById('btnFooterBack');
            const footerBackText = document.getElementById('footerBackText');
            const btnBackToPreviousStep = document.getElementById('btnBackToPreviousStep');
            const backBtnText = document.getElementById('backBtnText');

            const photoReqStar = document.getElementById('photoReqStar');
            const photoCardTitle = document.getElementById('photoCardTitle');

            if (isReturning) {
                const visitorName = sessionStorage.getItem('visitorName') || 'JUAN PEDRO DELA CRUZ';
                const storedPhoto = sessionStorage.getItem('visitorPhoto') || '../assets/images/evsu_logo.png';
                
                returningName.textContent = `Welcome Back, ${visitorName}!`;
                returningAvatar.src = storedPhoto;
                returningBanner.style.display = 'flex';

                // Update back button targets to capture-id.php for returning visitors
                btnFooterBack.href = 'capture-id.php';
                footerBackText.textContent = 'Back to ID Scan';
                btnBackToPreviousStep.href = 'capture-id.php';
                backBtnText.textContent = 'Back to ID Scan';

                // Photo is optional for returning visitors
                if (photoReqStar) photoReqStar.style.display = 'none';
                if (photoCardTitle) photoCardTitle.innerHTML = 'Visitor Profile Photo <span class="optional-tag">(Using Stored Photo)</span>';
            }

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

            // Camera Setup
            const headshotVideo = document.getElementById('headshotVideo');
            const headshotCanvas = document.getElementById('headshotCanvas');
            const headshotPreviewImg = document.getElementById('headshotPreviewImg');
            const photoPlaceholder = document.getElementById('photoPlaceholder');
            const faceTargetOval = document.getElementById('faceTargetOval');

            const btnTakeHeadshot = document.getElementById('btnTakeHeadshot');
            const btnRetakeHeadshot = document.getElementById('btnRetakeHeadshot');
            const btnUploadHeadshot = document.getElementById('btnUploadHeadshot');
            const fileHeadshotInput = document.getElementById('fileHeadshotInput');
            const btnProceedToReview = document.getElementById('btnProceedToReview');

            let photoStream = null;
            let photoCaptured = false;

            // If returning visitor, show stored photo by default
            if (isReturning && sessionStorage.getItem('visitorPhoto')) {
                headshotPreviewImg.src = sessionStorage.getItem('visitorPhoto');
                headshotVideo.style.display = 'none';
                faceTargetOval.style.display = 'none';
                headshotPreviewImg.style.display = 'block';
                photoCaptured = true;

                btnTakeHeadshot.style.display = 'none';
                btnRetakeHeadshot.style.display = 'inline-flex';
            } else {
                startPhotoCamera();
            }

            async function startPhotoCamera() {
                try {
                    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                        photoStream = await navigator.mediaDevices.getUserMedia({
                            video: { width: { ideal: 640 }, height: { ideal: 640 }, facingMode: "user" }
                        });
                        headshotVideo.srcObject = photoStream;
                        headshotVideo.style.display = 'block';
                        headshotPreviewImg.style.display = 'none';
                        photoPlaceholder.style.display = 'none';
                        faceTargetOval.style.display = 'flex';
                    } else {
                        showPhotoFallback();
                    }
                } catch (err) {
                    console.warn("User camera unavailable. Showing placeholder.", err);
                    showPhotoFallback();
                }
            }

            function stopPhotoCamera() {
                if (photoStream) {
                    photoStream.getTracks().forEach(track => track.stop());
                    photoStream = null;
                }
            }

            function showPhotoFallback() {
                headshotVideo.style.display = 'none';
                photoPlaceholder.style.display = 'flex';
                faceTargetOval.style.display = 'none';
            }

            // Take Photo Snap
            btnTakeHeadshot.addEventListener('click', function() {
                if (photoStream && headshotVideo.videoWidth) {
                    headshotCanvas.width = headshotVideo.videoWidth;
                    headshotCanvas.height = headshotVideo.videoHeight;
                    const ctx = headshotCanvas.getContext('2d');
                    ctx.drawImage(headshotVideo, 0, 0, headshotCanvas.width, headshotCanvas.height);
                    const photoUrl = headshotCanvas.toDataURL('image/png');
                    headshotPreviewImg.src = photoUrl;
                    sessionStorage.setItem('visitorPhoto', photoUrl);
                } else {
                    const fallbackUrl = '../assets/images/evsu_logo.png';
                    headshotPreviewImg.src = fallbackUrl;
                    sessionStorage.setItem('visitorPhoto', fallbackUrl);
                }

                stopPhotoCamera();
                headshotVideo.style.display = 'none';
                faceTargetOval.style.display = 'none';
                headshotPreviewImg.style.display = 'block';
                photoCaptured = true;

                btnTakeHeadshot.style.display = 'none';
                btnRetakeHeadshot.style.display = 'inline-flex';
            });

            // Retake Photo
            btnRetakeHeadshot.addEventListener('click', function() {
                photoCaptured = false;
                btnRetakeHeadshot.style.display = 'none';
                btnTakeHeadshot.style.display = 'inline-flex';
                startPhotoCamera();
            });

            // Upload Photo Fallback
            btnUploadHeadshot.addEventListener('click', function() {
                fileHeadshotInput.click();
            });

            fileHeadshotInput.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(evt) {
                        stopPhotoCamera();
                        headshotVideo.style.display = 'none';
                        faceTargetOval.style.display = 'none';
                        headshotPreviewImg.src = evt.target.result;
                        headshotPreviewImg.style.display = 'block';
                        sessionStorage.setItem('visitorPhoto', evt.target.result);
                        photoCaptured = true;

                        btnTakeHeadshot.style.display = 'none';
                        btnRetakeHeadshot.style.display = 'inline-flex';
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            // Proceed to Step 4: Review (`review.php`)
            btnProceedToReview.addEventListener('click', function() {
                const personVal = personToVisitInput.value.trim();
                sessionStorage.setItem('visitorPurpose', selectedPurpose);
                sessionStorage.setItem('visitorPersonToVisit', personVal || 'N/A - General Campus Visit');

                // If first-time visitor, photo is required
                if (!isReturning && !photoCaptured) {
                    // Save default photo if not taken
                    sessionStorage.setItem('visitorPhoto', '../assets/images/evsu_logo.png');
                }

                // Navigate to Step 4: Review
                window.location.href = 'review.php';
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