<?php
$host = "hayabusa.proxy.rlwy.net";
$user = "root";
$password = "bDoZCfpoScHKONtCJHAXHvbcTMhbqgHp"; // reemplaza con la contraseña real que te da Railway
$database = "railway";
$port = 42448;

// Crear conexión
$conexion = new mysqli($host, $user, $password, $database, $port);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}



