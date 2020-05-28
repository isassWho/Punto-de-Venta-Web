<?php

require "conexion.php";
session_start();

$usuario = $_SESSION['nombre_usuario'];

$query = "DELETE FROM carrito$usuario";
mysqli_query($conexion, $query);

echo "Compra Finalizada <br>";
echo "<a href='../carrito.php'>Volver</a>";

//header("Location: ../carrito.php");



?>