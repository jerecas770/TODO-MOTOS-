<?php 
// creo la conexion con la base de datos 

function conexion()
{
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $dataBase = "todo_motos";
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $dataBase);

    return $conexion;
};

?>