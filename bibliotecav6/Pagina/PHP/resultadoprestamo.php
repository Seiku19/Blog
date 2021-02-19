
<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);

$prestamo = $_POST["prestamo"];

$selectOption = $_POST['accion'];

if ($selectOption == 0) {
	$consulta_insertar = "insert into prestamo (DNI_usuario, ISBN_libro) values ('". $_SESSION['usuario'] ."', '". $prestamo ."' )";
	$resultado = $conexion->query($consulta_insertar);
	
	$modificar = "UPDATE libros set Disponibilidad = 'No' WHERE ISBN like '" . $prestamo . "'";
	$resultado2 = $conexion->query($modificar);
}

if ($selectOption == 1) {
	$consulta_eliminar = "DELETE from prestamo where ISBN_libro like '". $prestamo . "'";
	$resultado = $conexion->query($consulta_eliminar);
	
	$modificar = "UPDATE libros set Disponibilidad = 'Si' WHERE ISBN like '" . $prestamo . "'";
	$resultado2 = $conexion->query($modificar);
}

header("Location: ../Formularios/formprestamos.php");
