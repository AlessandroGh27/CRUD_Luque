<?php
// listar.php
include 'conexion.php';

$sql = "SELECT id, nombre, marca, stock FROM tb_telefonos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Marca</th><th>Stock</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['marca']}</td>
                <td>{$row['stock']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
