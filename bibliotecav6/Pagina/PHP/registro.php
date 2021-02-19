<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);


$cifrado = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);


$insertar = "INSERT INTO usuario (DNI, Nombre, Apellidos,Contraseña, Telefono, Dirección) Values ('" . $_POST['dni'] . "','" . $_POST['nombre'] . "','" . $_POST['apellido'] . "','" . $cifrado . "','" . $_POST['telefono'] . "','" . $_POST['direccion'] . "')";

if (mysqli_query($conexion, $insertar)) {
    require '../Formularios/formregistro.php';
    
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Registro completado ';</script>";
    
    
} else {
    require '../Formularios/formregistro.php';
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Error el usuario no ha podido registrarse';</script>";
}