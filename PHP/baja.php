<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="Body_Formulario_Accesorios">
    <a href="menu.php"><button>MENU</button></a><br>
<?php 
require "funciones/ABM.funciones.php"; 
// guardo el id del producto a eliminar
$borrar=$_POST['borrar']; 
 
$conexion= conexion();
 
// elimino todo el registro del producto
$SQL="delete from productos where ID_producto='$borrar'"; 
 
$resultado=mysqli_query($conexion,$SQL); 

if(mysqli_affected_rows($conexion)>0){ 
    echo "<br>Se elimino el producto $borrar de la base de datos"; 
} 
else{ 
    echo "<br>No se pudo eliminar"; 
    echo "Error:".mysqli_sqlstate($conexion); 
} 

?> 


</body>
</html>