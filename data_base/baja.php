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
    <a href="modificacion.php"><button>MODIFICACION PRODUCTOS</button></a><br>

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

include "conexion.php";

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$dataBase = "todo_motos";

$conexion = conexion($servidor, $usuario, $contraseña, $dataBase);

$out_datos = "select * from productos";

$registros = mysqli_query($conexion,$out_datos);

while($registro=mysqli_fetch_row($registros)){ 
    ?><tr> 
    
        
    <td><?php echo $registro[0]?></td> 
    <td><?php echo $registro[1]?></td> 
    <td><?php echo $registro[2]?></td> 
    <td><?php echo $registro[3]?></td>
    <td><?php echo $registro[4]?></td>
    
    <?php 
    for ($i = 5; $i < 8; $i++) {
    echo "<td>";
    if ($registro[$i] == "") {
        echo "---";
    } else {
        echo $registro[$i];
    }
    echo "</td>";
    }
    ?>

    <td><?php echo $registro[8]?></td> 
</tr> 
<?php 
} 
?> 
</table> 



</body>
</html>

<?php 




/*
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