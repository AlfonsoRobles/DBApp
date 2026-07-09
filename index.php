<?php
require_once("conexion.php");

$result = $conexion->query("SELECT * FROM usuarios3");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuarios</title>
    <!-- Aquí se liga tu archivo de estilos -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Lista de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['correo'] ?></td>
                <td>
                    <a class="btn editar" href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                    <a class="btn eliminar" href="eliminar.php?id=<?= $row['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <h2>Agregar Usuario</h2>
    <form class="formulario" action="agregar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <button type="submit">Agregar</button>
    </form>
</div>
</body>
</html>
