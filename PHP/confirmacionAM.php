<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="Body_Formulario_Accesorios"> 
<?php 


if (isset($_POST['id'])) {
    $paraBorrar=$_POST['id']; 
    $validar = $_POST['validar'];
    switch ($validar) {
        case 'modificar':
            echo "Usted va a modificar el codigo de producto: $paraBorrar"; 
            echo "<br>Esta seguro que desea continuar?<br>"; 
            ?>
            <form method=post> 
            <input type="hidden" name="modificar" value=<?php echo($paraBorrar)?> > 
            <input type="submit" value="Si" formaction="./modificacion.php"> 
            <input type="submit" value="No" formaction="./menu.php"> 
            </form> 
            <?php
            break;
        case 'eliminar':
            echo "Usted va a borrar el codigo de producto: $paraBorrar"; 
            echo "<br>Esta seguro que desea continuar?<br>"; 
            ?>
            <form method=post> 
            <input type="hidden" name="borrar" value=<?php echo($paraBorrar)?> > 
            <input type="submit" value="Si" formaction="./baja.php"> 
            <input type="submit" value="No" formaction="./menu.php"> 
            </form> 
            <?php
            break;
        default:
             echo "Ocurrio un error";
            break;
    }


 
}
?>


</body>
</html>