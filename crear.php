<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Crear Teléfono</title>
</head>
<body> 
    <div class="container">
    <h1>Crear Nuevo Teléfono</h1>
    
        <form class="row g-3" action="procesar.php" method="post">
        <input class="form-control" type="hidden" name="action" value="create">
        <label for="validationDefault01" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" required><br>
        <label for="validationDefault01" class="form-label">Marca</label>
        <input class="form-control" type="text" name="marca" required><br>
        <label for="validationDefault01" class="form-label">Stock</label>
        <input class="form-control" type="number" name="stock" required><br>
        <div class="col-12">
        <button class="btn btn-primary" type="submit">Crear telefono</button>
        <a href="index.php" class="btn btn-secondary">Volver al incio</a>
        </div>
    </form>
    </div>
</body>
</html>
