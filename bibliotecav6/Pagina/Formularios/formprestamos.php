<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="../CSS/prestamo.css">
</head>

<body>

	<div class="logout">
		<?php
		session_start();

		if ($_SESSION["usuario"] == "admin") {
			echo "<a href='../../Admin/admin.php'>" . $_SESSION["usuario"] . "</a>";
		}
		
		if (empty($_SESSION["usuario"])) {
		
			echo "<h1 class='texto'>Acceso denegado necesita logearse</h1>";
			echo '<a href="formlogin.php">Volver a pagina de login</a>';
		
			exit();
		}
		?>
		<a href="../PHP/logout.php">Cerrar sesion</a>
	</div>

	<header>

		<h1>Biblioteca</h1>

	</header>

	<br>

	<ul>
		<li><a href="inicio.php">Inicio</a></li>
		<li><a href="catalogo.php">Catálogo</a></li>
		<li><a href="formprestamos.php">Préstamos</a></li>
		<li><a href="formsugerencia.php">Sugerencias</a></li>
	</ul>

	<hr class="hrmenu">
	<br>
	<h1 class="titulo">Hacer préstamo</h1>
	
	<div class="contenedornoticias">
	<FORM ACTION="../PHP/resultadoprestamo.php" METHOD="POST">
		<p>
			<input name="prestamo" type="text" placeholder="ISBN">
			<select name="accion">
				<option value=0>Pedir libro</option>
				<option value=1>Devolver libro</option>
			</select>&nbsp;&nbsp;<INPUT TYPE="submit" VALUE="Enviar">
		</p>
	</FORM>
		<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "biblioteca2";

		$conexion = mysqli_connect($servername, $username, $password, $database);

		$consulta = "SELECT * from prestamo";
		$resultado = $conexion->query($consulta);
		echo "<br><table border='1px solid black' align='center'>";

		echo "<tr>";
		echo "<td> CodigoPrestamo </td>";
		echo "<td> DNI_usuario </td>";
		echo "<td> ISBN_libro </td>";
		echo "</tr>";

		while($fila = $resultado->fetch_array()) {

			if ($fila["DNI_usuario"] == $_SESSION["usuario"]) {
				echo "<tr>";
				echo "<td>". $fila["CodigoPrestamo"] ."</td>";
				echo "<td>". $fila["DNI_usuario"] ."</td>";
				echo "<td>". $fila["ISBN_libro"] ."</td>";
				echo "</tr>";
			}
		}

		echo "</table>";

		echo "<br>";

		?>
	</div>


</body>


</html>
