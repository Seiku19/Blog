<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="CSS/admin.css">

</head>

<body>

	<div class="logout">
		<?php
		session_start();

		if ($_SESSION["usuario"] == "admin") {
			echo "<a href='admin.php'>" . $_SESSION["usuario"] . "</a>";
		}
		
		if (empty($_SESSION["usuario"])) {
		
			echo "<h1 class='texto'>Acceso denegado necesita logearse</h1>";
			echo '<a href="formlogin.php">Volver a pagina de login</a>';
		
			exit();
		}
		?>
		<a href="../Pagina/PHP/logout.php">Cerrar sesion</a>
	</div>

	<header>

		<h1>Biblioteca</h1>

	</header>

	<br>

	<ul>
		<li><a href="../Pagina/Formularios/inicio.php">Inicio</a></li>
		<li><a href="../Pagina/Formularios/catalogo.php">Catálogo</a></li>
		<li><a href="../Pagina/Formularios/formprestamos.php">Préstamos</a></li>
		<li><a href="../Pagina/Formularios/formsugerencia.php">Sugerencias</a></li>
	</ul>

	<hr class="hrmenu">

	<br>

	<ul>
		<li><a href="Paginas/formlibro.php">Añadir libro</a></li>
		<li><a href="Paginas/formeliminarlibro.php">Eliminar libro</a></li>
		<li><a href="Paginas/formusuarios.php">Usuarios</a></li>
		<li><a href="Paginas/formgestionarprestamos.php">Gestionar prestamos</a></li>
	</ul>

	<br>
	

</body>


</html>
