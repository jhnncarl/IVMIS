<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>IVMIS - Intelligent Visitor Management Information System</title>
    <link rel="icon" type="image/png" href="../assets/images/evsu_logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <div class="header-left">
                <img src="../assets/images/evsu_logo.png" alt="EVSU Logo" class="evsu-logo">
                <div class="university-info">
                    <h1 class="university-name">Eastern Visayas State University</h1>
                    <p class="campus-name">Ormoc Campus</p>
                </div>
            </div>
            <div class="header-right">
                <div class="header-clock" id="headerClock">
                    <span class="clock-time" id="clockTime">--:-- --</span>
                    <span class="clock-date" id="clockDate">--- --, ----</span>
                </div>
                <span class="system-label"><span class="pipe">|</span> IVMIS KIOSK</span>
            </div>
        </div>
    </header>
    <main class="main-content">

