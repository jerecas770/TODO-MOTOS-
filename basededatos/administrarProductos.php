<?php include("conexion.php"); ?>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Acciones</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM productos");

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['precio']."</td>";
    echo "<td>
        <a href='modificar.php?id=".$row['id_producto']."'>Modificar</a> |
        <a href='eliminar.php?id=".$row['id_producto']."'>Eliminar</a>
    </td>";
    echo "</tr>";
}
?>
</table>
