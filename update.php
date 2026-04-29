<?php
include("connection.php");

$con = connection();

$id = $_GET["id"];

$sql = "SELECT * FROM articulos WHERE  id_articulo = $id";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="edit_artcl.php" method="POST">
            <h1>Editar Producto</h1>
            <input type="hidden" name="id" value="<?= $row['id_articulo']   ?>">

            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']   ?>">
            <input type="number" name="precio" placeholder="Precio" value="<?= $row['precio']   ?>">
            <input type="number" name="stock" placeholder="Stock" value="<?= $row['stock']   ?>">


            <input type="submit" value="Agregar Producto">

        </form>
    </div>
</body>

</html>