<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="../CSS/inicio.css">

</head>

<body>

	<?php
	session_start();

	if (empty($_SESSION["usuario"])) {

		echo "<h1 class='texto'>Acceso denegado necesita logearse</h1>";
		echo '<a href="formlogin.php">Volver a pagina de login</a>';

		exit();
	}

	?>

	<div class="logout">
		<?php
		if ($_SESSION["usuario"] == "admin") {
			echo "<a href='../../Admin/admin.php'>" . $_SESSION["usuario"] . "</a>";
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

	<h1 class="tnoticia">Noticias</h1>

	<div class="contenedornoticias">

		<div class="noticia">
			<div class="imagen">
				<img src="../../Imagenes/biblioteca.jpg" height="120px"
					width="200px">
			</div>
			<h1>Lorem ipsum</h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
				adipisci eveniet officia odit id, repellendus doloremque architecto
				laborum aliquid, ea inventore beatae? Velit numquam fugit aliquid
				iure deserunt ut quisquam!</p>

		</div>

		<hr>

		<div class="noticia">
			<div class="imagen">
				<img src="../../Imagenes/biblioteca.jpg" height="120px"
					width="200px">
			</div>
			<h1>Lorem ipsum</h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
				adipisci eveniet officia odit id, repellendus doloremque architecto
				laborum aliquid, ea inventore beatae? Velit numquam fugit aliquid
				iure deserunt ut quisquam!</p>

		</div>

		<hr>

		<div class="noticia">
			<div class="imagen">
				<img src="../../Imagenes/biblioteca.jpg" height="120px"
					width="200px">
			</div>
			<h1>Lorem ipsum</h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
				adipisci eveniet officia odit id, repellendus doloremque architecto
				laborum aliquid, ea inventore beatae? Velit numquam fugit aliquid
				iure deserunt ut quisquam!</p>

		</div>



	</div>

</body>


</html>
