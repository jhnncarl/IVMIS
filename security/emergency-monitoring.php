<?php
/**
 * Security Guard – Emergency Monitoring Interface
 * IVMIS (Intelligent Visitor Management Information System)
 * EVSU – Ormoc Campus
 */

$pageTitle   = 'Emergency Monitoring';
$userRole    = 'security';
$currentPage = 'emergency-monitoring';

require_once '../templates/portal-header.php';
?>

<!-- Security Guard Emergency Monitoring Stylesheet -->
<link rel="stylesheet" href="../assets/css/emergency-monitoring.css?v=<?php echo time(); ?>">

<div class="emergency-monitoring-container">
    
    <!-- Page Header -->
    <div class="emergency-header-card">
        <div class="emergency-header-title-box">
            <h1>Emergency Monitoring</h1>
            <p class="emergency-header-subtitle">View all visitors currently inside the campus during an emergency.</p>
        </div>
        <div class="emergency-timestamp-badge">
            <span class="emergency-timestamp-dot"></span>
            <span id="liveTimestampText">Live Status · Campus Accountability</span>
        </div>
    </div>

    <!-- Primary Visitor Count Summary Card -->
    <div class="emergency-summary-grid">
        <div class="emergency-count-card">
            <div class="count-card-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
            </div>
            <div class="count-card-content">
                <div class="count-card-value" id="activeVisitorCount">0</div>
                <div class="count-card-label">Visitors Currently Inside</div>
                <div class="count-card-subtext">Checked in · Time Out pending</div>
            </div>
        </div>
    </div>

    <!-- Current Visitors Section -->
    <div class="emergency-section-card">
        <div class="emergency-section-header">
            <div class="section-header-title">
                <h2>Visitors Currently Inside</h2>
            </div>
            
            <!-- Search Control -->
            <div class="emergency-search-bar">
                <svg class="emergency-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
                <input type="text" id="emergencyVisitorSearch" class="emergency-search-input" placeholder="Search visitor..." autocomplete="off">
            </div>
        </div>

        <!-- Desktop & Tablet Responsive Table -->
        <div class="table-responsive-container" id="tableContainer">
            <table class="emergency-table">
                <thead>
                    <tr>
                        <th>Visitor</th>
                        <th>Time In</th>
                        <th>Purpose of Visit</th>
                        <th>Person to Visit</th>
                        <th style="text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody id="emergencyTableBody">
                    <!-- Dynamic Rows Rendered by JS -->
                </tbody>
            </table>
        </div>

        <!-- Mobile Visitor Cards View (Visible on Small Screens) -->
        <div class="emergency-cards-mobile-grid" id="mobileCardsGrid">
            <!-- Dynamic Cards Rendered by JS -->
        </div>

        <!-- Empty State Container -->
        <div class="emergency-empty-state" id="emptyStateBox" style="display: none;">
            <div class="empty-state-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <line x1="18" y1="8" x2="23" y2="13"/>
                    <line x1="23" y1="8" x2="18" y2="13"/>
                </svg>
            </div>
            <div class="empty-state-title">No Visitors Currently Inside</div>
            <div class="empty-state-subtext">There are currently no active visitors inside the campus.</div>
        </div>

    </div>

</div>

<!-- Visitor Details Modal -->
<div class="modal-overlay" id="emergencyDetailModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="modal-card">
        <div class="modal-header">
            <h3>Visitor Details</h3>
            <button class="modal-close-btn" id="btnCloseDetailModal" aria-label="Close Modal">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <div class="modal-visitor-profile">
                <img id="modalVisitorPhoto" src="" alt="Visitor Photo" class="modal-visitor-avatar" style="display: none;">
                <div id="modalVisitorInitials" class="modal-visitor-avatar">--</div>
                <div class="modal-visitor-name-box">
                    <div class="modal-visitor-name" id="modalVisitorName">--</div>
                    <div class="modal-status-pill">
                        <span style="width: 6px; height: 6px; border-radius: 50%; background: #166534;"></span>
                        Currently Inside Campus
                    </div>
                </div>
            </div>

            <div class="modal-details-grid">
                <div class="modal-field-item">
                    <span class="modal-field-label">Visitor ID / Reference</span>
                    <span class="modal-field-value" id="modalVisitorID">--</span>
                </div>
                <div class="modal-field-item">
                    <span class="modal-field-label">Time In</span>
                    <span class="modal-field-value" id="modalTimeIn">--</span>
                </div>
                <div class="modal-field-item">
                    <span class="modal-field-label">Purpose of Visit</span>
                    <span class="modal-field-value" id="modalPurpose">--</span>
                </div>
                <div class="modal-field-item">
                    <span class="modal-field-label">Person to Visit</span>
                    <span class="modal-field-value" id="modalPersonToVisit">--</span>
                </div>
                <div class="modal-field-item full-width">
                    <span class="modal-field-label">Current Visit Date</span>
                    <span class="modal-field-value" id="modalVisitDate">--</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn-modal-close" id="btnModalCloseAction">Close</button>
        </div>
    </div>
</div>

<!-- Emergency Monitoring Interactive Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Current Active Visitors Dataset (Visitors with Time In recorded and Time Out empty)
    const currentVisitorsData = [
        {
            id: 'V-2026-00124',
            name: 'Juan Dela Cruz',
            photo: '',
            initials: 'JC',
            timeIn: '8:42 AM',
            purpose: 'Official Business',
            personToVisit: 'Dr. Santos',
            date: 'October 8, 2026'
        },
        {
            id: 'V-2026-00128',
            name: 'Maria Santos',
            photo: '',
            initials: 'MS',
            timeIn: '9:05 AM',
            purpose: 'Academic / Student Inquiry',
            personToVisit: "Registrar's Office",
            date: 'October 8, 2026'
        },
        {
            id: 'V-2026-00131',
            name: 'Liza Gomez',
            photo: '',
            initials: 'LG',
            timeIn: '9:30 AM',
            purpose: '', // Purpose empty -> displays '—'
            personToVisit: 'Admissions Desk',
            date: 'October 8, 2026'
        },
        {
            id: 'V-2026-00135',
            name: 'Ramon Aquino',
            photo: '',
            initials: 'RA',
            timeIn: '9:48 AM',
            purpose: 'Delivery / Supplier / Contractor',
            personToVisit: '', // Person empty -> displays '—'
            date: 'October 8, 2026'
        },
        {
            id: 'V-2026-00140',
            name: 'Josefa Bautista',
            photo: '',
            initials: 'JB',
            timeIn: '10:12 AM',
            purpose: 'Personal Visit / Meeting',
            personToVisit: 'Prof. L. Villanueva',
            date: 'October 8, 2026'
        },
        {
            id: 'V-2026-00142',
            name: 'Mark Tan',
            photo: '',
            initials: 'MT',
            timeIn: '10:25 AM',
            purpose: 'Equipment Repair',
            personToVisit: 'Maintenance Office',
            date: 'October 8, 2026'
        }
    ];

    // DOM Elements
    const searchInput = document.getElementById('emergencyVisitorSearch');
    const countValue = document.getElementById('activeVisitorCount');
    const tableBody = document.getElementById('emergencyTableBody');
    const mobileCardsGrid = document.getElementById('mobileCardsGrid');
    const tableContainer = document.getElementById('tableContainer');
    const emptyStateBox = document.getElementById('emptyStateBox');

    const modal = document.getElementById('emergencyDetailModal');
    const btnCloseModal = document.getElementById('btnCloseDetailModal');
    const btnModalCloseAction = document.getElementById('btnModalCloseAction');

    // Modal Content Elements
    const modalVisitorName = document.getElementById('modalVisitorName');
    const modalVisitorID = document.getElementById('modalVisitorID');
    const modalTimeIn = document.getElementById('modalTimeIn');
    const modalPurpose = document.getElementById('modalPurpose');
    const modalPersonToVisit = document.getElementById('modalPersonToVisit');
    const modalVisitDate = document.getElementById('modalVisitDate');
    const modalVisitorInitials = document.getElementById('modalVisitorInitials');
    const modalVisitorPhoto = document.getElementById('modalVisitorPhoto');

    // Helper: Escape HTML string
    function escapeHtml(text) {
        if (!text) return '';
        return String(text)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    // Render Visitors List
    function renderVisitors(visitors) {
        // Update Primary Summary Count
        countValue.textContent = visitors.length;

        if (visitors.length === 0) {
            tableContainer.style.display = 'none';
            mobileCardsGrid.style.display = 'none';
            emptyStateBox.style.display = 'flex';
            return;
        }

        emptyStateBox.style.display = 'none';
        if (window.innerWidth > 768) {
            tableContainer.style.display = 'block';
            mobileCardsGrid.style.display = 'none';
        } else {
            tableContainer.style.display = 'none';
            mobileCardsGrid.style.display = 'grid';
        }

        // Render Desktop Table Rows
        let tableRowsHTML = '';
        let mobileCardsHTML = '';

        visitors.forEach((visitor, index) => {
            const purposeDisplay = visitor.purpose && visitor.purpose.trim() !== '' 
                ? escapeHtml(visitor.purpose) 
                : '<span class="empty-cell-dash">—</span>';

            const personDisplay = visitor.personToVisit && visitor.personToVisit.trim() !== '' 
                ? escapeHtml(visitor.personToVisit) 
                : '<span class="empty-cell-dash">—</span>';

            const photoHtml = visitor.photo 
                ? `<img src="${escapeHtml(visitor.photo)}" alt="${escapeHtml(visitor.name)}" class="visitor-avatar-thumb">`
                : `<div class="visitor-avatar-thumb">${escapeHtml(visitor.initials)}</div>`;

            // Desktop Table Row
            tableRowsHTML += `
                <tr data-index="${index}" tabindex="0">
                    <td>
                        <div class="visitor-cell">
                            ${photoHtml}
                            <div class="visitor-info-text">
                                <span class="visitor-full-name">${escapeHtml(visitor.name)}</span>
                                <span class="visitor-id-tag">${escapeHtml(visitor.id)}</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="time-in-badge">${escapeHtml(visitor.timeIn)}</span>
                    </td>
                    <td>${purposeDisplay}</td>
                    <td>${personDisplay}</td>
                    <td style="text-align: right;">
                        <button type="button" class="btn-view-details" data-index="${index}">
                            View Details
                        </button>
                    </td>
                </tr>
            `;

            // Mobile Responsive Card
            mobileCardsHTML += `
                <div class="visitor-card-mobile" data-index="${index}" tabindex="0">
                    <div class="card-mobile-header">
                        <div class="visitor-cell">
                            ${photoHtml}
                            <div class="visitor-info-text">
                                <span class="visitor-full-name">${escapeHtml(visitor.name)}</span>
                                <span class="visitor-id-tag">ID: ${escapeHtml(visitor.id)}</span>
                            </div>
                        </div>
                        <span class="time-in-badge">${escapeHtml(visitor.timeIn)}</span>
                    </div>
                    <div class="card-mobile-body">
                        <div class="mobile-data-field">
                            <span class="mobile-field-label">Purpose</span>
                            <span class="mobile-field-value">${purposeDisplay}</span>
                        </div>
                        <div class="mobile-data-field">
                            <span class="mobile-field-label">Person to Visit</span>
                            <span class="mobile-field-value">${personDisplay}</span>
                        </div>
                    </div>
                </div>
            `;
        });

        tableBody.innerHTML = tableRowsHTML;
        mobileCardsGrid.innerHTML = mobileCardsHTML;

        // Attach click handlers to rows & cards
        document.querySelectorAll('#emergencyTableBody tr, .visitor-card-mobile, .btn-view-details').forEach(elem => {
            elem.addEventListener('click', function(e) {
                e.stopPropagation();
                const idx = this.getAttribute('data-index');
                if (idx !== null && visitors[idx]) {
                    openVisitorModal(visitors[idx]);
                }
            });

            elem.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    const idx = this.getAttribute('data-index');
                    if (idx !== null && visitors[idx]) {
                        openVisitorModal(visitors[idx]);
                    }
                }
            });
        });
    }

    // Open Visitor Details Modal
    function openVisitorModal(visitor) {
        modalVisitorName.textContent = visitor.name || '--';
        modalVisitorID.textContent = visitor.id || '--';
        modalTimeIn.textContent = visitor.timeIn || '--';
        modalPurpose.textContent = visitor.purpose && visitor.purpose.trim() !== '' ? visitor.purpose : '—';
        modalPersonToVisit.textContent = visitor.personToVisit && visitor.personToVisit.trim() !== '' ? visitor.personToVisit : '—';
        modalVisitDate.textContent = visitor.date || 'October 8, 2026';

        if (visitor.photo) {
            modalVisitorPhoto.src = visitor.photo;
            modalVisitorPhoto.style.display = 'block';
            modalVisitorInitials.style.display = 'none';
        } else {
            modalVisitorInitials.textContent = visitor.initials || 'V';
            modalVisitorPhoto.style.display = 'none';
            modalVisitorInitials.style.display = 'flex';
        }

        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('portal-modal-open');
    }

    // Close Modal Handler
    function closeModal() {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('portal-modal-open');
    }

    btnCloseModal.addEventListener('click', closeModal);
    btnModalCloseAction.addEventListener('click', closeModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    // Filter Search Functionality
    let filteredList = [...currentVisitorsData];

    searchInput.addEventListener('input', function() {
        const query = this.value.trim().toLowerCase();
        if (!query) {
            filteredList = [...currentVisitorsData];
        } else {
            filteredList = currentVisitorsData.filter(v => 
                v.name.toLowerCase().includes(query) ||
                v.id.toLowerCase().includes(query) ||
                v.purpose.toLowerCase().includes(query) ||
                v.personToVisit.toLowerCase().includes(query)
            );
        }
        renderVisitors(filteredList);
    });

    // Responsive Window Resize Handler
    window.addEventListener('resize', function() {
        renderVisitors(filteredList);
    });

    // Initial Render
    renderVisitors(currentVisitorsData);
});
</script>

<?php require_once '../templates/portal-footer.php'; ?>
