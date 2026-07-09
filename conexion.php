<?php
// Datos de conexión a Railway
$host = "hayabusa.proxy.rlwy.net";
$user = "root";
$password = "bDoZCfpoScHKONtCJHAXHvbcTMhbqgHp"; // reemplaza con la contraseña real
$database = "railway";
$port = 42448;

// Crear conexión
$conexion = new mysqli($host, $user, $password, $database, $port);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


