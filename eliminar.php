<?php
include("conexion.php");

$id = $_GET['id'] ?? 0;
if (!is_numeric($id)) {
    die("ID inválido");
}

$stmt = $conn->prepare("DELETE FROM usuarios3 WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        header("Location: index.php");
        exit;
    } else {
        echo "No se encontró el registro con ID: $id";
    }
} else {
    echo "Error al eliminar: " . $stmt->error;
}
?>
