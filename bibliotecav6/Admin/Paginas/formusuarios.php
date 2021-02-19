<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="../CSS/usuarios.css">

</head>

<body>

	<div class="logout">
	 <?php
session_start();

if ($_SESSION["usuario"] == "admin") {
    echo "<a href='../admin.php'>" . $_SESSION["usuario"] . "</a>";
}

if (empty($_SESSION["usuario"])) {

	echo "<h1 class='texto'>Acceso denegado necesita logearse</h1>";
	echo '<a href="formlogin.php">Volver a pagina de login</a>';

	exit();
}
?>
		<a href="../../Pagina/PHP/logout.php">Cerrar sesion</a>
	</div>

	<header>

		<h1>Biblioteca</h1>

	</header>

	<br>
	
	<ul>
		<li><a href="../../Pagina/Formularios/inicio.php">Inicio</a></li>
		<li><a href="../../Pagina/Formularios/catalogo.php">Catálogo</a></li>
		<li><a href="../../Pagina/Formularios/formprestamos.php">Préstamos</a></li>
		<li><a href="../../Pagina/Formularios/formsugerencia.php">Sugerencias</a></li>
	</ul>

	<hr class="hrmenu">
	<br>

	<h1 class="titulo">Eliminar usuario</h1>

	<div class="contenedornoticias">
	<FORM ACTION="../PHP/eliminarusuario.php" METHOD="POST">
		<p>
			 
			<input name="usuario" type="text" placeholder="DNI"> 
			<INPUT TYPE="submit" VALUE="Eliminar">
		</p>
	</FORM>
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca2";

$conexion = mysqli_connect($servername, $username, $password, $database);

$consulta = "SELECT * from usuario";
$resultado = $conexion->query($consulta);
echo "<br><table border='1px solid black' align='center'>";

echo "<tr>";
echo "<td> DNI </td>";
echo "<td> Nombre </td>";
echo "<td> Apellidos </td>";
echo "<td> Contraseña </td>";
echo "<td> Telefono </td>";
echo "<td> Dirección </td>";
echo "</tr>";

while ($fila = $resultado->fetch_array()) {

    echo "<tr>";
    echo "<td>" . $fila["DNI"] . "</td>";
    echo "<td>" . $fila["Nombre"] . "</td>";
    echo "<td>" . $fila["Apellidos"] . "</td>";
    echo "<td>" . $fila["Contraseña"] . "</td>";
    echo "<td>" . $fila["Telefono"] . "</td>";
    echo "<td>" . $fila["Dirección"] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<br>";

?>
	</div>


</body>


</html>