@echo off
REM ============================================
REM  IVMIS Kiosk Auto-Launcher
REM  Place this in: shell:startup folder
REM ============================================

REM Wait for XAMPP Apache to fully start (10 seconds)
timeout /t 10 /nobreak >nul

REM Launch Microsoft Edge in kiosk mode (fullscreen, no address bar, no tabs)
start "" "msedge.exe" --kiosk "http://localhost/IVMIS/kiosk/" --edge-kiosk-type=fullscreen

REM ============================================
REM  ALTERNATIVE: Use Chrome instead of Edge
REM  Uncomment the line below and comment the Edge line above
REM ============================================
REM start "" "chrome.exe" --kiosk "http://localhost/IVMIS/kiosk/" --disable-pinch --overscroll-history-navigation=0
