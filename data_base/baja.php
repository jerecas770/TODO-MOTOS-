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
    <a href="modificacion.php"><button>MODIFICACION PRODUCTOS</button></a><br>
    <a href="?mostrarDatos"><button>VER PRODUCTOS</button></a>

<?php 


//solo muestro los datos si aprieta el boton VER PRODUCTOS
if(isset($_GET['mostrarDatos']))
{



?>
<form action="">
<!-- creo una tabla en la que voy a mostrar los datos-->
<table> 
<tr><th>ID</th> 
<th>Titulo</th> 
<th>Marca</th> 
<th>Categoria</th> 
<th>Modelo</th> 
<th>Caracteristica1</th> 
<th>Caracteristica2</th> 
<th>Caracteristica3</th> 
<th>Precio</th> 
</tr>

<?php 
// inluyo al modulo o biblioteca conexion.php
include "conexion.php";


// me conecto a la base de datos
$conexion = conexion();

// creo la consulta para selecionar y mostrar los registros de datos
$out_datos = "select * from productos";
$registros = mysqli_query($conexion,$out_datos);

//muestro los datos en una tabla mientras existan datos
while($registro=mysqli_fetch_row($registros)){ 
    ?><tr> 
    
    
    
    <td><?php echo $registro[0]?></td> 
    <td><?php echo $registro[1]?></td> 
    <td><?php echo $registro[2]?></td> 
    <td><?php echo $registro[3]?></td>
    <td><?php echo $registro[4]?></td>
    
    <?php 

    // si algun compo esta vacio lo reemplazo con ---
    for ($i = 5; $i < 8; $i++) {


    echo "<td>";

    if ($registro[$i] == "") {
        echo "---";

    } 
    else 
    {
        echo $registro[$i];
    }

    echo "</td>";
    }
    ?>

    <td><?php echo $registro[8]?></td> 
</tr> 

<?php 

} 
}

?> 
</table> 
</form>



</body>
</html>

<?php 




/*
<form method=POST> 
<table> 
<tr><th>Codigo</th> 
<th>Apellido</th> 
<th>Nombre</th> 
<th>DNI</th> 
<th>Telefono</th> 
</tr> 
<?php 
    while($fila=mysqli_fetch_assoc($resultado)){ 
        ?><tr> 
        <td><input type=radio name=cE value=<?php echo($fila['codigoEmpleado'])?>><?php echo(
 $fila['codigoEmpleado'])?></td> 
        <td><?php echo($fila['apellido'])?></td> 
        <td><?php echo($fila['nombre'])?></td> 
        <td><?php echo($fila['dni'])?></td> 
        <td><?php echo($fila['telefono'])?></td> 
    </tr> 
<?php  
    } ?> 
</table> 
<input type=submit value=Modificar formaction=pmodificar.php> 
<input type=submit value=Eliminar formaction=peliminar.php> 
</form>
<body> 
<?php 
$paraBorrar=$_POST['cE']; 
echo "Usted va a borrar el codigo de empleado: $paraBorrar"; 
echo "<br>Esta seguro que desea continuar<br>"; 
?> 
<form method=post> 
<input type=hidden name="borra" value=<?php echo($paraBorrar)?> > 
<input type=submit value="Si" formaction=eliminar.php> 
<input type=submit value="No" formaction=form1.php> 
</form> 
</body></html> 




require "conexion.php"; 
$siBorra=$_POST['borra']; 
 
echo "Borra $siBorra"; 
 
$cnn=mysqli_connect($servidor, $usuario, $contraseña,$bd)or die("No se encuentra la base de d
 atos $bd"); 
 
$sql="delete from empleados where codigoEmpleado='$siBorra'"; 
 
$resultado=mysqli_query($cnn,$sql); 
 
if(mysqli_affected_rows($cnn)>0){ 
    echo "<br>Se elimino al empleado $siBorra de la base de datos"; 
} 
else{ 
    echo "<br>No se pudo eliminar"; 
    echo "Error:".mysqli_sqlstate($cnn); 
} 

*/





 
?>