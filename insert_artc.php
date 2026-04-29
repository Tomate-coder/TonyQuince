<?php
include("connection.php");

$con = connection();

$id = null;
$name = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

$sql = "INSERT INTO articulos VALUES('$id','$name', '$precio', '$stock')";

$query = mysqli_query($con, $sql);
if($query) {  
    Header("Location: index.php");
};

?>
