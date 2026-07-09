<?php
$host = "hayabusa.proxy.rlwy.net";
$user = "root";
$password = "bDoZCfpoScHKONtCJHAXHvbcTMhbqgHp"; 
$database = "railway";
$port = 42448;

$conexion = new mysqli($host, $user, $password, $database, $port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
