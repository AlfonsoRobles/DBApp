<?php
require_once("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO usuarios3 (nombre, correo) VALUES ('$nombre', '$correo')";
    $result = $conexion->query($sql);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error al agregar: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Agregar Usuario</h1>
    <form class="formulario" action="agregar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <button type="submit">Agregar</button>
    </form>
</div>
</body>
</html>
