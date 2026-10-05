<?php
/**
 * IVMIS REUSABLE SIDEBAR TEMPLATE
 * Finalized Role-Based Navigation System for Security Guard, Admin, and System Admin
 * 
 * Expectations:
 *   $userRole    (string) - 'security', 'admin', or 'system_admin'
 *   $currentPage (string) - Active page identifier
 */

if (!isset($userRole)) {
    if (isset($_GET['role']) && in_array($_GET['role'], ['security', 'admin', 'system_admin'])) {
        $userRole = $_GET['role'];
    } else {
        $userRole = 'security'; // Default fallback role
    }
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

// Navigation Configuration per Role strictly adhering to final specifications
$roleMenus = [
    'security' => [
        'MAIN' => [
            ['id' => 'dashboard', 'label' => 'Dashboard', 'url' => 'security/dashboard.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>']
        ],
        'VISITOR MANAGEMENT' => [
            ['id' => 'visitor-monitoring', 'alias_ids' => ['active-visitors'], 'label' => 'Visitor Monitoring', 'url' => 'security/visitor-monitoring.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'],
            ['id' => 'visitor-records', 'alias_ids' => ['records'], 'label' => 'Visitor Records', 'url' => 'security/visitor-records.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>']
        ],
        'SECURITY' => [
            ['id' => 'emergency-monitoring', 'label' => 'Emergency Monitoring', 'url' => 'security/emergency-monitoring.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>']
        ],
        'ACCOUNT' => [
            ['id' => 'profile', 'label' => 'Profile', 'url' => 'profile.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>'],
            ['id' => 'logout', 'label' => 'Logout', 'url' => 'login.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>']
        ]
    ],
    'admin' => [
        'MAIN' => [
            ['id' => 'dashboard', 'label' => 'Dashboard', 'url' => 'admin/dashboard.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>']
        ],
        'VISITOR MANAGEMENT' => [
            ['id' => 'visitor-monitoring', 'alias_ids' => ['active-visitors'], 'label' => 'Visitor Monitoring', 'url' => 'admin/visitor-monitoring.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'],
            ['id' => 'visitor-records', 'alias_ids' => ['records'], 'label' => 'Visitor Records', 'url' => 'admin/visitor-records.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>'],
            ['id' => 'blacklist', 'alias_ids' => ['blacklist-management'], 'label' => 'Blacklist', 'url' => 'admin/blacklist-management.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>']
        ],
        'SECURITY' => [
            ['id' => 'emergency-monitoring', 'label' => 'Emergency Monitoring', 'url' => 'admin/emergency-monitoring.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>']
        ],
        'REPORTS' => [
            ['id' => 'reports-analytics', 'alias_ids' => ['reports', 'analytics'], 'label' => 'Reports & Analytics', 'url' => 'admin/reports-analytics.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>']
        ],
        'ACCOUNT' => [
            ['id' => 'profile', 'label' => 'Profile', 'url' => 'profile.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>'],
            ['id' => 'logout', 'label' => 'Logout', 'url' => 'login.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>']
        ]
    ],
    'system_admin' => [
        'MAIN' => [
            ['id' => 'dashboard', 'label' => 'Dashboard', 'url' => 'admin/dashboard.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>']
        ],
        'VISITOR MANAGEMENT' => [
            ['id' => 'visitor-monitoring', 'alias_ids' => ['active-visitors'], 'label' => 'Visitor Monitoring', 'url' => 'admin/visitor-monitoring.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'],
            ['id' => 'visitor-records', 'alias_ids' => ['records'], 'label' => 'Visitor Records', 'url' => 'admin/visitor-records.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>'],
            ['id' => 'blacklist', 'alias_ids' => ['blacklist-management'], 'label' => 'Blacklist', 'url' => 'admin/blacklist-management.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>']
        ],
        'SECURITY' => [
            ['id' => 'emergency-monitoring', 'label' => 'Emergency Monitoring', 'url' => 'admin/emergency-monitoring.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>']
        ],
        'REPORTS' => [
            ['id' => 'reports-analytics', 'alias_ids' => ['reports', 'analytics'], 'label' => 'Reports & Analytics', 'url' => 'admin/reports-analytics.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>']
        ],
        'ADMINISTRATION' => [
            ['id' => 'user-management', 'label' => 'User Management', 'url' => 'admin/user-management.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg>'],
            ['id' => 'system-settings', 'alias_ids' => ['system-config'], 'label' => 'System Settings', 'url' => 'admin/system-config.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>']
        ],
        'ACCOUNT' => [
            ['id' => 'profile', 'label' => 'Profile', 'url' => 'profile.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>'],
            ['id' => 'logout', 'label' => 'Logout', 'url' => 'login.php', 'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>']
        ]
    ]
];

$activeMenuSections = $roleMenus[$userRole] ?? $roleMenus['security'];
$roleQuery = (isset($_GET['role']) && !empty($_GET['role'])) ? '?role=' . urlencode($_GET['role']) : '';
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
            <span class="role-badge-text"><?php echo htmlspecialchars($currentRoleMeta['name']); ?></span>
        </div>
    </div>

    <!-- Navigation Menu Items -->
    <nav class="sidebar-nav">
        <?php foreach ($activeMenuSections as $sectionTitle => $items): ?>
            <?php if (!empty($items)): ?>
                <div class="nav-section">
                    <span class="nav-section-title"><?php echo htmlspecialchars($sectionTitle); ?></span>
                    <?php foreach ($items as $item): ?>
                        <?php 
                            $isActive = ($currentPage === $item['id']) || (isset($item['alias_ids']) && in_array($currentPage, $item['alias_ids']));
                            $targetUrl = $basePath . $item['url'];
                            if ($roleQuery !== '' && strpos($targetUrl, '?') === false) {
                                $targetUrl .= $roleQuery;
                            }
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
            <?php endif; ?>
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
