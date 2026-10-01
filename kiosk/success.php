<?php include '../templates/header.php'; ?>
    <div class="kiosk-layout">
        <!-- Top Navigation Bar & Progress Header -->
        <div class="kiosk-top-nav-bar">
            <a href="index.php" class="kiosk-back-btn" title="Return to Main Welcome Screen">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>Return to Home</span>
            </a>

            <div class="kiosk-progress-card">
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 100%;"></div>
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
                    <div class="progress-step completed-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">Review</span>
                    </div>
                    <div class="progress-step completed-step active-step">
                        <span class="step-num">✓</span>
                        <span class="step-lbl">Get QR Pass</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Success Step Container -->
        <div class="success-container-card">
            <!-- Hero Title Box -->
            <div class="success-hero-box">
                <div class="success-icon-badge">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <h2 class="success-hero-title">Registration Complete!</h2>
                <p class="success-hero-subtitle">Your official EVSU Campus Visitor QR Pass has been successfully generated. Present this digital pass or physical printout at the security checkpoint.</p>
            </div>

            <!-- Official Printable Visitor Pass Ticket / Badge -->
            <div class="visitor-pass-badge" id="visitorPassBadge">
                <div class="pass-badge-header">
                    <div class="pass-header-brand">
                        <img src="../assets/images/evsu_logo.png" alt="EVSU Logo" class="pass-header-logo">
                        <div class="pass-header-titles">
                            <h3>EASTERN VISAYAS STATE UNIVERSITY</h3>
                            <p>Ormoc City Campus • Visitor Management System</p>
                        </div>
                    </div>
                    <span class="pass-type-tag">VISITOR PASS</span>
                </div>

                <div class="pass-badge-body">
                    <!-- QR Code Column -->
                    <div class="pass-qr-column">
                        <div class="pass-qr-frame" id="qrCodeContainer">
                            <!-- Dynamic / High-Contrast Vector QR Code SVG -->
                            <svg viewBox="0 0 100 100" width="150" height="150" fill="currentColor">
                                <path d="M0,0 h35 v35 h-35 z M5,5 v25 h25 v-25 z M10,10 h15 v15 h-15 z" fill="#0f172a"/>
                                <path d="M65,0 h35 v35 h-35 z M70,5 v25 h25 v-25 z M75,10 h15 v15 h-15 z" fill="#0f172a"/>
                                <path d="M0,65 h35 v35 h-35 z M5,70 v25 h25 v-25 z M10,75 h15 v15 h-15 z" fill="#0f172a"/>
                                <!-- QR Matrix pattern blocks -->
                                <rect x="42" y="5" width="6" height="6" fill="#0f172a"/>
                                <rect x="52" y="5" width="6" height="6" fill="#0f172a"/>
                                <rect x="42" y="15" width="16" height="6" fill="#0f172a"/>
                                <rect x="42" y="25" width="6" height="12" fill="#0f172a"/>
                                <rect x="52" y="30" width="12" height="6" fill="#0f172a"/>
                                <rect x="5" y="42" width="6" height="16" fill="#0f172a"/>
                                <rect x="15" y="42" width="12" height="6" fill="#0f172a"/>
                                <rect x="30" y="42" width="18" height="6" fill="#0f172a"/>
                                <rect x="52" y="42" width="8" height="8" fill="#8b0000"/>
                                <rect x="65" y="42" width="15" height="6" fill="#0f172a"/>
                                <rect x="85" y="42" width="10" height="6" fill="#0f172a"/>
                                <rect x="15" y="52" width="6" height="8" fill="#0f172a"/>
                                <rect x="25" y="52" width="12" height="6" fill="#0f172a"/>
                                <rect x="42" y="55" width="6" height="15" fill="#0f172a"/>
                                <rect x="52" y="55" width="15" height="6" fill="#0f172a"/>
                                <rect x="72" y="52" width="6" height="16" fill="#0f172a"/>
                                <rect x="85" y="52" width="10" height="10" fill="#0f172a"/>
                                <rect x="42" y="75" width="15" height="6" fill="#0f172a"/>
                                <rect x="62" y="75" width="8" height="20" fill="#0f172a"/>
                                <rect x="75" y="72" width="20" height="6" fill="#0f172a"/>
                                <rect x="75" y="85" width="20" height="10" fill="#0f172a"/>
                                <rect x="52" y="85" width="6" height="10" fill="#0f172a"/>
                            </svg>
                        </div>
                        <div class="pass-code-number" id="passCodeDisplay">EVSU-VIS-2026-894215</div>
                    </div>

                    <!-- Minimal Visitor Info Column -->
                    <div class="pass-info-column">
                        <div class="pass-visitor-name-box">
                            <span class="pass-visitor-label">Visitor Full Name</span>
                            <h2 class="pass-visitor-name" id="passVisitorName">JUAN PEDRO DELA CRUZ</h2>
                        </div>

                        <div class="pass-details-mini-grid">
                            <div class="pass-detail-item">
                                <span class="pass-detail-lbl">Purpose of Visit</span>
                                <span class="pass-detail-val" id="passPurpose">Official University Business</span>
                            </div>
                            <div class="pass-detail-item">
                                <span class="pass-detail-lbl">Person to Visit</span>
                                <span class="pass-detail-val" id="passPersonToVisit">N/A - General Campus Visit</span>
                            </div>
                            <div class="pass-detail-item">
                                <span class="pass-detail-lbl">Date Issued</span>
                                <span class="pass-detail-val" id="passDateIssued">September 10, 2026</span>
                            </div>
                            <div class="pass-detail-item">
                                <span class="pass-detail-lbl">Pass Validity</span>
                                <span class="pass-detail-val" style="color: #16a34a;">Valid Today Only</span>
                            </div>
                        </div>

                        <div class="pass-status-pill">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="#16a34a"><circle cx="12" cy="12" r="10"/></svg>
                            <span>STATUS: ACTIVE / GRANTED</span>
                        </div>
                    </div>
                </div>

                <div class="pass-badge-footer">
                    <span>EVSU-Ormoc Security & Safety Office</span>
                    <span>IVMIS Automated Pass System</span>
                </div>
            </div>

            <!-- Action Buttons Row -->
            <div class="success-actions-row">
                <!-- Button 1: Print Pass -->
                <button type="button" class="button-primary btn-print-pass" id="btnPrintPass">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                    <span>Print Visitor Pass</span>
                </button>

                <!-- Button 2: Download Digital Pass -->
                <button type="button" class="button-secondary btn-download-pass" id="btnDownloadPass">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    <span>Download Pass Image</span>
                </button>

                <!-- Button 3: Finish & Register New Visitor -->
                <button type="button" class="button-secondary btn-finish-kiosk" id="btnFinishSession">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <span>Finish Session</span>
                </button>
            </div>
        </div>
    </div>
    </main>

    <!-- Script for Dynamic Pass Data, Printing, Download & Session Reset -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Live clock update
            const clockTime = document.getElementById('clockTime');
            const clockDate = document.getElementById('clockDate');
            function updateClock() {
                const now = new Date();
                if (clockTime) clockTime.textContent = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true });
                if (clockDate) clockDate.textContent = now.toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
            }
            updateClock();
            setInterval(updateClock, 1000);

            // Read session data or provide defaults
            const passID = sessionStorage.getItem('visitorPassID') || ('EVSU-VIS-2026-' + Math.floor(100000 + Math.random() * 900000));
            const name = sessionStorage.getItem('visitorName') || 'JUAN PEDRO DELA CRUZ';
            const purpose = sessionStorage.getItem('visitorPurpose') || 'Official University Business';
            const personToVisit = sessionStorage.getItem('visitorPersonToVisit') || 'N/A - General Campus Visit';

            document.getElementById('passCodeDisplay').textContent = passID;
            document.getElementById('passVisitorName').textContent = name;
            document.getElementById('passPurpose').textContent = purpose;
            document.getElementById('passPersonToVisit').textContent = personToVisit;

            const dateStr = new Date().toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
            document.getElementById('passDateIssued').textContent = dateStr;

            // 1. Print Pass Action
            document.getElementById('btnPrintPass').addEventListener('click', function() {
                window.print();
            });

            // 2. Download Digital Pass Action (Export Pass HTML as Canvas Data URL image download)
            document.getElementById('btnDownloadPass').addEventListener('click', function() {
                const badge = document.getElementById('visitorPassBadge');
                
                // Create SVG Data URL snippet for quick image download
                const passData = `
                <svg xmlns="http://www.w3.org/2000/svg" width="600" height="380">
                    <rect width="100%" height="100%" fill="#ffffff" rx="20" stroke="#0f172a" stroke-width="4"/>
                    <rect width="100%" height="65" fill="#8b0000"/>
                    <text x="30" y="38" font-family="Arial" font-size="18" font-weight="bold" fill="#ffffff">EASTERN VISAYAS STATE UNIVERSITY</text>
                    <text x="30" y="55" font-family="Arial" font-size="12" fill="#d4af37">ORMOC CAMPUS - VISITOR PASS</text>
                    
                    <!-- QR Box Mock -->
                    <rect x="30" y="85" width="160" height="160" fill="#ffffff" stroke="#0f172a" stroke-width="2" rx="10"/>
                    <text x="55" y="170" font-family="Courier" font-size="16" font-weight="bold" fill="#8b0000">[ QR CODE ]</text>
                    <text x="30" y="270" font-family="Courier" font-size="14" font-weight="bold" fill="#0f172a">${passID}</text>

                    <!-- Details -->
                    <text x="220" y="105" font-family="Arial" font-size="12" fill="#64748b" font-weight="bold">VISITOR NAME:</text>
                    <text x="220" y="130" font-family="Arial" font-size="20" fill="#8b0000" font-weight="bold">${name}</text>

                    <text x="220" y="165" font-family="Arial" font-size="12" fill="#64748b">PURPOSE:</text>
                    <text x="220" y="185" font-family="Arial" font-size="14" fill="#0f172a" font-weight="bold">${purpose}</text>

                    <text x="220" y="215" font-family="Arial" font-size="12" fill="#64748b">PERSON TO VISIT:</text>
                    <text x="220" y="235" font-family="Arial" font-size="14" fill="#0f172a" font-weight="bold">${personToVisit}</text>

                    <text x="220" y="270" font-family="Arial" font-size="12" fill="#16a34a" font-weight="bold">STATUS: VALID TODAY ONLY (${dateStr})</text>
                    
                    <rect y="335" width="100%" height="45" fill="#f8fafc" stroke="#e2e8f0"/>
                    <text x="30" y="362" font-family="Arial" font-size="12" fill="#64748b">IVMIS Automated Security Visitor Pass Ticket</text>
                </svg>`;

                const blob = new Blob([passData], { type: 'image/svg+xml;charset=utf-8' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = passID + '-Pass.svg';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            });

            // 3. Finish Session Action
            document.getElementById('btnFinishSession').addEventListener('click', function() {
                sessionStorage.clear();
                window.location.href = 'index.php';
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