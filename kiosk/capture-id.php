<?php include '../templates/header.php'; ?>
    <div class="kiosk-layout">
        <!-- Top Navigation Bar & Progress Header -->
        <div class="kiosk-top-nav-bar">
            <a href="index.php" class="kiosk-back-btn" title="Return to Welcome Page">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                <span>Back to Welcome Page</span>
            </a>
            <div class="kiosk-progress-card">
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 20%;"></div>
                </div>
                <div class="progress-labels">
                    <div class="progress-step active-step">
                        <span class="step-num">1</span>
                        <span class="step-lbl">ID Selection & Scan</span>
                    </div>
                    <div class="progress-step">
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

        <!-- Main Step Content Container -->
        <div class="capture-container">
            <!-- Stage 1: Select ID Type -->
            <div class="capture-stage active-stage" id="stageSelectID">
                <div class="section-title-box">
                    <h2 class="section-title">Step 1: Select Your Valid ID</h2>
                    <p class="section-subtitle">Choose the ID type you will present to the camera scanner for automatic verification.</p>
                </div>

                <div class="id-selection-grid">
                    <div class="id-type-card active" data-idtype="PhilID / National ID" data-guide="Align front side of PhilID / National ID inside the scanner frame.">
                        <div class="id-card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                                <circle cx="9" cy="10" r="2.5"></circle>
                                <path d="M15 8h2M15 12h2M6 16h12"></path>
                            </svg>
                        </div>
                        <div class="id-card-info">
                            <h3 class="id-card-name">PhilID / National ID</h3>
                            <p class="id-card-desc">Philippine Identification System</p>
                        </div>
                        <div class="id-card-check">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                    </div>

                    <div class="id-type-card" data-idtype="Driver's License" data-guide="Position Driver's License horizontally with clear lighting.">
                        <div class="id-card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2 11.2 2 11.6 2 12v4c0 .6.4 1 1 1h2"></path>
                                <circle cx="7" cy="17" r="2"></circle>
                                <circle cx="17" cy="17" r="2"></circle>
                            </svg>
                        </div>
                        <div class="id-card-info">
                            <h3 class="id-card-name">Driver's License</h3>
                            <p class="id-card-desc">LTO Official Driver License</p>
                        </div>
                        <div class="id-card-check">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                    </div>

                    <div class="id-type-card" data-idtype="PhilHealth ID" data-guide="Place PhilHealth Card flat inside the guide box.">
                        <div class="id-card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="id-card-info">
                            <h3 class="id-card-name">PhilHealth ID</h3>
                            <p class="id-card-desc">PhilHealth Health Insurance Card</p>
                        </div>
                        <div class="id-card-check">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                    </div>

                    <div class="id-type-card" data-idtype="Passport" data-guide="Open passport to data page containing photo and details.">
                        <div class="id-card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </div>
                        <div class="id-card-info">
                            <h3 class="id-card-name">Passport</h3>
                            <p class="id-card-desc">Official Government Passport</p>
                        </div>
                        <div class="id-card-check">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                    </div>

                    <div class="id-type-card" data-idtype="UMID / SSS / GSIS" data-guide="Place UMID / SSS Card facing camera lens clearly.">
                        <div class="id-card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                                <line x1="7" y1="8" x2="17" y2="8"></line>
                                <line x1="7" y1="12" x2="11" y2="12"></line>
                            </svg>
                        </div>
                        <div class="id-card-info">
                            <h3 class="id-card-name">UMID / SSS / GSIS</h3>
                            <p class="id-card-desc">Unified Multi-Purpose ID</p>
                        </div>
                        <div class="id-card-check">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                    </div>

                    <div class="id-type-card" data-idtype="Student / Other Valid ID" data-guide="Ensure your Student / Company ID photo and text are readable.">
                        <div class="id-card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                        </div>
                        <div class="id-card-info">
                            <h3 class="id-card-name">Student / Other Valid ID</h3>
                            <p class="id-card-desc">School, Postal, or Company ID</p>
                        </div>
                        <div class="id-card-check">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                    </div>
                </div>

                <div class="action-footer-bar single-btn-bar">
                    <button class="button-primary action-btn-next" id="btnStartScanner">
                        <span>Open Camera Scanner</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- Stage 2: Camera Scanner Viewport -->
            <div class="capture-stage" id="stageScanner">
                <div class="scanner-layout-grid">
                    <!-- Scanner Feed Left -->
                    <div class="scanner-feed-card">
                        <div class="scanner-feed-header">
                            <div class="selected-id-pill">
                                <span class="pill-dot"></span>
                                <span id="selectedIDLabel">PhilID / National ID</span>
                            </div>
                            <span class="scanner-instruction" id="scannerGuideText">Align ID card inside the golden frame overlay.</span>
                        </div>

                        <div class="camera-viewport-box" id="cameraViewportBox">
                            <!-- Live Video Stream -->
                            <video id="webcamVideo" autoplay playsinline muted></video>

                            <!-- Hidden Canvas for Snapshot Capture -->
                            <canvas id="snapshotCanvas" style="display: none;"></canvas>

                            <!-- Accurate Aspect Ratio ID Card Scanner Target Frame -->
                            <div class="scanner-target-frame">
                                <div class="corner corner-tl"></div>
                                <div class="corner corner-tr"></div>
                                <div class="corner corner-bl"></div>
                                <div class="corner corner-br"></div>
                                <div class="scan-laser-line"></div>
                            </div>

                            <!-- Camera Fallback / Placeholder when camera denied or offline -->
                            <div class="camera-placeholder" id="cameraPlaceholder" style="display: none;">
                                <div class="placeholder-icon">
                                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                                </div>
                                <h4>Camera Feed Offline / Demo Mode</h4>
                                <p>Click <strong>Capture & Scan ID</strong> or <strong>Upload ID</strong> below.</p>
                            </div>
                        </div>

                        <!-- Scanner Control Buttons -->
                        <div class="scanner-controls-row">
                            <button type="button" class="scanner-btn scanner-btn-cancel" id="btnBackToSelection">
                                Change ID Type
                            </button>
                            
                            <button type="button" class="scanner-btn scanner-btn-capture" id="btnCaptureSnap">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4" fill="currentColor"/></svg>
                                Capture & Scan ID
                            </button>

                            <button type="button" class="scanner-btn scanner-btn-upload" id="btnTriggerUpload">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                                Upload ID
                            </button>
                            <input type="file" id="fileUploadInput" accept="image/*" style="display: none;">
                        </div>
                    </div>

                    <!-- Scanner Tips Panel Right -->
                    <div class="scanner-tips-card">
                        <h3 class="tips-title">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                            Scanning Guidelines
                        </h3>
                        <ul class="tips-list">
                            <li><strong>Good Lighting:</strong> Avoid heavy shadows or glare reflections on the card.</li>
                            <li><strong>Position Card:</strong> Fit card edges inside the golden frame box.</li>
                            <li><strong>Clear Details:</strong> Ensure Name and ID number are visible.</li>
                        </ul>
                        <div class="ocr-guarantee-badge">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            <span>OCR Auto-Fills your name to save time</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stage 3: ID Captured & OCR Data Preview -->
            <div class="capture-stage" id="stageReviewCaptured">
                <div class="section-title-box">
                    <h2 class="section-title">Step 1 Complete: Review Captured ID</h2>
                    <p class="section-subtitle">Verify your captured ID photo and extracted OCR details before proceeding.</p>
                </div>

                <div class="captured-review-grid">
                    <!-- Left Captured Photo Card -->
                    <div class="review-photo-card">
                        <h3 class="review-card-title">Captured ID Card Image</h3>
                        <div class="captured-image-frame">
                            <img id="capturedImagePreview" src="../assets/images/national-id.png" alt="Captured ID Preview">
                        </div>
                        <div class="photo-actions">
                            <button type="button" class="button-secondary retake-btn" id="btnRetakeScan">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 4v6h-6"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
                                Retake ID Scan
                            </button>
                        </div>
                    </div>

                    <!-- Right OCR Extracted Details Card -->
                    <div class="review-ocr-card">
                        <div class="ocr-card-header">
                            <div class="ocr-status-tag">
                                <span class="tag-dot"></span>
                                OCR Extraction Success (99.2% Accuracy)
                            </div>
                            <h3 class="review-card-title">Extracted Details</h3>
                        </div>

                        <div class="ocr-details-list">
                            <div class="ocr-detail-item">
                                <span class="detail-label">Document Type</span>
                                <span class="detail-value" id="ocrDocType">PhilID / National ID</span>
                            </div>
                            <div class="ocr-detail-item">
                                <span class="detail-label">Full Name</span>
                                <span class="detail-value highlight-value" id="ocrFullName">JUAN PEDRO DELA CRUZ</span>
                            </div>
                            <div class="ocr-detail-item">
                                <span class="detail-label">ID / Control Number</span>
                                <span class="detail-value" id="ocrIDNumber">1234-5678-9012-3456</span>
                            </div>
                            <div class="ocr-detail-item">
                                <span class="detail-label">Date of Birth</span>
                                <span class="detail-value" id="ocrDOB">JUNE 15, 1995</span>
                            </div>
                            <div class="ocr-detail-item">
                                <span class="detail-label">Address</span>
                                <span class="detail-value" id="ocrAddress">ORMOC CITY, LEYTE, PHILIPPINES</span>
                            </div>
                        </div>

                        <!-- Visitor Recognition Alert Card -->
                        <div class="visitor-status-alert returning-visitor" id="visitorRecognitionBox" style="margin-top: 1rem;">
                            <div class="status-alert-left">
                                <div class="status-alert-icon" id="recognitionIcon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <div>
                                    <div class="status-alert-title" id="recognitionTitle">✓ Returning Visitor Recognized</div>
                                    <div class="status-alert-sub" id="recognitionSub">Welcome back! Stored profile retrieved. Step 2 (Full Form) will be skipped.</div>
                                </div>
                            </div>
                            <button type="button" class="simulation-toggle-box" id="btnToggleVisitorMode" title="Click to test First-Time vs Returning Visitor mode">
                                <span id="toggleModeLabel">Mode: Returning</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 4v6h-6"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="action-footer-bar">
                    <button type="button" class="button-secondary action-btn-back" id="btnBackToScannerFromReview">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        Retake Scan
                    </button>
                    <button type="button" class="button-primary action-btn-next" id="btnProceedToNextStep">
                        <span id="btnProceedText">Proceed to Visit Purpose & Person to Visit</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </main>

    <!-- Page JavaScript Flow -->
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

            // Elements
            const stageSelectID = document.getElementById('stageSelectID');
            const stageScanner = document.getElementById('stageScanner');
            const stageReviewCaptured = document.getElementById('stageReviewCaptured');

            const idCards = document.querySelectorAll('.id-type-card');
            const btnStartScanner = document.getElementById('btnStartScanner');
            const selectedIDLabel = document.getElementById('selectedIDLabel');
            const scannerGuideText = document.getElementById('scannerGuideText');

            const webcamVideo = document.getElementById('webcamVideo');
            const snapshotCanvas = document.getElementById('snapshotCanvas');
            const cameraPlaceholder = document.getElementById('cameraPlaceholder');
            
            const btnBackToSelection = document.getElementById('btnBackToSelection');
            const btnCaptureSnap = document.getElementById('btnCaptureSnap');
            const btnTriggerUpload = document.getElementById('btnTriggerUpload');
            const fileUploadInput = document.getElementById('fileUploadInput');

            const capturedImagePreview = document.getElementById('capturedImagePreview');
            const btnRetakeScan = document.getElementById('btnRetakeScan');
            const btnBackToScannerFromReview = document.getElementById('btnBackToScannerFromReview');
            const btnProceedToPhoto = document.getElementById('btnProceedToPhoto');

            const ocrDocType = document.getElementById('ocrDocType');

            let selectedIDType = "PhilID / National ID";
            let selectedGuide = "Align front side of PhilID / National ID inside the scanner frame.";
            let mediaStream = null;

            // ID Type Selection Handler
            idCards.forEach(card => {
                card.addEventListener('click', function() {
                    idCards.forEach(c => c.classList.remove('active'));
                    this.classList.add('active');
                    selectedIDType = this.getAttribute('data-idtype');
                    selectedGuide = this.getAttribute('data-guide');
                });
            });

            // Start Camera Scanner
            btnStartScanner.addEventListener('click', function() {
                stageSelectID.classList.remove('active-stage');
                stageScanner.classList.add('active-stage');
                selectedIDLabel.textContent = selectedIDType;
                scannerGuideText.textContent = selectedGuide;

                startWebcam();
            });

            // Webcam Initialization
            async function startWebcam() {
                try {
                    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                        mediaStream = await navigator.mediaDevices.getUserMedia({
                            video: { width: { ideal: 1280 }, height: { ideal: 720 }, facingMode: "environment" }
                        });
                        webcamVideo.srcObject = mediaStream;
                        webcamVideo.style.display = 'block';
                        cameraPlaceholder.style.display = 'none';
                    } else {
                        showCameraFallback();
                    }
                } catch (err) {
                    console.warn("Camera access unavailable or denied. Showing demo mode fallback.", err);
                    showCameraFallback();
                }
            }

            function stopWebcam() {
                if (mediaStream) {
                    mediaStream.getTracks().forEach(track => track.stop());
                    mediaStream = null;
                }
            }

            function showCameraFallback() {
                webcamVideo.style.display = 'none';
                cameraPlaceholder.style.display = 'flex';
            }

            // Back to ID Selection
            btnBackToSelection.addEventListener('click', function() {
                stopWebcam();
                stageScanner.classList.remove('active-stage');
                stageSelectID.classList.add('active-stage');
            });

            // Capture Snapshot
            btnCaptureSnap.addEventListener('click', function() {
                if (mediaStream && webcamVideo.videoWidth) {
                    snapshotCanvas.width = webcamVideo.videoWidth;
                    snapshotCanvas.height = webcamVideo.videoHeight;
                    const ctx = snapshotCanvas.getContext('2d');
                    ctx.drawImage(webcamVideo, 0, 0, snapshotCanvas.width, snapshotCanvas.height);
                    capturedImagePreview.src = snapshotCanvas.toDataURL('image/png');
                } else {
                    // Fallback demo image if webcam was offline
                    capturedImagePreview.src = '../assets/images/national-id.png';
                }
                showReviewStage();
            });

            // File Upload Fallback
            btnTriggerUpload.addEventListener('click', function() {
                fileUploadInput.click();
            });

            fileUploadInput.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(evt) {
                        capturedImagePreview.src = evt.target.result;
                        showReviewStage();
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            // Visitor Database Registry (Pre-seeded with demo returning visitors)
            const defaultRegistry = [
                {
                    idNumber: "1234-5678-9012-3456",
                    fullName: "JUAN PEDRO DELA CRUZ",
                    idType: "PhilID / National ID",
                    gender: "Male",
                    mobile: "+63 917 123 4567",
                    address: "Brgy. Zone 1, Ormoc City, Leyte",
                    photo: "../assets/images/evsu_logo.png"
                },
                {
                    idNumber: "9876-5432-1098-7654",
                    fullName: "MARIA CLARA SANTOS",
                    idType: "PhilID / National ID",
                    gender: "Female",
                    mobile: "+63 920 987 6543",
                    address: "Brgy. San Jose, Ormoc City, Leyte",
                    photo: "../assets/images/evsu_logo.png"
                }
            ];
            if (!localStorage.getItem('ivmis_visitor_registry')) {
                localStorage.setItem('ivmis_visitor_registry', JSON.stringify(defaultRegistry));
            }

            let isReturningVisitor = true;
            let currentVisitorRecord = null;

            const visitorBox = document.getElementById('visitorRecognitionBox');
            const recognitionTitle = document.getElementById('recognitionTitle');
            const recognitionSub = document.getElementById('recognitionSub');
            const toggleModeLabel = document.getElementById('toggleModeLabel');
            const btnToggleVisitorMode = document.getElementById('btnToggleVisitorMode');
            const btnProceedToNextStep = document.getElementById('btnProceedToNextStep');
            const btnProceedText = document.getElementById('btnProceedText');

            function applyVisitorModeUI(isReturning, record) {
                isReturningVisitor = isReturning;
                currentVisitorRecord = record;

                if (isReturningVisitor) {
                    visitorBox.className = 'visitor-status-alert returning-visitor';
                    recognitionTitle.textContent = '✓ Returning Visitor Recognized';
                    const nameStr = record ? record.fullName : 'JUAN PEDRO DELA CRUZ';
                    recognitionSub.textContent = `Welcome back, ${nameStr}! Stored profile retrieved. Step 2 (Full Form) will be skipped.`;
                    toggleModeLabel.textContent = 'Mode: Returning';
                    btnProceedText.textContent = 'Proceed to Purpose & Person to Visit';

                    sessionStorage.setItem('isReturningVisitor', 'true');
                    sessionStorage.setItem('visitorName', nameStr);
                    sessionStorage.setItem('visitorIDType', record ? record.idType : selectedIDType);
                    sessionStorage.setItem('visitorIDNum', record ? record.idNumber : '1234-5678-9012-3456');
                    sessionStorage.setItem('visitorGender', record ? record.gender : 'Male');
                    sessionStorage.setItem('visitorPhone', record ? record.mobile : '+63 917 123 4567');
                    sessionStorage.setItem('visitorAddress', record ? record.address : 'Brgy. Zone 1, Ormoc City, Leyte');
                    if (record && record.photo) {
                        sessionStorage.setItem('visitorPhoto', record.photo);
                    }
                } else {
                    visitorBox.className = 'visitor-status-alert first-time-visitor';
                    recognitionTitle.textContent = 'ℹ️ First-Time Visitor Detected';
                    recognitionSub.textContent = 'No existing record found for this ID. First-time registration required.';
                    toggleModeLabel.textContent = 'Mode: First-Time';
                    btnProceedText.textContent = 'Proceed to Full Registration Form';

                    sessionStorage.setItem('isReturningVisitor', 'false');
                    const ocrName = document.getElementById('ocrFullName').textContent || 'JUAN PEDRO DELA CRUZ';
                    const ocrNum = document.getElementById('ocrIDNumber').textContent || '1234-5678-9012-3456';
                    const ocrAddr = document.getElementById('ocrAddress').textContent || 'Ormoc City, Leyte';
                    sessionStorage.setItem('visitorName', ocrName);
                    sessionStorage.setItem('visitorIDType', selectedIDType);
                    sessionStorage.setItem('visitorIDNum', ocrNum);
                    sessionStorage.setItem('visitorAddress', ocrAddr);
                }
            }

            function showReviewStage() {
                stopWebcam();
                stageScanner.classList.remove('active-stage');
                stageReviewCaptured.classList.add('active-stage');
                ocrDocType.textContent = selectedIDType;

                const ocrNum = document.getElementById('ocrIDNumber').textContent.trim();
                const ocrName = document.getElementById('ocrFullName').textContent.trim();
                
                const registry = JSON.parse(localStorage.getItem('ivmis_visitor_registry') || '[]');
                const match = registry.find(v => v.idNumber === ocrNum || v.fullName.toLowerCase() === ocrName.toLowerCase());

                if (match) {
                    applyVisitorModeUI(true, match);
                } else {
                    applyVisitorModeUI(false, null);
                }
            }

            // Interactive Toggle for Demo Testing
            btnToggleVisitorMode.addEventListener('click', function(e) {
                e.stopPropagation();
                const registry = JSON.parse(localStorage.getItem('ivmis_visitor_registry') || '[]');
                const match = registry[0] || null;
                applyVisitorModeUI(!isReturningVisitor, !isReturningVisitor ? match : null);
            });

            // Retake Handlers
            btnRetakeScan.addEventListener('click', function() {
                stageReviewCaptured.classList.remove('active-stage');
                stageScanner.classList.add('active-stage');
                startWebcam();
            });

            btnBackToScannerFromReview.addEventListener('click', function() {
                stageReviewCaptured.classList.remove('active-stage');
                stageScanner.classList.add('active-stage');
                startWebcam();
            });

            // Proceed Action based on Visitor Mode
            btnProceedToNextStep.addEventListener('click', function() {
                if (isReturningVisitor) {
                    // Returning visitor skips Step 2 and goes straight to Step 3 (capture-photo.php)
                    window.location.href = 'capture-photo.php';
                } else {
                    // First-Time visitor completes Step 2 (registration-form.php)
                    window.location.href = 'registration-form.php';
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