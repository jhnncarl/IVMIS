<?php
/**
 * IVMIS REUSABLE SIDEBAR TEMPLATE
 * Supports 3 Authorized Staff Roles: 'security', 'admin', 'system_admin'
 * 
 * Expectations:
 *   $userRole    (string) - 'security', 'admin', or 'system_admin'
 *   $currentPage (string) - Active page identifier (e.g. 'dashboard', 'records', 'checkin', etc.)
 */

if (!isset($userRole)) {
    $userRole = 'security'; // Default fallback role
}
if (!isset($currentPage)) {
    $currentPage = 'dashboard';
}

// Role Display Metadata
$roleLabels = [
    'security'     => ['name' => 'Security Guard',  'badgeClass' => 'security',     'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'],
    'admin'        => ['name' => 'Administrator',   'badgeClass' => 'admin',        'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>'],
    'system_admin' => ['name' => 'System Admin',    'badgeClass' => 'system_admin', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>']
];

$currentRoleMeta = $roleLabels[$userRole] ?? $roleLabels['security'];

// Determine base URL offset based on directory structure
$basePath = (strpos($_SERVER['SCRIPT_NAME'], '/security/') !== false || strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false) ? '../' : '';

// Navigation Configuration per Role
$roleMenus = [
    'security' => [
        'Main Navigation' => [
            ['id' => 'dashboard',       'label' => 'Entry Dashboard',      'url' => 'security/dashboard.php',       'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>'],
            ['id' => 'active-visitors', 'label' => 'Active Visitors',     'url' => 'security/active-visitors.php',  'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>', 'badge' => 'Live'],
        ],
        'Gate & Scanner' => [
            ['id' => 'scan-pass',       'label' => 'Scan Gate Pass / Exit', 'url' => 'security/scan-timeout.php',    'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>'],
            ['id' => 'vehicle-log',     'label' => 'Vehicle Entry Log',    'url' => 'security/vehicle-log.php',     'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>'],
        ]
    ],
    'admin' => [
        'Dashboard & Overview' => [
            ['id' => 'dashboard',       'label' => 'Admin Dashboard',      'url' => 'admin/dashboard.php',          'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>'],
            ['id' => 'records',         'label' => 'Visitor Records Log',  'url' => 'admin/visitor-records.php',    'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>'],
        ],
        'Management & Reports' => [
            ['id' => 'departments',     'label' => 'Departments Directory','url' => 'admin/departments.php',        'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>'],
            ['id' => 'analytics',       'label' => 'Analytics Overview',   'url' => 'admin/analytics.php',          'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>'],
            ['id' => 'reports',         'label' => 'Reports & Export',     'url' => 'admin/reports.php',            'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>'],
        ]
    ],
    'system_admin' => [
        'System Overview' => [
            ['id' => 'dashboard',       'label' => 'System Dashboard',     'url' => 'admin/dashboard.php',          'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>'],
            ['id' => 'system-overview', 'label' => 'Infrastructure Health', 'url' => 'admin/system-overview.php',  'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>'],
        ],
        'System Administration' => [
            ['id' => 'user-management', 'label' => 'User & Staff Accounts', 'url' => 'admin/user-management.php',  'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'],
            ['id' => 'audit-logs',      'label' => 'Audit Trail & Logs',   'url' => 'admin/audit-logs.php',       'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'],
            ['id' => 'system-config',   'label' => 'System Settings',      'url' => 'admin/system-config.php',    'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>'],
        ]
    ]
];

$activeMenuSections = $roleMenus[$userRole] ?? $roleMenus['security'];
?>

<?php
$isCollapsedCookie = (isset($_COOKIE['ivmis_sidebar_collapsed']) && $_COOKIE['ivmis_sidebar_collapsed'] === 'true');
?>

<!-- SIDEBAR COMPONENT -->
<aside class="portal-sidebar <?php echo $isCollapsedCookie ? 'collapsed' : ''; ?>" id="portalSidebar" aria-label="Main System Navigation">
    <script>
        (function() {
            try {
                var saved = localStorage.getItem('ivmis_sidebar_collapsed');
                var sb = document.getElementById('portalSidebar');
                if (sb && saved === 'true' && window.innerWidth > 900) {
                    sb.classList.add('collapsed');
                } else if (sb && saved === 'false') {
                    sb.classList.remove('collapsed');
                }
            } catch(e) {}
        })();
    </script>

    <!-- Header / Brand -->
    <div class="sidebar-header">
        <a href="<?php echo $basePath; ?>login.php" class="sidebar-brand">
            <img src="<?php echo $basePath; ?>assets/images/evsu_logo.png" alt="EVSU Logo" class="sidebar-logo">
            <div class="sidebar-brand-text">
                <span class="brand-title">EVSU IVMIS</span>
                <span class="brand-subtitle">Ormoc Campus</span>
            </div>
        </a>
        <button class="sidebar-toggle-btn" id="sidebarToggleBtn" aria-label="Toggle Sidebar Collapse" title="Collapse/Expand Navigation">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>
    </div>

    <!-- Active Role Badge -->
    <div class="sidebar-role-badge-container">
        <div class="role-badge <?php echo $currentRoleMeta['badgeClass']; ?>" title="<?php echo htmlspecialchars($currentRoleMeta['name']); ?>" data-tooltip="<?php echo htmlspecialchars($currentRoleMeta['name']); ?>">
            <span class="role-badge-icon"><?php echo $currentRoleMeta['icon']; ?></span>
            <span class="role-badge-text"><?php echo $currentRoleMeta['name']; ?></span>
        </div>
    </div>

    <!-- Navigation Menu Items -->
    <nav class="sidebar-nav">
        <?php foreach ($activeMenuSections as $sectionTitle => $items): ?>
            <div class="nav-section">
                <span class="nav-section-title"><?php echo htmlspecialchars($sectionTitle); ?></span>
                <?php foreach ($items as $item): ?>
                    <?php 
                        $isActive = ($currentPage === $item['id']);
                        $targetUrl = $basePath . $item['url'];
                    ?>
                    <a href="<?php echo htmlspecialchars($targetUrl); ?>" class="nav-item <?php echo $isActive ? 'active' : ''; ?>" title="<?php echo htmlspecialchars($item['label']); ?>" data-tooltip="<?php echo htmlspecialchars($item['label']); ?>">
                        <span class="nav-icon"><?php echo $item['icon']; ?></span>
                        <span class="nav-label"><?php echo htmlspecialchars($item['label']); ?></span>
                        <?php if (isset($item['badge'])): ?>
                            <span class="nav-counter-badge"><?php echo htmlspecialchars($item['badge']); ?></span>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </nav>

    <!-- Sidebar User Footer -->
    <div class="sidebar-user-footer">
        <div class="user-avatar" title="Staff User (<?php echo htmlspecialchars($currentRoleMeta['name']); ?>)">
            <?php echo strtoupper(substr($currentRoleMeta['name'], 0, 1)); ?>
        </div>
        <div class="user-details">
            <span class="user-name">Staff User</span>
            <span class="user-role-text"><?php echo htmlspecialchars($currentRoleMeta['name']); ?></span>
        </div>
        <a href="<?php echo $basePath; ?>login.php" class="logout-btn-sidebar" title="Sign Out of IVMIS">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
        </a>
    </div>

</aside>
