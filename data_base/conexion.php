<?php 
// creo la conexion con la base de datos

function conexion($servidor, $usuario, $contraseña, $dataBase)
{
   
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $dataBase);

    return $conexion;
};

?>