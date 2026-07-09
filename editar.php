<?php
require_once("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE usuarios3 SET nombre='$nombre', correo='$correo' WHERE id=$id";
    $result = $conexion->query($sql);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
} else {
    $id = $_GET['id'];
    $result = $conexion->query("SELECT * FROM usuarios3 WHERE id=$id");
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <!-- Aquí se liga tu archivo de estilos -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Editar Usuario</h1>
    <form class="formulario" action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="nombre" value="<?= $row['nombre'] ?>" required>
        <input type="email" name="correo" value="<?= $row['correo'] ?>" required>
        <button type="submit">Guardar</button>
    </form>
</div>
</body>
</html>
