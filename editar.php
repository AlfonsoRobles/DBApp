<?php
include("conexion.php");

$id = $_GET['id'] ?? 0;
if (!is_numeric($id)) {
    die("ID inválido");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');

    if ($nombre === '' || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        die("Datos inválidos");
    }

    $stmt = $conn->prepare("UPDATE usuarios3 SET nombre=?, correo=? WHERE id=?");
    $stmt->bind_param("ssi", $nombre, $correo, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error al actualizar: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Usuario</title>
</head>
<body>
  <h1>Editar Usuario</h1>
  <?php
  $stmt = $conn->prepare("SELECT nombre, correo FROM usuarios3 WHERE id=?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $resultado = $stmt->get_result();
  $fila = $resultado->fetch_assoc();
  ?>
  <form method="POST">
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($fila['nombre']); ?>" required>
    <input type="email" name="correo" value="<?php echo htmlspecialchars($fila['correo']); ?>" required>
    <button type="submit">Guardar</button>
  </form>
</body>
</html>
