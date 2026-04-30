<?php
include("connection.php");

$con = connection();

$id = $_POST["id"];
$name = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

$sql = "UPDATE articulos SET nombre ='$name', precio= '$precio', stock = '$stock' WHERE id_articulo=$id";

$query = mysqli_query($con, $sql);
if ($query) {
    Header("Location: gestion.php");
};
