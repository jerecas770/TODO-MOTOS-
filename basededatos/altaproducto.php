<?php include("conexion.php"); ?>

<form action="guardarproducto.php" method="POST" enctype="multipart/form-data">
    Nombre: 
    <input type="text" name="nombre"><br><br>

    Descripción:
    <textarea name="descripcion"></textarea><br><br>

    Precio:
    <input type="number" name="precio"><br><br>

    Stock:
    <input type="number" name="stock"><br><br>

    Imagen del producto:
    <input type="file" name="imagen" accept="image/*" required><br><br>

    <button type="submit">Guardar</button>
</form>


<?php
if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = $_POST['imagen'];

    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, imagen)
            VALUES ('$nombre','$descripcion','$precio','$stock','$imagen')";

    if ($conn->query($sql)) {
        echo "Producto agregado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
