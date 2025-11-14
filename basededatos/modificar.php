<?php include("conexion.php"); ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM productos WHERE id_producto=$id");
$data = $result->fetch_assoc();
?>

<form action="" method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $data['nombre']; ?>"><br>
    Descripción: <textarea name="descripcion"><?php echo $data['descripcion']; ?></textarea><br>
    Precio: <input type="number" step="0.01" name="precio" value="<?php echo $data['precio']; ?>"><br>
    Stock: <input type="number" name="stock" value="<?php echo $data['stock']; ?>"><br>
    Imagen: <input type="text" name="imagen" value="<?php echo $data['imagen']; ?>"><br>
    <button type="submit" name="actualizar">Actualizar</button>
</form>

<?php
if (isset($_POST['actualizar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = $_POST['imagen'];

    $sql = "UPDATE productos SET
            nombre='$nombre',
            descripcion='$descripcion',
            precio='$precio',
            stock='$stock',
            imagen='$imagen'
            WHERE id_producto=$id";

    if ($conn->query($sql)) {
        echo "Producto actualizado";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
