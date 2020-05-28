
<?php
//importa lo que tiene conexion.php para usar su variable $conexion
require 'conexion.php';


//inicia la sesion
//session_start();

$usuario = $_POST['correo'];
$password = $_POST['password'];

//setencia
$sentencia = "select count(*) as CONTAR from usuarios where correo = '$usuario' 
        and password = '$password'";

//hace la consulta
$consulta = mysqli_query($conexion, $sentencia);

//guarda todos los datos que trae en un array
$array = mysqli_fetch_array($consulta);

//verifica si hay datos en la tabla
if($array['CONTAR'] > 0){
    echo "Bienvenido";
    echo "Probando" .$array[2];
    //header("Location: ../index.html");
}else{
    echo "Datos Incorrectos";
    
}

?>
