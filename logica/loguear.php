<?php
require 'conexion.php';
session_start();

$correo = $_POST['correo']; 
$password = $_POST['password']; 

$sentencia = "select count(*) as CONTAR from usuarios where correo = '$correo' and password = '$password'";

$consulta = mysqli_query($conexion, $sentencia);

$array = mysqli_fetch_array($consulta);

if ($array['CONTAR'] > 0) {
    $_SESSION['email'] = $correo;

    $sent = "select nombre from usuarios where correo = '$correo'";
    $cons = mysqli_query($conexion, $sent);
    $nombre_usuario = mysqli_fetch_array($cons);

    $_SESSION['nombre_usuario'] = $nombre_usuario[0];
    
    header("Location: ../principal.php");
}else{
    echo "Datos incorrectos";
}



?>