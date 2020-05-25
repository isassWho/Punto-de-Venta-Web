
<?php
//importa lo que tiene conexion.php para usar su variable $conexion
require 'conexion.php';

//inicia la sesion
//session_start();

$correo = $_POST['correo'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = "visitante";

//setencia
$sentencia = "insert into usuarios values ('$correo', '$password', '$nombre', '$apellido', '$usuario')";

//hace la consulta
$consulta = mysqli_query($conexion, $sentencia);

//header ("Location: ../cuenta.html");
echo '
<h2>Registrado Correctamente</h2>
<a href="../cuenta.html">Iniciar Sesión.</a>
';


?>
