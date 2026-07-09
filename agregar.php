<?php
require_once("conexion.php");

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
