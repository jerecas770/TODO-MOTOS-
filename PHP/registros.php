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
include "funciones\ABM.funciones.php";
mostrar();

?>





</table> 
</body>
</html>