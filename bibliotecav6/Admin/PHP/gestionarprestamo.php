<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);

$dni = $_POST["dni"];
$isbn = $_POST["ISBN"];

$selectOption = $_POST['accion'];

if ($selectOption == 0) {
	$consulta_insertar = "insert into prestamo (DNI_usuario, ISBN_libro) values ('". $dni ."', '". $isbn ."' )";
	$resultado = $conexion->query($consulta_insertar);

	$modificar = "UPDATE libros set Disponibilidad = 'No' WHERE ISBN like '" . $isbn . "'";
	$resultado2 = $conexion->query($modificar);
}

if ($selectOption == 1) {
	$consulta_eliminar = "DELETE from prestamo where ISBN_libro like '". $isbn . "'";
	$resultado = $conexion->query($consulta_eliminar);

	$modificar = "UPDATE libros set Disponibilidad = 'Si' WHERE ISBN like '" . $isbn . "'";
	$resultado2 = $conexion->query($modificar);
}

header("Location: ../Paginas/formgestionarprestamos.php");