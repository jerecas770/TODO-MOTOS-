<?php include("conexion.php"); ?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM productos WHERE id_producto=$id";

if ($conn->query($sql)) {
    echo "Producto eliminado";
} else {
    echo "Error: " . $conn->error;
}
?>
x