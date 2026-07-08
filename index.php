<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Usuarios</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <div class="container">
    <h1>Gestión de Usuarios</h1>

    <!-- Formulario para agregar -->
    <form action="agregar.php" method="POST" class="formulario">
      <input type="text" name="nombre" placeholder="Nombre completo" required>
      <input type="email" name="correo" placeholder="Correo electrónico" required>
      <button type="submit">➕ Agregar</button>
    </form>

    <!-- Tabla de registros -->
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
        <?php
        $resultado = $conn->query("SELECT * FROM usuarios3");
        while ($fila = $resultado->fetch_assoc()) {
          echo "<tr>
                  <td>{$fila['id']}</td>
                  <td>{$fila['nombre']}</td>
                  <td>{$fila['correo']}</td>
                  <td>
                    <a class='btn editar' href='editar.php?id={$fila['id']}'>✏️ Editar</a>
                    <a class='btn eliminar' href='eliminar.php?id={$fila['id']}'>🗑️ Eliminar</a>
                  </td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
