<?php
/**
 * IVMIS PORTAL HEADER TEMPLATE
 * Includes HTML head, portal CSS, sidebar, navbar, and main container opening.
 * 
 * Variables required before including:
 *   $pageTitle   (string)
 *   $userRole    (string) - 'security', 'admin', 'system_admin'
 *   $currentPage (string)
 */

if (!isset($pageTitle))   $pageTitle = 'IVMIS Portal';
if (!isset($userRole))    $userRole = 'security';
if (!isset($currentPage)) $currentPage = 'dashboard';

// Determine base URL offset
$basePath = (strpos($_SERVER['SCRIPT_NAME'], '/security/') !== false || strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo htmlspecialchars($pageTitle); ?> | EVSU IVMIS</title>
    <link rel="icon" type="image/png" href="<?php echo $basePath; ?>assets/images/evsu_logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/portal.css?v=<?php echo time(); ?>">
</head>
<body class="portal-body no-transition">

    <div class="portal-wrapper">

        <!-- Sidebar Component -->
        <?php include __DIR__ . '/sidebar.php'; ?>

        <!-- Main Content Area -->
        <div class="portal-main">

            <!-- Top Navbar Component -->
            <?php include __DIR__ . '/navbar.php'; ?>

            <!-- Page Specific Content -->
            <main class="portal-content-container">
