<!DOCTYPE html>

<html>

<header>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="../CSS/login.css">

</header>

<body>

    <div>

        <h1>Login</h1>
        <br>

        <input id="usuario" type="text" placeholder="DNI"> <br> <br>
        <input id="palabra_secreta" type="password" placeholder="CONTRASEÑA"> <br> <br>
        <button class="boton" onclick="logear()">Login</button>
        
        <form action="formregistro.php" method="post">
            <input type="submit" value="Registro">
        </form>

        <p id="resultado"></p>

    </div>
    
	<script src="../JavaScript/login.js"></script>
   
</body>


</html>