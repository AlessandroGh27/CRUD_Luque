<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Editar Teléfono</title>
</head>
<body> 
    <div class="container">
        <h1>Editar Teléfono</h1>

        <?php
        include 'conexion.php';

        $id = $_GET['id'];
        $sql = "SELECT id, nombre, marca, stock FROM tb_telefonos WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row) {
            ?>
        
            <form class="row g-3" action="procesar.php" method="post">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="validationDefault01" class="form-label">Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
                <br>
                    <label for="validationDefault01" class="form-label">Marca</label>
                    <input type="text" name="marca" value="<?php echo $row['marca']; ?>" required>
                <br>
                    <label for="validationDefault01" class="form-label">Stock</label>
                    <input type="number" name="stock" value="<?php echo $row['stock']; ?>" required>
                <br>
                <div class="col-12">
                    <input class="btn btn-primary" type="submit" value="Actualizar Teléfono">
                    <a href="index.php" class="btn btn-secondary">Volver al Listado</a>
                </div>
            
            </form>
            
            <?php
        } else {
            echo "Registro no encontrado.";
        }

        $conn->close();
        ?>

        
    </div>
</body>
</html>
