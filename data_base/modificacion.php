<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="Body_Formulario_Accesorios">

    <a href="alta.php"><button>ALTA PRODUCTOS</button></a>
    <a href="baja.php"><button>BAJA PRODUCTOS</button></a>
    <a href="modificacion.php"><button>MODIFICACION PRODUCTOS</button></a>


</body>
</html>
<?php 

/*
require 'conexion.php'; 
$viejocodigo=$_POST['viejoCodigo']; 
$codigo=$_POST['codigo']; 
$nombre=$_POST['nom']; 
$apellido=$_POST['ape']; 
$dni=$_POST['dni']; 
$telefono=$_POST['tel']; 
// quitar el comentario si quiero ver lo que guardo 
//echo "cod $codigo, nomb $nombre, ape $apellido, dni $dni, tele $telefono"; 
$con=mysqli_connect($servidor, $usuario, $contraseña, $bd) or die("no se pudo"); 
$sql="update empleados set codigoEmpleado='$codigo', nombre= '$nombre', apellido='$apellido', dni=
 '$dni', telefono='$telefono' where codigoEmpleado= '$viejocodigo'"; 
 
$resultado=mysqli_query($con,$sql); 
if(mysqli_affected_rows($con)>0){ 
    echo "<br>Cambios guardados!"; 
} 
else{ 
    echo "<br>No se pudo guardar los cambios"; 
} 
echo "<br><br><a href=form1.php><button>Volver</button></a>"; 
 
*/
?>