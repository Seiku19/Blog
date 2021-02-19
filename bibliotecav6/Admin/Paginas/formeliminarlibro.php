<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="../CSS/eliminarlibro.css">

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

	<h1 class="titulo">Eliminar libro</h1>

	<br>

	<div class="contenedornoticias">

		<form action='../PHP/eliminarlibro.php' method='post'>
			<p>
				ISBN: <input type='text' name='isbn' size="45" required /> <input
					class="boton" type='submit' value="Eliminar libro" />
			</p>
		</form>

		<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "biblioteca2";

		$conexion = mysqli_connect($servername, $username, $password, $database);

		$consulta = "SELECT * from libros";
		$resultado = $conexion->query($consulta);

		echo "<br><table border='1px solid black' align='center'>";

		echo "<tr>";
		echo "<td> ISBN </td>";
		echo "<td> Titulo </td>";
		echo "<td> Genero </td>";
		echo "<td> Editorial </td>";
		echo "<td> Autor </td>";
		echo "<td> Sinopsis </td>";
		echo "<td> Portada </td>";
		echo "<td> Disponibilidad </td>";
		echo "</tr>";

		while($fila = $resultado->fetch_array()) {

			echo "<tr>";
			echo "<td>". $fila["ISBN"] ."</td>";
			echo "<td>". $fila["Titulo"] ."</td>";
			echo "<td>". $fila["Genero"] ."</td>";
			echo "<td>". $fila["Editorial"] ."</td>";
			echo "<td>". $fila["Autor"] ."</td>";
			echo "<td>". $fila["Sinopsis"] ."</td>";
			echo "<td>". $fila["Portada"] ."</td>";
			echo "<td>". $fila["Disponibilidad"] ."</td>";
			echo "</tr>";
		}

		echo "</table>";


		?>

		<p class="texto" id="incorrecto"></p>

	</div>

</body>


</html>
