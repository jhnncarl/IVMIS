<?php
/**
 * IVMIS REUSABLE TOP NAVBAR TEMPLATE
 * Header navigation bar featuring mobile toggle, breadcrumbs, live clock, notifications, role switcher, and user profile.
 * 
 * Expectations:
 *   $pageTitle   (string) - Current page heading title (e.g., 'Visitor Entry Dashboard')
 *   $userRole    (string) - 'security', 'admin', or 'system_admin'
 */

if (!isset($pageTitle)) {
    $pageTitle = 'IVMIS Portal';
}
if (!isset($userRole)) {
    $userRole = 'security';
}

$roleNames = [
    'security'     => 'Security Guard',
    'admin'        => 'Administrator',
    'system_admin' => 'System Administrator'
];
$roleDisplayName = $roleNames[$userRole] ?? 'Security Guard';

// Determine base URL offset
$basePath = (strpos($_SERVER['SCRIPT_NAME'], '/security/') !== false || strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false) ? '../' : '';
?>

<!-- TOP NAVBAR COMPONENT -->
<header class="portal-navbar">

    <!-- Left: Mobile Trigger & Page Title -->
    <div class="navbar-left">
        <button class="mobile-sidebar-toggle" id="mobileSidebarToggle" aria-label="Open Mobile Navigation Menu">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
        </button>
        <div class="page-title-block">
            <h1 class="page-title"><?php echo htmlspecialchars($pageTitle); ?></h1>
            <p class="page-breadcrumb">EVSU-Ormoc &bull; IVMIS Portal &bull; <?php echo htmlspecialchars($roleDisplayName); ?></p>
        </div>
    </div>

    <!-- Right: Clock, Role Switcher, Notifications, Profile -->
    <div class="navbar-right">

        <!-- Live Clock -->
        <div class="navbar-clock" id="portalClock">
            <span class="clock-time" id="portalClockTime">--:-- --</span>
            <span class="clock-date" id="portalClockDate">--- --, ----</span>
        </div>

        <!-- Role Switcher Dropdown (Demo Switcher) -->
        <div class="role-switcher-dropdown">
            <button class="role-switcher-btn" data-dropdown-toggle="roleSwitcherMenu" aria-label="Switch Active Role Scope">
                <span class="role-indicator-dot"></span>
                <span class="role-text-label">Role: <strong><?php echo htmlspecialchars($roleDisplayName); ?></strong></span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="dropdown-menu-card" id="roleSwitcherMenu" hidden>
                <div class="dropdown-header">Switch Role Scope</div>
                <div class="dropdown-body">
                    <a href="<?php echo $basePath; ?>security/dashboard.php?role=security" class="dropdown-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        Security Guard Portal
                    </a>
                    <a href="<?php echo $basePath; ?>admin/dashboard.php?role=admin" class="dropdown-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        Administrator Portal
                    </a>
                    <a href="<?php echo $basePath; ?>admin/dashboard.php?role=system_admin" class="dropdown-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
                        System Admin Portal
                    </a>
                </div>
            </div>
        </div>

        <!-- Notifications Dropdown -->
        <div class="notification-dropdown-container">
            <button class="icon-nav-btn" data-dropdown-toggle="notificationsMenu" aria-label="Notifications" title="System Notifications">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                </svg>
                <span class="notification-badge">3</span>
            </button>
            <div class="dropdown-menu-card" id="notificationsMenu" hidden>
                <div class="dropdown-header">
                    <span>Notifications</span>
                    <span style="font-size:0.72rem; color:var(--primary-maroon); cursor:pointer;">Mark all read</span>
                </div>
                <div class="dropdown-body">
                    <div class="dropdown-item">
                        <div>
                            <p style="font-size:0.82rem; font-weight:700; color:var(--text-primary); margin:0;">New Visitor Checked-In</p>
                            <p style="font-size:0.72rem; color:var(--text-muted); margin:0;">Juan Dela Cruz &bull; Engineering Dept</p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-item">
                        <div>
                            <p style="font-size:0.82rem; font-weight:700; color:var(--text-primary); margin:0;">Peak Kiosk Traffic Alert</p>
                            <p style="font-size:0.72rem; color:var(--text-muted); margin:0;">High visitor entry rate logged at Main Kiosk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Profile Dropdown -->
        <div class="user-menu-dropdown">
            <button class="user-profile-btn" data-dropdown-toggle="userProfileMenu" aria-label="User Menu">
                <div class="user-avatar" style="width:36px; height:36px; font-size:0.85rem;">
                    <?php echo strtoupper(substr($roleDisplayName, 0, 1)); ?>
                </div>
            </button>
            <div class="dropdown-menu-card" id="userProfileMenu" hidden>
                <div class="dropdown-header">
                    <div>
                        <p style="margin:0; font-size:0.88rem; font-weight:800; color:var(--text-primary);">Staff Account</p>
                        <p style="margin:0; font-size:0.72rem; color:var(--text-muted); font-weight:500;"><?php echo htmlspecialchars($roleDisplayName); ?></p>
                    </div>
                </div>
                <div class="dropdown-body">
                    <a href="#" class="dropdown-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        My Profile &amp; Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo $basePath; ?>login.php" class="dropdown-item" style="color:#dc2626;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                        Sign Out
                    </a>
                </div>
            </div>
        </div>

    </div>

</header>
