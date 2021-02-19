<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="../CSS/catalogo.css">



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

	<h1 class="titulo">Buscar libro</h1>

	

	<div class="contenedornoticias">
	<FORM ACTION="catalogo.php" METHOD="POST">
		<p>
			<input name="libro" type="text"> <select name="accion">
				<option value=0>Titulo</option>
				<option value=1>Genero</option>
				<option value=2>Autor</option>
				<option value=3>Editorial</option>
			</select>&nbsp;&nbsp;<INPUT TYPE="submit" VALUE="Buscar">
		</p>
	</FORM>
		<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "biblioteca2";

		$conexion = mysqli_connect($servername, $username, $password, $database);

		if (empty($_POST["libro"])) {
			$consulta = "SELECT * from libros";
			$resultado = $conexion->query($consulta);
		} else {
			$libro = $_POST["libro"];
			$selectOption = $_POST['accion'];

			if ($selectOption == 0) {
				$consulta = "SELECT * from libros where Titulo='". $libro ."'";
				$resultado = $conexion->query($consulta);
			}

			if ($selectOption == 1) {
				$consulta = "SELECT * from libros where Genero='". $libro ."'";
				$resultado = $conexion->query($consulta);
			}

			if ($selectOption == 2) {
				$consulta = "SELECT * from libros where Autor='". $libro ."'";
				$resultado = $conexion->query($consulta);
			}

			if ($selectOption == 3) {
				$consulta = "SELECT * from libros where Editorial='". $libro ."'";
				$resultado = $conexion->query($consulta);
			}

		}


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
			echo "<td><img src='../../Imagenes/". $fila["Portada"] ."' width='250px' height='300px'></td>";
			echo "<td>". $fila["Disponibilidad"] ."</td>";
			echo "</tr>";
		}

		echo "</table>";
		echo "<br>";


		?>
	</div>


</body>


</html>
