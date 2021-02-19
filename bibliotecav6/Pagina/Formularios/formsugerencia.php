<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="../CSS/sugerencias.css">

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
	
	<h1 class="tsugerencia">Sugerencia</h1>

	<div class="contenedornoticias">

		<br>

		<div class="sugerencia">
			
				Asunto: <input id="asunto" type="text"> <br> <br>
				<textarea id="mensaje" rows="10" cols="60"></textarea>
				<br> <br> 
				<button onclick="enviar()">Enviar</button>
				<br> <br>
				<p id="resultado"></p>
			

		</div>

	</div>

	<script src="../JavaScript/sugerencia.js"></script>
	

</body>


</html>
