<?php
include("conexion.php");

// Carpeta donde se guardan las imágenes
$carpeta = "imagenes/";

// Nombre del archivo subido
$archivo = basename($_FILES['imagen']['name']);
$rutaFinal = $carpeta . $archivo;

// Subir archivo
move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaFinal);

// Datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

// Insertar en base de datos
$sql = "INSERT INTO productos (nombre, descripcion, precio, stock, imagen)
        VALUES ('$nombre', '$descripcion', '$precio', '$stock', '$archivo')";

if ($conn->query($sql) === TRUE) {
    header("Location: productos.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
