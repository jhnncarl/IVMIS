<?php
/**
 * Visitor Monitoring - Security Guard
 * 
 * Monitor active visitors and process QR checkouts
 */

$pageTitle = 'Visitor Monitoring';
$userRole = 'security';
$currentPage = 'visitor-monitoring';

require_once '../templates/portal-header.php';
?>

<!-- Visitor Monitoring Styles -->
<link rel="stylesheet" href="../assets/css/visitor-monitoring.css?v=<?php echo time(); ?>" media="all">

<!-- Visitor Monitoring Container -->
<div class="visitor-monitoring-container">

<section class="summary-section" aria-label="Summary">
  <div class="summary-card">
    <div class="value">8</div>
    <div class="label">Active Visitors</div>
  </div>
  <div class="summary-card">
    <div class="value">11</div>
    <div class="label">Checked In Today</div>
  </div>
  <div class="summary-card">
    <div class="value">3</div>
    <div class="label">Checked Out Today</div>
  </div>
</section>

  <section class="active-visitors-section" aria-label="Active Visitors">
    <div class="active-visitors-header">
      <h2>Active Visitors</h2>
      <p class="live-status">● Live Monitoring</p>
      <p class="header-subtitle">Visitors currently inside the campus</p>
      <p class="last-updated">Last updated: Just now</p>
    </div>

    <div class="active-visitors-filters">
      <label for="visitor-search" class="visually-hidden">Search visitors</label>
      <input id="visitor-search" class="search-input" type="search" placeholder="Search visitor by name, ID, or purpose...">

      <label for="visitor-status-filter" class="visually-hidden">Filter by status</label>
      <select id="visitor-status-filter" class="status-filter-select">
        <option value="active" selected>Active</option>
        <option value="all">All</option>
        <option value="checked-out">Checked Out</option>
      </select>

      <label for="visitor-date-filter" class="date-filter-label">
        <span class="date-filter-text">Date</span>
        <input id="visitor-date-filter" class="search-input date-filter-input" type="date" value="2026-10-08">
      </label>
    </div>

    <!-- Scrollable Visitor List Container -->
    <div class="visitor-list-scrollable">
      <!-- Visitor Table Header -->
      <div class="visitor-table-header">
        <div>Visitor</div>
        <div class="col-id">ID / ID Type</div>
        <div>Purpose</div>
        <div class="col-person">Person to Visit</div>
        <div>Time In</div>
        <div>Status</div>
        <div>Action</div>
      </div>

      <!-- Visitor Rows -->
    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">JC</div>
        <div style="min-width:0">
          <div class="visitor-name">Juan Dela Cruz</div>
          <div class="visitor-id-type">Driver's License</div>
        </div>
      </div>
      <div class="col-id">********1234</div>
      <div>Official Business</div>
      <div class="col-person">Dr. Maria Santos</div>
      <div>08:42 AM</div>
      <div><span class="status-badge active">● Active</span></div>
      <div><button class="view-btn" aria-label="View details for Juan Dela Cruz">View</button></div>
    </div>

    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">MS</div>
        <div style="min-width:0">
          <div class="visitor-name">Maria Santos</div>
          <div class="visitor-id-type">National ID</div>
        </div>
      </div>
      <div class="col-id">********5821</div>
      <div>Transaction</div>
      <div class="col-person">Registrar's Office</div>
      <div>09:05 AM</div>
      <div><span class="status-badge active">● Active</span></div>
      <div><button class="view-btn" aria-label="View details for Maria Santos">View</button></div>
    </div>

    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">LG</div>
        <div style="min-width:0">
          <div class="visitor-name">Liza Gomez</div>
          <div class="visitor-id-type">Passport</div>
        </div>
      </div>
      <div class="col-id">********7740</div>
      <div>Enrollment Inquiry</div>
      <div class="col-person">Admissions Desk</div>
      <div>09:30 AM</div>
      <div><span class="status-badge warning">▲ Active · 3+ hrs</span></div>
      <div><button class="view-btn" aria-label="View details for Liza Gomez">View</button></div>
    </div>

    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">RA</div>
        <div style="min-width:0">
          <div class="visitor-name">Ramon Aquino</div>
          <div class="visitor-id-type">Driver's License</div>
        </div>
      </div>
      <div class="col-id">********3092</div>
      <div>Delivery</div>
      <div class="col-person">Supply Office</div>
      <div>09:48 AM</div>
      <div><span class="status-badge active">● Active</span></div>
      <div><button class="view-btn" aria-label="View details for Ramon Aquino">View</button></div>
    </div>

    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">JB</div>
        <div style="min-width:0">
          <div class="visitor-name">Josefa Bautista</div>
          <div class="visitor-id-type">UMID</div>
        </div>
      </div>
      <div class="col-id">********6615</div>
      <div>Parent Meeting</div>
      <div class="col-person">Prof. L. Villanueva</div>
      <div>10:12 AM</div>
      <div><span class="status-badge active">● Active</span></div>
      <div><button class="view-btn" aria-label="View details for Josefa Bautista">View</button></div>
    </div>

    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">MT</div>
        <div style="min-width:0">
          <div class="visitor-name">Mark Tan</div>
          <div class="visitor-id-type">Postal ID</div>
        </div>
      </div>
      <div class="col-id">********4408</div>
      <div>Equipment Repair</div>
      <div class="col-person">Maintenance Office</div>
      <div>10:25 AM</div>
      <div><span class="status-badge active">● Active</span></div>
      <div><button class="view-btn" aria-label="View details for Mark Tan">View</button></div>
    </div>

    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">EC</div>
        <div style="min-width:0">
          <div class="visitor-name">Elena Cruz</div>
          <div class="visitor-id-type">National ID</div>
        </div>
      </div>
      <div class="col-id">********9173</div>
      <div>Document Request</div>
      <div class="col-person">Registrar's Office</div>
      <div>10:40 AM</div>
      <div><span class="status-badge active">● Active</span></div>
      <div><button class="view-btn" aria-label="View details for Elena Cruz">View</button></div>
    </div>

    <div class="visitor-row">
      <div style="display:flex;gap:0.75rem;align-items:center;min-width:0">
        <div class="visitor-avatar">PN</div>
        <div style="min-width:0">
          <div class="visitor-name">Paolo Navarro</div>
          <div class="visitor-id-type">Passport</div>
        </div>
      </div>
      <div class="col-id">********2260</div>
      <div>Guest Lecture</div>
      <div class="col-person">Dr. R. Pineda</div>
      <div>10:55 AM</div>
      <div><span class="status-badge active">● Active</span></div>
      <div><button class="view-btn" aria-label="View details for Paolo Navarro">View</button></div>
    </div>
    </div> <!-- End visitor-list-scrollable -->
  </section>

  <!-- Right: Recent Checkout Activity -->
  <aside class="recent-activity-section" aria-label="Recent Checkout Activity">
    <h2>Recent Checkout Activity</h2>
    <p>Latest QR checkouts</p>

    <div class="recent-activity-item">
      <div>
        <div class="name">Carlo Mendoza</div>
        <div class="status">✓ Checked out</div>
      </div>
      <div class="time">11:21 AM</div>
    </div>

    <div class="recent-activity-item">
      <div>
        <div class="name">Ana Villanueva</div>
        <div class="status">✓ Checked out</div>
      </div>
      <div class="time">11:12 AM</div>
    </div>

    <div class="recent-activity-item">
      <div>
        <div class="name">Pedro Reyes</div>
        <div class="status">✓ Checked out</div>
      </div>
      <div class="time">10:58 AM</div>
    </div>

    <!-- Scan QR for Checkout Button -->
    <button class="scan-qr-btn" id="openScanModal">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
        <rect x="3" y="3" width="7" height="7"></rect>
        <rect x="14" y="3" width="7" height="7"></rect>
        <rect x="3" y="14" width="7" height="7"></rect>
        <path d="M14 14h3v3h-3zM20 14v7M14 20h3"></path>
      </svg>
      Scan QR for Checkout
    </button>
  </aside>
</div>

<!-- QR Scan Modal -->
<div class="modal-overlay" id="scanModal">
  <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="scanModalTitle">
    <div class="modal-title-row">
      <h2 id="scanModalTitle">Scan Visitor QR</h2>
      <button type="button" class="modal-close-btn" id="closeScanModal" aria-label="Close">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
    <p>Position the visitor's QR pass inside the frame.</p>
    <div class="qr-scan-box">
      <div class="qr-frame">
        <div class="scan-line"></div>
      </div>
    </div>
    <p role="status" class="qr-scan-status">Waiting for QR code...</p>
  </div>
</div>

<!-- Visitor Details Modal -->
<div class="modal-overlay" id="detailModal">
  <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="detailModalTitle">
    <div class="modal-title-row">
      <div class="modal-visitor-heading">
        <div class="visitor-avatar" style="width:64px;height:64px;flex-basis:64px;font-size:1.5rem">JC</div>
        <div>
          <h2 id="detailModalTitle">Juan Dela Cruz</h2>
          <span class="status-badge active" style="margin-top:0.5rem">● Active</span>
        </div>
      </div>
      <button type="button" class="modal-close-btn" id="closeDetailModal" aria-label="Close">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
    <h3>VISITOR INFORMATION</h3>
    <dl class="definition-list">
      <dt>ID Type</dt><dd>Driver's License</dd>
      <dt>ID Number</dt><dd>********1234</dd>
      <dt>Contact</dt><dd>09XX XXX XXXX</dd>
      <dt>Address</dt><dd>Brgy. Cogon, Ormoc City</dd>
    </dl>
    <h3>VISIT INFORMATION</h3>
    <dl class="definition-list">
      <dt>Date</dt><dd>October 6, 2026</dd>
      <dt>Time In</dt><dd>08:42 AM</dd>
      <dt>Purpose</dt><dd>Official Business</dd>
      <dt>Person to Visit</dt><dd>Dr. Maria Santos</dd>
      <dt>Status</dt><dd>● Active</dd>
      <dt>QR Pass</dt><dd>Valid · for checkout only</dd>
    </dl>
    <div class="modal-actions">
      <button type="button" class="scan-qr-btn" id="detailScanCheckout">Scan for checkout</button>
    </div>
  </div>
</div>

<script>
// Modal functionality
const scanModal = document.getElementById('scanModal');
const detailModal = document.getElementById('detailModal');
const openScanBtn = document.getElementById('openScanModal');
const closeScanBtn = document.getElementById('closeScanModal');
const closeDetailBtn = document.getElementById('closeDetailModal');
const detailScanCheckoutBtn = document.getElementById('detailScanCheckout');
const viewBtns = document.querySelectorAll('.visitor-list-scrollable .view-btn[aria-label^="View"]');

// Lock body scroll when modal opens
function lockBodyScroll() {
  document.body.classList.add('portal-modal-open');
}

// Unlock content scroll when modal closes
function unlockBodyScroll() {
  document.body.classList.remove('portal-modal-open');
}

// Open scan modal
openScanBtn.addEventListener('click', () => {
  lockBodyScroll();
  scanModal.classList.add('active');
});

// Close scan modal
closeScanBtn.addEventListener('click', () => {
  scanModal.classList.remove('active');
  unlockBodyScroll();
});

// Close detail modal
closeDetailBtn.addEventListener('click', () => {
  detailModal.classList.remove('active');
  unlockBodyScroll();
});

// Open scan modal from visitor details
detailScanCheckoutBtn.addEventListener('click', () => {
  detailModal.classList.remove('active');
  lockBodyScroll();
  scanModal.classList.add('active');
});

// Open detail modal for each view button
viewBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    lockBodyScroll();
    detailModal.classList.add('active');
  });
});

// Close modals when clicking outside
scanModal.addEventListener('click', (e) => {
  if (e.target === scanModal) {
    scanModal.classList.remove('active');
    unlockBodyScroll();
  }
});

detailModal.addEventListener('click', (e) => {
  if (e.target === detailModal) {
    detailModal.classList.remove('active');
    unlockBodyScroll();
  }
});

// Close modals on Escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    if (scanModal.classList.contains('active')) {
      scanModal.classList.remove('active');
      unlockBodyScroll();
    }
    if (detailModal.classList.contains('active')) {
      detailModal.classList.remove('active');
      unlockBodyScroll();
    }
  }
});

</script>

<?php require_once '../templates/portal-footer.php'; ?>
