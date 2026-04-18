@echo off
set PHP_PATH="E:\xampp\php\php.exe"
set PROJECT_DIR=%~dp0

echo Starting PHP Development Server at http://localhost:8000...
echo Project Directory: %PROJECT_DIR%

cd /d "%PROJECT_DIR%"
start "" http://localhost:8000
%PHP_PATH% -S localhost:8000 -t . router.php
pause
