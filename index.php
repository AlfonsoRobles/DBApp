<?php
require_once("conexion.php");

$result = $conexion->query("SELECT * FROM usuarios3");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['correo'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> |
                    <a href="eliminar.php?id=<?= $row['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <h2>Agregar Usuario</h2>
    <form action="insertar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <button type="submit">Agregar</button>
    </form>
</body>
</html>
