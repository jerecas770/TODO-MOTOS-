<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.html");
    exit();
}

include("conexion.php");

// 📌 Búsqueda
$buscar = $_GET['buscar'] ?? '';
$sql = "SELECT * FROM productos WHERE nombre LIKE '%$buscar%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>

    <style>
        body { 
            font-family: Arial; 
            background: #f4f4f4; 
            margin: 0;
            padding: 20px; 
        }

        h2 { 
            margin-left: 10px; 
            font-size: 28px; 
        }

        /* BUSCADOR */
        .buscar-box {
            margin-bottom: 20px;
            margin-left: 10px;
        }

        .buscar-box input {
            padding: 8px; 
            width: 300px; 
            font-size: 16px; 
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .buscar-box button {
            padding: 8px 12px; 
            font-size: 16px; 
            border-radius: 5px; 
            background: #0066ff; 
            color: white; 
            border: none; 
            cursor: pointer;
        }

        /* GRILLA CENTRADA */
        .producto-container { 
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            gap: 25px; 
            padding: 10px;
        }

        /* TARJETA DE PRODUCTO */
        .producto-card {
            background: white; 
            padding: 15px; 
            border-radius: 10px;
            text-align: center; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .producto-card img {
            width: 150px; 
            height: 150px; 
            object-fit: contain; 
            margin-bottom: 10px;
        }

        .producto-card h4 { 
            margin-top: 10px; 
            font-size: 18px; 
        }

        /* Solo el precio usa la negrita original */
        .producto-precio { 
            font-weight: bold; 
            margin: 5px 0; 
        }

        /* Descripción */
        .producto-desc {
            font-weight: normal;
            color: #555;
            font-size: 14px;
            margin: 5px 0 8px 0;
            line-height: 1.2;
        }

        /* Stock */
        .producto-stock {
            font-weight: bold;
            font-size: 14px;
            margin: 5px 0;
        }

        .links a { 
            text-decoration: none; 
            color: #007bff; 
            font-size: 14px; 
            font-weight: bold;
        }

        .links a:hover { 
            text-decoration: underline; 
        }

    </style>

</head>
<body>

<h2>TODOMOTOS</h2>

<!-- BUSCADOR -->
<form method="GET" class="buscar-box">
    <input type="text" name="buscar" placeholder="Buscar producto..." value="<?php echo $buscar; ?>">
    <button type="submit">Buscar</button>
</form>

<!-- LISTA DE PRODUCTOS -->
<div class="producto-container">

<?php while ($row = $result->fetch_assoc()) { ?>
    <div class="producto-card">

        <img src="imagenes/<?php echo $row['imagen']; ?>" alt="Imagen del producto">

        <h4><?php echo $row['nombre']; ?></h4>

        <!-- Descripción -->
        <p class="producto-desc">
            <?php echo $row['descripcion']; ?>
        </p>

        <!-- Stock -->
        <p class="producto-stock">
            Stock: 
            <?php echo ($row['stock'] > 0) 
                ? "<span style='color:green;'>".$row['stock']." unidades</span>" 
                : "<span style='color:red;'>SIN STOCK</span>"; ?>
        </p>

        <!-- Precio -->
        <p class="producto-precio">$<?php echo $row['precio']; ?></p>

        <!-- Links -->
        <div class="links">
            <a href="modificar.php?id=<?php echo $row['id_producto']; ?>">Modificar</a> |
            <a href="eliminar.php?id=<?php echo $row['id_producto']; ?>" 
               onclick="return confirm('¿Seguro que querés eliminar este producto?');">
               Eliminar
            </a>
        </div>

    </div>
<?php } ?>

</div>

</body>
</html>
    