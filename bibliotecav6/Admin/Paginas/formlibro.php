<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="../CSS/libro.css">

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

	<h1 class="titulo">Añadir libro</h1>

	<br>

	<div class="contenedornoticias">

		<form action='../PHP/anadirlibro.php' method='post'>
			<p>
				ISBN: <input type='text' name='isbn' size="45" required />
			</p>
			<p>
				Titulo: <input type='text' name='titulo' size="45" required />
			</p>
			<p>
				Genero: <input type='text' name='genero' size="45" required />
			</p>
			<p>
				Editorial: <input type='text' name='editorial' size="45" required />
			</p>
			<p>
				Autor: <input type='text' name='autor' size="45" required />
			</p>
			<p>
				Sinopsis: <input type='text' name='sinopsis' size="45" required />
			</p>
			<p>
				Portada: <input type='text' name='portada' size="45" required />
			</p>
			<p>
				Disponibilidad: <input type='text' name='disponibilidad' size="45"
					required />
			</p>
			<p>
				<input class="boton" type='submit' value="Añadir libro" />
			</p>
		</form>

		<p class="texto" id="incorrecto"></p>

	</div>

</body>


</html>