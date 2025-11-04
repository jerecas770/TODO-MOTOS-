<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="Body_Formulario_Accesorios">


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
?> 

</table> 
</body>
</html>