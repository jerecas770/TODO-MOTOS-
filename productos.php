<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Repuestos y Accesorios</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Repuestos y Accesorios</h1>
  <div class="productos-container">
    <?php
    $result = $conn->query("SELECT * FROM productos");
    while ($row = $result->fetch_assoc()) {
      echo "<div class='producto'>
              <img src='{$row['imagen']}' alt='{$row['nombre']}' />
              <h3>{$row['nombre']}</h3>
              <p>{$row['descripcion']}</p>
              <p><strong>$ {$row['precio']}</strong></p>
            </div>";
    }
    ?>
  </div>
</body>
</html>
