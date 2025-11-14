<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "todomotos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

<!-- MENÚ SUPERIOR -->
<style>
.menu {
    background: #f8f8f8;
    padding: 15px 20px;
    display: flex;
    gap: 25px;
    border-bottom: 1px solid #ddd;
    font-family: Arial, sans-serif;
}

.menu a {
    text-decoration: none;
    color: #0066cc;
    font-size: 18px;
    font-weight: bold;
}

.menu a:hover {
    color: #004999;
}
</style>

<div class="menu">
    <a href="../cuadroinicio.html">🏠 Cerrar Sesion</a>
    <a href="productos.php">📦 Productos</a>
    <a href="altaproducto.php">➕ Agregar Producto</a>
    <a href="../index.html">🌐 Web</a>

</div>
