<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Alta de Producto</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Agregar nuevo repuesto o accesorio</h2>
  <form action="" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <textarea name="descripcion" placeholder="Descripción" required></textarea><br>
    <input type="number" name="precio" step="0.01" placeholder="Precio" required><br>
    <input type="number" name="stock" placeholder="Stock" required><br>
    <input type="text" name="imagen" placeholder="Ruta imagen (img/nombre.jpg)" required><br>
    <button type="submit" name="guardar">Guardar</button>
  </form>

  <?php
  if (isset($_POST['guardar'])) {
    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, imagen)
            VALUES ('{$_POST['nombre']}', '{$_POST['descripcion']}', '{$_POST['precio']}', '{$_POST['stock']}', '{$_POST['imagen']}')";
    if ($conn->query($sql)) echo "<p>✅ Producto agregado con éxito.</p>";
    else echo "<p>❌ Error: {$conn->error}</p>";
  }
  ?>
</body>
</html>
