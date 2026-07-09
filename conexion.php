<?php
// Leer las variables de entorno definidas en Railway
$host = getenv("MYSQLHOST");       // Ejemplo: hayabusa.proxy.rlwy.net
$user = getenv("MYSQLUSER");       // Ejemplo: root
$password = getenv("MYSQLPASSWORD"); // Contraseña generada por Railway
$dbname = getenv("MYSQLDATABASE"); // Ejemplo: railway
$port = (int)getenv("MYSQLPORT");  // Ejemplo: 42448

// Intentar la conexión
$conn = new mysqli($host, $user, $password, $dbname, $port);

// Verificar si hubo error
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si llegaste aquí, la conexión fue exitosa
// Puedes usar $conn en tu CRUD
?>

