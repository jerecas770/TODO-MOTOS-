<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="Body_Formulario_Accesorios">


<a href="menu.php"><button>MENU</button></a>


<form class="Form_Accesorios" method="post">
    <select name="opcion" required>
        <option value="id">Buscar ID</option>
        <option value="titulo">Buscar por titulo</option>
    </select>
    <input type="text" name="busqueda" required>
    <input type="submit" name="buscar" value="buscar" >
</form>


<?php 

include "funciones/ABM.funciones.php";

if(isset($_POST['buscar']))
{
    $opcion = $_POST['opcion'];
    $busqueda = $_POST['busqueda'];
    buscar($opcion,$busqueda);

}
?> 




</body>
</html>