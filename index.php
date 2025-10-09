<?php

/*=============================================
Configuración de errores
=============================================*/

error_reporting(E_ALL);
ini_set('display_errors', false); // No mostrar errores al usuario
ini_set('log_errors', true);
ini_set('ignore_repeated_errors', true);

// Validar que el directorio de logs exista
$logDir = 'logs';

if (!is_dir($logDir)) {
    mkdir($logDir, 0775, true);
}

ini_set('error_log', $logDir . '/errores.log');

//Requeridos
require_once "Controllers/ControllerTemplate.php";


//Incluimos la plantilla
$template = new ControllerTemplate();
$template -> showTemplate();