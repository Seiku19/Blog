<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);

$eliminar = "DELETE FROM libros WHERE ISBN like '" . $_POST["isbn"] . "'";

if (mysqli_query($conexion, $eliminar)) {
    require '../Paginas/formeliminarlibro.php';
    
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Libro eliminado';</script>";
    
    
} else {
    require '../Paginas/formeliminarlibro.php';
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Error el libro no ha podido eliminarse';</script>";
}