<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar productos</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body class="Body_Formulario_Accesorios"> 
    <form class="Form_Accesorios" method = "get">
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
//variables que almacenaran los datos ingresados

//esto es para ocultar el warning que aparece
if(isset($_GET['Productos']))
{
$titulo = $_GET['titulo'];
$marca = $_GET['marca'];
$categoria = $_GET['categoria'];
$modelo = $_GET['modelo'];
$caracteristica1 = $_GET['caracteristica1'];
$caracteristica2 = $_GET['caracteristica2'];
$caracteristica3 = $_GET['caracteristica3'];
$precio = $_GET['precio'];

// creo la conexion con la base de datos
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$dataBase = "todo_motos";
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $dataBase);

//creo una consulta
$cargardatos = "insert into productos (titulo, marca, categoria, modelo, caracteristica1, caracteristica2, caracteristica3, precio)
VALUES ('$titulo', '$marca', '$categoria', '$modelo', '$caracteristica1', '$caracteristica2', '$caracteristica3', $precio)";

// Ejecuto la consulta
mysqli_query($conexion, $cargardatos);





}

?>