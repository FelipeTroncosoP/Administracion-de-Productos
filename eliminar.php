<?php 
session_start();

$varsession = $_SESSION['email'];
if($varsession==null || $varsession=''){
    echo 'Usted no tiene autorizacion';
header("Location: index.php");
    die();
}
include("conexion.php");

if (isset($_GET['id_producto'])){
    $id = $_GET['id_producto'];
    $query = "DELETE FROM productos WHERE id_producto= $id";
    $result = mysqli_query($link,$query);
    
    if (!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = "Producto eliminado correctamente";
    $_SESSION['message_type'] = "danger";
    
    header("Location: mostrar_productos.php");
}


?>