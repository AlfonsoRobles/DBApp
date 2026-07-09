<?php
$host = getenv("MYSQLHOST");
$user = getenv("MYSQLUSER");
$password = getenv("MYSQLPASSWORD");
$dbname = getenv("MYSQLDATABASE");
$port = (int)getenv("MYSQLPORT");

if (!$host || !$user || !$password || !$dbname || !$port) {
    die("Error: Variables de entorno de MySQL no están definidas correctamente.");
}

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
