<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrar Productos</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Panel de Administración</h1>
  <a href="altaproducto.php">➕ Agregar producto</a> |
  <a href="logout.php">🔒 Cerrar sesión</a>
  <table border="1">
    <tr>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Acciones</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM productos");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['nombre']}</td>
              <td>$ {$row['precio']}</td>
              <td>{$row['stock']}</td>
              <td>
                <a href='modificar.php?id={$row['id_producto']}'>✏️ Modificar</a> |
                <a href='eliminar.php?id={$row['id_producto']}'>🗑️ Eliminar</a>
              </td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>
