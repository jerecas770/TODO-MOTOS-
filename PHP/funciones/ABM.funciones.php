<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
<?php

require "conexion.funciones.php";


function carga($titulo , $marca , $categoria , $modelo , $caracteristica1 , $caracteristica2 , $caracteristica3 , $precio){

    $conexion = conexion();

    //creo una consulta para insertar datos a la tabla
    $SQL = "insert into productos (titulo, marca, categoria, modelo, caracteristica1, caracteristica2, caracteristica3, precio) 
    VALUES ('$titulo', '$marca', '$categoria', '$modelo', '$caracteristica1', '$caracteristica2', '$caracteristica3', $precio)";

    // Ejecuto la consulta
    mysqli_query($conexion, $SQL);

}

?>


<?php

function mostrar(){

// me conecto a la base de datos
$conexion = conexion();

// creo la consulta para selecionar y mostrar los registros de datos
$out_datos = "select * from productos";
$registros = mysqli_query($conexion,$out_datos);

//muestro los datos en una tabla mientras existan datos
while($registro=mysqli_fetch_row($registros)){ 
    ?><tr> 
    <?php 
    // si algun compo esta vacio lo reemplazo con ---
    for ($i = 0; $i < 9; $i++) {
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
    </tr> 

<?php 
}
}
?> 


<?php 
function buscar($opcion,$busqueda){
    //me conecto a la base de datos
    $conexion = conexion(); 

    // dependiendo de la opcion elegida busco lo ingresado por ID o por Titulo
    switch ($opcion) {
        case 'id':
            //todo lo ingresado es del tipo texto pero si es de tipo numerico pregunto con is_numeric() y me devuelve True o False
            if (is_numeric($busqueda)) {
                $SQL = "select * from productos WHERE ID_producto = '$busqueda'";
                break;
            }
            else {
                echo "Debe ingresar un ID (Numero entero)";
                exit();
            }
           
        case 'titulo':
            $SQL = "select * from productos WHERE titulo LIKE '%$busqueda%'";
            break;
        
        default:
           echo "error de busquda";
            break;
    }

$resultado= mysqli_query($conexion, $SQL);

if (mysqli_affected_rows ($conexion) > 0) {

?>
    <form action="" method="post">

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
    <th></th>
    </tr>
    <?php 
    // mientras existan coincidencias 
    while($registro=mysqli_fetch_row($resultado)){ 
    ?>
    <tr> 
    
    <?php 
    // si algun compo esta vacio lo reemplazo con ---
    for ($i = 0; $i < 9; $i++) {
    ?>
    <td>
    <?php
    if ($registro[$i] == "") {
        echo "---";

    } 
    else 
    {
        echo $registro[$i];
    }
    ?>
    </td>


    <?php
    }

    // despues de cada registro pongo un boton de seleccion
    ?>
    
    <td><input type="radio" name="id" value="<?php echo $registro[0];?>" required></td>
    
    </tr> 

<?php 
}

?>
</table>  

<input type="submit" name="validar" value="modificar" formaction="./confirmacionAM.php"> 
<input type="submit" name="validar" value="eliminar" formaction="./confirmacionAM.php"> 


</form>

<?php 
}
else {
    echo "No se encontraron coincidencias";
}
}
?>

</body>
</html> 