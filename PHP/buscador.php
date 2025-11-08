<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<!-- 
Por ejemplo si quisiéramos buscar el empleado código 20981 nuestra sentencia SQL seria: select * from empleados 
where codigoEmpleado=20981. Pero si buscamos un nombre o apellido, es probable que los datos estén escritos 
exactos o no. En esos casos podríamos usar un LIKE y los comodines %.  

Por ejemplo si buscamos los empleados que se llamen Sonia la sentencia podría ser select * from empleados where 
nombre like “%Sonia%”. De esta manera nos aparecerían todos los empleados cuyo primer o segundo nombre fueran 
Sonia. 
-->
<form method="post">
    <select name="" id="">
        <option value=""></option>
    </select>
    <input type="submit" name="buscarID" placeholder="Buscar por ID" >
    <input type="submit" name="buscarDescripcion" placeholder="descripcion">
</form>

<?php
if(isset($_POST['opcion']))
    {
        $opcion = $_POST['menu'];

        switch ($opcion) {
            case 'carga':
                
                break;
            
            default:
                # code...
                break;
        }
    }

    ?>


</body>
</html>