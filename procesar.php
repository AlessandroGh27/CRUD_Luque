<?php
include 'conexion.php';

$action = $_POST['action'];

if ($action == 'create') {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO tb_telefonos (nombre, marca, stock) VALUES ('$nombre', '$marca', $stock)";
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($action == 'update') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $stock = $_POST['stock'];

    $sql = "UPDATE tb_telefonos SET nombre='$nombre', marca='$marca', stock=$stock WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<h2><a href="index.php">Volver al Listado</a></h2>
