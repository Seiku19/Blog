<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);

$eliminar = "DELETE FROM usuario WHERE DNI like '" . $_POST["usuario"] . "'";

if (mysqli_query($conexion, $eliminar)) {
    require '../Paginas/formusuarios.php';
    
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Usuario eliminado';</script>";
    
    
} else {
    require '../Paginas/formusuarios.php';
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Error el usuario no ha podido eliminarse';</script>";
}