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

include "funciones/conexion.funciones.php";

if(isset($_POST['buscar']))
{
    $opcion = $_POST['opcion'];
    $busqueda = $_POST['busqueda'];

    switch ($opcion) {
        case 'id':
           $SQL = "select * from productos WHERE ID_producto = '$busqueda'";
            break;
        case 'titulo':
            $SQL = "select * from productos WHERE titulo LIKE '%$busqueda%'";
            break;
        
        default:
           echo "error de busquda";
            break;
    }

$resultado= mysqli_query(conexion(), $SQL);
?>
    <form action="">

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
    ?>
    <td><input type="radio" name="id" value="<?php echo $registro[0];?>" required></td>
    
    </tr> 

<?php 
}

?>
</table>  

</form>
<?php 


}
?> 







</body>
</html>