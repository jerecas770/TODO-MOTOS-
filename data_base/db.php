<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar productos</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body class="Body_Formulario_Accesorios"> 
    <form class="Form_Accesorios" method = "post">
        <input  type="hidden" name="Productos" >
        <input  class="Input_Form_Accesorios" type="text" name="titulo" placeholder="Titulo" required><br>
        <input  class="Input_Form_Accesorios" type="text" name="marca" placeholder="Marca" required><br>
        <input  class="Input_Form_Accesorios" type="text" name="categoria" placeholder="Categoria" required><br>
        <input  class="Input_Form_Accesorios" type="text" name="modelo" placeholder="Modelo" required><br>
        <input  class="Input_Form_Accesorios" type="text" name="caracteristica1" placeholder="Caracteristica1" >
        <input  class="Input_Form_Accesorios" type="text" name="caracteristica2" placeholder="Caracteristica2" >
        <input  class="Input_Form_Accesorios" type="text" name="caracteristica3" placeholder="Caracteristica3" ><br>
        <input  class="Input_Form_Accesorios" type="number" name="precio" placeholder="Precio" required><br>
        <input  class="Submit_Form_Accesorios Input_Form_Accesorios" type="submit"><br>
    </form>


</body>
</html>
<?php 
//incluyo el modulo o archivo que contiene la conexion
include "conexion.php";



//variables que almacenaran los datos ingresados

//esto es para ocultar el warning que aparece 
if(isset($_POST['Productos']))
{
$titulo = $_POST['titulo'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];
$modelo = $_POST['modelo'];
$caracteristica1 = $_POST['caracteristica1'];
$caracteristica2 = $_POST['caracteristica2'];
$caracteristica3 = $_POST['caracteristica3'];
$precio = $_POST['precio'];



$conexion = conexiondb();

if($conexion){
    echo "Se conecto a la base de datos: ", $dataBase;
}
else{
    echo "No se pudo conectar a la base de datos: ", $dataBase;
}

//creo una consulta
$cargardatos = "insert into productos (titulo, marca, categoria, modelo, caracteristica1, caracteristica2, caracteristica3, precio)
VALUES ('$titulo', '$marca', '$categoria', '$modelo', '$caracteristica1', '$caracteristica2', '$caracteristica3', $precio)";

// Ejecuto la consulta
mysqli_query($conexion, $cargardatos);





}

?>