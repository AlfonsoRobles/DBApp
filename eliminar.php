<?php
require_once("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM usuarios3 WHERE id=$id";
$result = $conexion->query($sql);

if ($result) {
    header("Location: index.php");
    exit;
} else {
    echo "Error al eliminar: " . $conexion->error;
}
