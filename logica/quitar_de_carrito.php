<?php

require 'conexion.php';
session_start();

if(isset($_GET['descripcion'])){
    
    $descripcion = $_GET['descripcion'];
    $usuario = $_SESSION['nombre_usuario'];
    $query = "DELETE FROM carrito$usuario WHERE descripcion = '$descripcion'";
    $result = mysqli_query($conexion, $query);
    echo "la consulta muestra: ".$query;
    if(!$result){
        die("Query Failed");
    }
    header("Location: ../carrito.php");
}







?>