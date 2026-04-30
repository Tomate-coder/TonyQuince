<?php
include("connection.php");

$con = connection();

$id = $_GET["id"];

$sql = "SELECT * FROM articulos WHERE  id_articulo = $id";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto - TONY</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
    <div class="login-container">
        <div class="card login-card border-blue">
            <h2 class="text-blue">Editar Producto</h2>
            <p style="margin-bottom: 20px; color: #666;">Modifica los valores del artículo seleccionado</p>
            
            <form action="edit_artcl.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id_articulo'] ?>">

                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>" required>
                <input type="number" name="precio" placeholder="Precio ($)" value="<?= $row['precio'] ?>" step="0.01" required>
                <input type="number" name="stock" placeholder="Stock" value="<?= $row['stock'] ?>" required>

                <input type="submit" value="Guardar Cambios" class="btn btn-blue">
            </form>
            
            <br>
            <a href="gestion.php" style="font-size: 0.9rem; color: var(--tony-blue); text-decoration: none; font-weight: bold;">← Cancelar y volver</a>
        </div>
    </div>
</body>

</html>