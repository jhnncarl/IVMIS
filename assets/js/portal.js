/**
 * IVMIS PORTAL LAYOUT — portal.js
 * Sidebar collapse, mobile drawer, real-time clock, dropdown menus & role switcher logic.
 */

document.addEventListener('DOMContentLoaded', function () {

    // --- Enable CSS Transitions after initial load & render ---
    requestAnimationFrame(function () {
        setTimeout(function () {
            document.body.classList.remove('no-transition');
        }, 80);
    });

    document.querySelectorAll('.modal-overlay').forEach(function (overlay) {
        if (overlay.parentElement !== document.body) {
            document.body.appendChild(overlay);
        }
    });

    // --- Elements Selection ---
    const sidebar = document.getElementById('portalSidebar');
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');
    const mobileBackdrop = document.getElementById('mobileSidebarBackdrop');
    const clockTimeEl = document.getElementById('portalClockTime');
    const clockDateEl = document.getElementById('portalClockDate');

    // --- Desktop Sidebar Collapse Toggle ---
    if (sidebarToggleBtn && sidebar) {
        // Restore collapse state from localStorage
        const isCollapsed = localStorage.getItem('ivmis_sidebar_collapsed') === 'true';
        if (isCollapsed && window.innerWidth > 900) {
            sidebar.classList.add('collapsed');
        }

        sidebarToggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('collapsed');
            const state = sidebar.classList.contains('collapsed');
            localStorage.setItem('ivmis_sidebar_collapsed', state);
            document.cookie = "ivmis_sidebar_collapsed=" + state + "; path=/; max-age=31536000; SameSite=Lax";
        });
    }

    // --- Mobile Sidebar Drawer Toggle ---
    if (mobileSidebarToggle && sidebar && mobileBackdrop) {
        mobileSidebarToggle.addEventListener('click', function () {
            sidebar.classList.add('mobile-open');
            mobileBackdrop.classList.add('active');
        });

        mobileBackdrop.addEventListener('click', function () {
            sidebar.classList.remove('mobile-open');
            mobileBackdrop.classList.remove('active');
        });
    }

    // --- Real-time Digital Clock ---
    function updatePortalClock() {
        if (!clockTimeEl || !clockDateEl) return;
        const now = new Date();
        let h = now.getHours();
        const m = String(now.getMinutes()).padStart(2, '0');
        const ampm = h >= 12 ? 'PM' : 'AM';
        h = h % 12 || 12;
        clockTimeEl.textContent = String(h).padStart(2, '0') + ':' + m + ' ' + ampm;
        const opts = { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' };
        clockDateEl.textContent = now.toLocaleDateString('en-US', opts);
    }
    updatePortalClock();
    setInterval(updatePortalClock, 1000);

    // --- Generic Dropdown Toggle Handler ---
    const dropdownTriggers = document.querySelectorAll('[data-dropdown-toggle]');
    dropdownTriggers.forEach(function (trigger) {
        const targetId = trigger.getAttribute('data-dropdown-toggle');
        const menu = document.getElementById(targetId);
        if (!menu) return;

        trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            // Close other open dropdowns
            document.querySelectorAll('.dropdown-menu-card').forEach(function (m) {
                if (m !== menu) m.hidden = true;
            });
            menu.hidden = !menu.hidden;
        });
    });

    // Close dropdowns on outside click
    document.addEventListener('click', function (e) {
        document.querySelectorAll('.dropdown-menu-card').forEach(function (menu) {
            if (!menu.contains(e.target)) {
                menu.hidden = true;
            }
        });
    });

    // ESC key closes mobile sidebar and dropdowns
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.dropdown-menu-card').forEach(m => m.hidden = true);
            if (sidebar) sidebar.classList.remove('mobile-open');
            if (mobileBackdrop) mobileBackdrop.classList.remove('active');
        }
    });

});
