@echo off
SET ROOT_DIR=sistema_login
echo Criando estrutura de pastas para: %ROOT_DIR%...
mkdir %ROOT_DIR%
mkdir %ROOT_DIR%\assets
mkdir %ROOT_DIR%\assets\css
mkdir %ROOT_DIR%\assets\js
mkdir %ROOT_DIR%\assets\img
mkdir %ROOT_DIR%\includes
type nul > %ROOT_DIR%\assets\css\style.css
type nul > %ROOT_DIR%\assets\js\script.js
type nul > %ROOT_DIR%\includes\config.php
type nul > %ROOT_DIR%\cadastro.php
type nul > %ROOT_DIR%\login.php
type nul > %ROOT_DIR%\dashboard.php
type nul > %ROOT_DIR%\perfil.php
type nul > %ROOT_DIR%\logout.php
type nul > %ROOT_DIR%\index.php
type nul > %ROOT_DIR%\sistema_login.sql
echo Estrutura criada com sucesso!
pause