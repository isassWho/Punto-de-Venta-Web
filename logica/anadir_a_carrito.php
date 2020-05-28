<?php

require 'conexion.php';
session_start();




if(isset($_POST['anadir_a_carrito'])){
    
    $descripcion = $_GET['descripcion'];
    $precio_articulo = "999";
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $consulta = "INSERT INTO carrito$nombre_usuario VALUES ('$descripcion', '$precio_articulo')"; 
    $result = mysqli_query($conexion, $consulta); 

    header("Location: ../principal.php");

    /*
    echo "Añadido al Carrito <br>";
    echo "$consulta <br>";
    echo "<a href='../principal.php'>Regresar</a>";
    */

}



?>