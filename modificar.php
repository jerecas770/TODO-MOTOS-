<?php include('conexion.php');
$id = $_GET['id'];
$producto = $conn->query("SELECT * FROM productos WHERE id_producto=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Modificar Producto</title></head>
<body>
  <h2>Modificar producto</h2>
  <form method="POST">
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>"><br>
    <textarea name="descripcion"><?= $producto['descripcion'] ?></textarea><br>
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>"><br>
    <input type="number" name="stock" value="<?= $producto['stock'] ?>"><br>
    <input type="text" name="imagen" value="<?= $producto['imagen'] ?>"><br>
    <button type="submit" name="actualizar">Actualizar</button>
  </form>
  <?php
  if (isset($_POST['actualizar'])) {
    $sql = "UPDATE productos SET 
            nombre='{$_POST['nombre']}',
            descripcion='{$_POST['descripcion']}',
            precio='{$_POST['precio']}',
            stock='{$_POST['stock']}',
            imagen='{$_POST['imagen']}'
            WHERE id_producto=$id";
    if ($conn->query($sql)) echo "<p>✅ Producto actualizado.</p>";
    else echo "<p>❌ Error: {$conn->error}</p>";
  }
  ?>
</body>
</html>
