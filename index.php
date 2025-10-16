<?php


// capturar errores y los guarda en un archivo errores.log' dentro de la carpeta; logs
error_reporting(E_ALL);
ini_set('display_errors',false);
ini_set('log_errors',true);
ini_set('ignore_repeated_errors',true);

$carpetaErrores = 'logs';
if(!is_dir($carpetaErrores)){
    mkdir($carpetaErrores, 0775, true);
}

ini_set('error_log', $carpetaErrores.'/errores.log');

//configurar zona horaria del sistema
date_default_timezone_set('America/Bogota');

//controladores requeridos
require_once "Controllers/ControllerTemplate.php";
require_once "Controllers/UserController.php";

//Nos permite crear variables de sesión
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

//Instancias
$template = new ControllerTemplate();
$template -> showTemplate();