<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Meta Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Description -->
    <meta name="description"
        content="Página de gestión de teléfonos donde puedes listar, crear, editar y eliminar registros de teléfonos.">
    <!-- Meta Keywords -->
    <meta name="keywords"
        content="gestión de teléfonos, teléfonos, listado de teléfonos, editar teléfonos, eliminar teléfonos">
    <!-- Meta Author -->
    <meta name="author" content="Tu Nombre o Empresa">
    <!-- Meta Robots -->
    <meta name="robots" content="index, follow">
    <!-- Meta Open Graph for Social Media -->
    <meta property="og:title" content="Gestión de Teléfonos">
    <meta property="og:description"
        content="Página de gestión de teléfonos donde puedes listar, crear, editar y eliminar registros de teléfonos.">
    <meta property="og:image" content="URL_de_la_imagen_de_previsualización">
    <meta property="og:url" content="URL_de_tu_página">
    <meta property="og:type" content="website">
    <!-- Meta Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gestión de Teléfonos">
    <meta name="twitter:description"
        content="Página de gestión de teléfonos donde puedes listar, crear, editar y eliminar registros de teléfonos.">
    <meta name="twitter:image" content="URL_de_la_imagen_de_previsualización">
    <meta name="twitter:site" content="@tu_usuario_de_twitter">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>Gestión de Teléfonos</title>
</head>

<body>
    <div class="container">
        <h1>Gestión de Teléfonos</h1>

        <?php
        include 'conexion.php';

        // Listar registros
        echo "<h2>Listado de Teléfonos</h2>";
        echo "<br>";
        echo "<div class='vin'>";
        echo "<a href='crear.php' class='btn btn-primary'>Crear Nuevo Teléfono</a>";
        echo "</div>";
        echo "<br>";

        $sql = "SELECT id, nombre, marca, stock FROM tb_telefonos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped' border='1'><tr><th>ID</th><th>Nombre</th><th>Marca</th><th>Stock</th><th>Acciones</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['marca']}</td>
                    <td>{$row['stock']}</td>
                    <td>
                        <a class='btn btn-warning' href='actualizar.php?id={$row['id']}'>Editar</a> | 
                        <a class='btn btn-danger'href='eliminar.php?id={$row['id']}'>Eliminar</a>
                    </td>
                  </tr>";
            }
            echo "</table>";
        } else {
            echo "No hay registros.";
        }

        $conn->close();
        ?>

    </div>

</body>

</html>