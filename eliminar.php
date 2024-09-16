<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Teléfono</title>
</head>
<body>
    <h1>Eliminar Teléfono</h1>

    <?php
    include 'conexion.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM tb_telefonos WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado exitosamente";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

    <h2><a href="index.php">Volver al Listado</a></h2>
</body>
</html>
