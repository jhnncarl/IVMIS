<?php include '../templates/header.php'; ?>
    <div class="kiosk-layout">
        <!-- Top Navigation Bar & Progress Header -->
        <div class="kiosk-top-nav-bar">
            <a href="capture-photo.php" class="kiosk-back-btn" title="Return to Purpose & Person to Visit">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                <span>Back to Purpose & Person to Visit</span>
            </a>

            <div class="kiosk-progress-card">
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 80%;"></div>
                </div>
                <div class="progress-labels">
                    <div class="progress-step completed-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">ID Selection & Scan</span>
                    </div>
                    <div class="progress-step completed-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">Verify OCR Info</span>
                    </div>
                    <div class="progress-step completed-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">Purpose & Person to Visit</span>
                    </div>
                    <div class="progress-step active-step">
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
        <div class="review-container-card">
            <div class="section-title-box">
                <div class="title-with-badge">
                    <h2 class="section-title">Step 4: Review Your Registration Details</h2>
                    <span class="ocr-verified-badge" id="revStatusBadge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Ready for Confirmation
                    </span>
                </div>
                <p class="section-subtitle">Please verify all extracted and entered information below before confirming your visitor entry pass.</p>
            </div>

            <!-- Bento Summary Grid -->
            <div class="review-grid-layout">
                <!-- Column 1: Visitor Identity & Contact Details -->
                <div class="review-info-section">
                    <div class="review-section-header">
                        <h3>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            Visitor Identification
                        </h3>
                        <a href="registration-form.php" class="edit-step-link" id="revEditDetailsBtn" title="Edit Contact Information">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            Edit Details
                        </a>
                    </div>

                    <!-- Scanned Photo & Avatar Media -->
                    <div class="visitor-media-preview-box">
                        <img id="revPhotoImg" src="../assets/images/evsu_logo.png" alt="Visitor Headshot" class="media-preview-avatar">
                        <div class="media-preview-labels">
                            <div class="label-title" id="revHeaderFullName">JUAN PEDRO DELA CRUZ</div>
                            <span class="label-badge" id="revVisitorTypeBadge">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                Verified Visitor
                            </span>
                        </div>
                    </div>

                    <!-- Key Data List -->
                    <div class="review-data-list">
                        <div class="review-data-item">
                            <span class="review-data-label">Full Name</span>
                            <span class="review-data-value highlight-val" id="revFullName">JUAN PEDRO DELA CRUZ</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">ID Document Type</span>
                            <span class="review-data-value" id="revIDType">PhilID / National ID</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">ID / Control Number</span>
                            <span class="review-data-value" id="revIDNumber">1234-5678-9012-3456</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">Gender / Sex</span>
                            <span class="review-data-value" id="revGender">Male</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">Contact Number</span>
                            <span class="review-data-value" id="revMobile">+63 917 123 4567</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">Complete Address</span>
                            <span class="review-data-value" id="revAddress">Brgy. Zone 1, Ormoc City, Leyte</span>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Destination & Purpose of Visit -->
                <div class="review-info-section">
                    <div class="review-section-header">
                        <h3>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Visit Details
                        </h3>
                        <a href="capture-photo.php" class="edit-step-link" title="Edit Purpose or Person to Visit">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            Edit Purpose
                        </a>
                    </div>

                    <div class="review-data-list">
                        <div class="review-data-item">
                            <span class="review-data-label">Purpose of Visit</span>
                            <span class="review-data-value">
                                <span class="purpose-badge-pill" id="revPurpose">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 11h12M6 15h12M9 3h6v4H9z"/></svg>
                                    Official University Business
                                </span>
                            </span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">Person to Visit</span>
                            <span class="review-data-value highlight-val" id="revPersonToVisit">N/A - General Campus Visit</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">Campus Location</span>
                            <span class="review-data-value">EVSU - Ormoc Campus</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">Date & Time of Entry</span>
                            <span class="review-data-value" id="revEntryTime">Loading date...</span>
                        </div>
                        <div class="review-data-item">
                            <span class="review-data-label">Pass Validity</span>
                            <span class="review-data-value" style="color: #16a34a;">Valid Today Only</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accuracy & Terms Confirmation Card -->
            <div class="review-consent-card">
                <label class="review-consent-checkbox" for="revConsentCheck">
                    <div class="checkbox-custom" style="margin-top: 2px;">
                        <input type="checkbox" id="revConsentCheck" checked style="display: none;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </div>
                    <span class="review-consent-text">
                        <strong>Accuracy & Compliance Declaration:</strong> I hereby certify that all information presented above is accurate and complete. I undertake to comply with all EVSU-Ormoc campus safety regulations, security checkpoints, and visitor protocol while on campus grounds.
                    </span>
                </label>
            </div>

            <!-- Action Navigation Footer -->
            <div class="action-footer-bar" style="display: flex; justify-content: space-between; align-items: center; width: 100%; border-top: 1px solid #e2e8f0; padding-top: 1.5rem;">
                <a href="capture-photo.php" class="button-secondary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    <span>Back to Purpose & Person to Visit</span>
                </a>

                <button type="button" class="button-primary action-btn-next" id="btnConfirmRegistration">
                    <span>Confirm & Generate Pass</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    </main>

    <!-- Script to load dynamic details from sessionStorage -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Live clock logic if header clock exists
            const clockTime = document.getElementById('clockTime');
            const clockDate = document.getElementById('clockDate');
            function updateClock() {
                const now = new Date();
                if (clockTime) clockTime.textContent = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true });
                if (clockDate) clockDate.textContent = now.toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
            }
            updateClock();
            setInterval(updateClock, 1000);

            // Populate Review details from sessionStorage or fallbacks
            const isReturning = sessionStorage.getItem('isReturningVisitor') === 'true';
            const name = sessionStorage.getItem('visitorName') || 'JUAN PEDRO DELA CRUZ';
            const idType = sessionStorage.getItem('visitorIDType') || 'PhilID / National ID';
            const idNum = sessionStorage.getItem('visitorIDNum') || '1234-5678-9012-3456';
            const gender = sessionStorage.getItem('visitorGender') || 'Male';
            const phone = sessionStorage.getItem('visitorPhone') || '+63 917 123 4567';
            const address = sessionStorage.getItem('visitorAddress') || 'Brgy. Zone 1, Ormoc City, Leyte';
            const purpose = sessionStorage.getItem('visitorPurpose') || 'Official University Business';
            const personToVisit = sessionStorage.getItem('visitorPersonToVisit') || 'N/A - General Campus Visit';
            const photo = sessionStorage.getItem('visitorPhoto');

            document.getElementById('revFullName').textContent = name;
            document.getElementById('revHeaderFullName').textContent = name;
            document.getElementById('revIDType').textContent = idType;
            document.getElementById('revIDNumber').textContent = idNum;
            document.getElementById('revGender').textContent = gender;
            document.getElementById('revMobile').textContent = phone;
            document.getElementById('revAddress').textContent = address;
            document.getElementById('revPurpose').textContent = purpose;
            document.getElementById('revPersonToVisit').textContent = personToVisit;

            const badgeElem = document.getElementById('revVisitorTypeBadge');
            const revEditDetailsBtn = document.getElementById('revEditDetailsBtn');

            if (isReturning) {
                badgeElem.className = 'label-badge';
                badgeElem.style.background = '#dcfce7';
                badgeElem.style.color = '#15803d';
                badgeElem.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Returning Visitor';
                
                // Hide edit details link for returning visitor since step 2 was bypassed
                if (revEditDetailsBtn) revEditDetailsBtn.style.display = 'none';
            } else {
                badgeElem.className = 'label-badge';
                badgeElem.style.background = '#dbeafe';
                badgeElem.style.color = '#1d4ed8';
                badgeElem.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><circle cx="12" cy="12" r="10"></circle></svg> First-Time Visitor';
            }

            const nowStr = new Date().toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }) + ' | ' + new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
            document.getElementById('revEntryTime').textContent = nowStr;

            if (photo) {
                document.getElementById('revPhotoImg').src = photo;
            }

            // Consent Checkbox Toggle Custom CSS sync
            const consentCheck = document.getElementById('revConsentCheck');
            const consentWrapper = consentCheck.closest('.review-consent-checkbox');
            const customCheckbox = consentWrapper.querySelector('.checkbox-custom');

            consentWrapper.addEventListener('click', function(e) {
                if (e.target !== consentCheck) {
                    consentCheck.checked = !consentCheck.checked;
                }
                const svg = customCheckbox.querySelector('svg');
                if (consentCheck.checked) {
                    customCheckbox.style.background = 'var(--primary-maroon)';
                    customCheckbox.style.borderColor = 'var(--primary-maroon)';
                    if (svg) svg.style.opacity = '1';
                } else {
                    customCheckbox.style.background = '#ffffff';
                    customCheckbox.style.borderColor = '#cbd5e1';
                    if (svg) svg.style.opacity = '0';
                }
            });

            // Confirm Button Action - Save Visitor Profile without Duplicates
            const btnConfirm = document.getElementById('btnConfirmRegistration');
            btnConfirm.addEventListener('click', function() {
                if (!consentCheck.checked) {
                    alert('Please accept the accuracy declaration before confirming.');
                    return;
                }

                // Update / Save Visitor Profile in localStorage registry (preventing duplicate records)
                const registry = JSON.parse(localStorage.getItem('ivmis_visitor_registry') || '[]');
                const existingIndex = registry.findIndex(v => v.idNumber === idNum || v.fullName.toLowerCase() === name.toLowerCase());

                const updatedProfile = {
                    idNumber: idNum,
                    fullName: name,
                    idType: idType,
                    gender: gender,
                    mobile: phone,
                    address: address,
                    photo: photo || '../assets/images/evsu_logo.png',
                    lastVisited: new Date().toISOString()
                };

                if (existingIndex >= 0) {
                    // Update existing record (no duplicate)
                    registry[existingIndex] = { ...registry[existingIndex], ...updatedProfile };
                } else {
                    // Insert new first-time visitor record
                    registry.push(updatedProfile);
                }

                localStorage.setItem('ivmis_visitor_registry', JSON.stringify(registry));

                // Generate Pass Reference Code e.g. EVSU-VIS-2026-894215
                const randomNum = Math.floor(100000 + Math.random() * 900000);
                const passID = 'EVSU-VIS-2026-' + randomNum;

                sessionStorage.setItem('visitorPassID', passID);
                sessionStorage.setItem('visitorPassTimestamp', new Date().toISOString());

                // Proceed to Step 5: Success
                window.location.href = 'success.php';
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