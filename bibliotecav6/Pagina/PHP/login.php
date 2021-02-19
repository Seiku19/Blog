<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);

$usuario = $_REQUEST['usuario'];
$palabra_secreta = $_REQUEST['palabra_secreta'];

$hash = password_hash($palabra_secreta, PASSWORD_DEFAULT);

$consulta = "SELECT dni, Contraseña from usuario where dni='".$usuario."' ";
$resultado_consulta = $conexion->query($consulta);
$usuario_contrasena_correcto = $resultado_consulta->fetch_array();

if ($usuario === $usuario_contrasena_correcto[0] && password_verify($palabra_secreta, $usuario_contrasena_correcto[1])) {
    
    session_start();
    
    $_SESSION["usuario"] = $usuario;
  
} else {
    
    echo "El usuario o la contraseña son incorrectos";

}