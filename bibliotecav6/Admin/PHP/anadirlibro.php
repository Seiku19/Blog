<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);

$insertar = "INSERT INTO libros (ISBN, Titulo, Genero, Editorial, Autor, Sinopsis, Portada, Disponibilidad) Values ('" . $_POST['isbn'] . "','" . $_POST['titulo'] . "','" . $_POST['genero'] . "','" . $_POST['editorial'] . "','" . $_POST['autor'] . "','" . $_POST['sinopsis'] . "','" . $_POST['portada'] . "','" . $_POST['disponibilidad'] . "')";

if (mysqli_query($conexion, $insertar)) {
    require '../Paginas/formlibro.php';
    
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Libro añadido';</script>";
    
    
} else {
    require '../Paginas/formlibro.php';
    echo "<script>document.getElementById('incorrecto').innerHTML = 'Error el libro no ha podido añadirse';</script>";
}