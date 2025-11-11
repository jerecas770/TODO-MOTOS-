<?php include('conexion.php');
$id = $_GET['id'];
if ($conn->query("DELETE FROM productos WHERE id_producto=$id")) {
  echo "<p>✅ Producto eliminado correctamente.</p>";
} else {
  echo "<p>❌ Error: {$conn->error}</p>";
}
echo "<a href='administrarProductos.php'>Volver</a>";
?>
