@echo off
color 0A
title Semi-Circle Chart Fix Tool
echo.
echo ================================================
echo    SEMI-CIRCLE CHART - AUTOMATIC FIX TOOL
echo ================================================
echo.
echo This tool will help you fix the chart issue.
echo.
echo What this will do:
echo   1. Check if you can access the status checker
echo   2. Open the sample data insertion page
echo   3. Open the dashboard to verify the fix
echo.
echo ================================================
echo.

REM Get the current directory
set "PROJECT_DIR=%~dp0"
set "PROJECT_NAME=%CD%"
for %%I in (.) do set "PROJECT_NAME=%%~nxI"

echo Detected project folder: %PROJECT_NAME%
echo.
echo ================================================
echo.

REM Ask user what they want to do
echo What would you like to do?
echo.
echo [1] Open Status Checker (Recommended - shows current state)
echo [2] Insert Sample Data (if you have no data)
echo [3] Open Diagnostic Tool (detailed analysis)
echo [4] Open All Tools (status + data + dashboard)
echo [5] View Raw JSON Data
echo [6] Exit
echo.

set /p choice="Enter your choice (1-6): "

if "%choice%"=="1" goto status
if "%choice%"=="2" goto insert_data
if "%choice%"=="3" goto diagnostic
if "%choice%"=="4" goto all_tools
if "%choice%"=="5" goto json_data
if "%choice%"=="6" goto end

:status
echo.
echo Opening Status Checker...
echo.
start "" "chart_status.html"
echo.
echo Status checker opened in your default browser!
echo.
echo Next steps:
echo   1. Check if data exists
echo   2. If "No Data", click "Insert Sample Data" button
echo   3. After inserting data, refresh your dashboard
echo.
pause
goto end

:insert_data
echo.
echo Inserting Sample Data...
echo.
echo IMPORTANT: This will add sample categories and sales to your database.
echo.
set /p confirm="Are you sure? (y/n): "
if /i "%confirm%"=="y" (
    start "" "insert_sample_data.php"
    echo.
    echo Sample data insertion page opened!
    echo.
    echo Wait for the page to show "Sample data insertion complete!"
    echo Then refresh your dashboard to see the chart.
    echo.
    pause
    start "" "Dashboard/dashboard"
    echo Dashboard opened - check if the chart is showing now!
) else (
    echo.
    echo Operation cancelled.
    echo.
)
pause
goto end

:diagnostic
echo.
echo Opening Diagnostic Tool...
echo.
start "" "test_categories.php"
echo.
echo Diagnostic tool opened!
echo.
echo This shows:
echo   - Database connection status
echo   - Table row counts
echo   - Current query results
echo   - Why data might be missing
echo.
pause
goto end

:all_tools
echo.
echo Opening All Tools...
echo.
echo This will open:
echo   1. Status Checker
echo   2. Sample Data Insertion (in new tab)
echo   3. Dashboard (in new tab)
echo.
set /p confirm="Continue? (y/n): "
if /i "%confirm%"=="y" (
    start "" "chart_status.html"
    timeout /t 2 /nobreak >nul
    start "" "insert_sample_data.php"
    timeout /t 2 /nobreak >nul
    start "" "Dashboard/dashboard"
    echo.
    echo All tools opened in separate browser tabs!
    echo.
    echo Recommended workflow:
    echo   1. Check chart_status.html first
    echo   2. If no data, use insert_sample_data.php
    echo   3. Check Dashboard to see the chart
    echo.
) else (
    echo.
    echo Operation cancelled.
    echo.
)
pause
goto end

:json_data
echo.
echo Opening Raw JSON Data...
echo.
start "" "get_categories.php"
echo.
echo JSON data page opened!
echo.
echo This shows the raw data that the chart uses.
echo Expected format:
echo   {
echo     "success": true,
echo     "data": [
echo       {"category_name": "Sea Food", "totalQty": 50, "percentage": 50}
echo     ]
echo   }
echo.
pause
goto end

:end
echo.
echo ================================================
echo.
echo If you need more help, check these files:
echo   - QUICK_FIX.md (quick troubleshooting)
echo   - FIX_CHART_ISSUE.md (detailed guide)
echo   - SEMI_PIE_CHART_README.md (full documentation)
echo.
echo ================================================
echo.
echo Thank you for using the Semi-Circle Chart Fix Tool!
echo.
pause
