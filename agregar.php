<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');

    if ($nombre === '' || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        die("Datos inválidos");
    }

    $stmt = $conn->prepare("INSERT INTO usuarios3 (nombre, correo) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $correo);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error al insertar: " . $stmt->error;
    }
}
?>
