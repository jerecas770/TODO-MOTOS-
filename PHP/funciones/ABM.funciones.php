<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

function buscar(){
    
};

?>


</body>
</html>



 