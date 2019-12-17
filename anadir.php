<?php 
session_start();
include("conexion.php");

$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$stock= $_POST['stock'];
$categoria = $_POST['cod_categoria'];

$query = "INSERT INTO productos (nombre,precio,stock,cod_categoria) VALUES ('$nombre',$precio,$stock,$categoria)";

mysqli_query($link,$query);

    $_SESSION['message'] = "Su producto fue agregado correctamente!";
    $_SESSION['message_type'] = "success";
    header("Location: mostrar_productos.php");

?>