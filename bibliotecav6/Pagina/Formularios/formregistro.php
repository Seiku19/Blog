<!DOCTYPE html>

<html>

<header>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="../CSS/registro.css">
</header>

<body>

    <div>

        <h1>Registro</h1>
       
        <form action='../PHP/registro.php' method='post'>
            <p>DNI: <input type='text' name='dni' size="45" required /></p>
            <p>Nombre: <input type='text' name='nombre' size="45" required /></p>
            <p>Apellidos: <input type='text' name='apellido' size="45" required /></p>
            <p>Contraseña: <input type='password' name='contraseña' size="45" required /></p>
            <p>Télefono: <input type='text' name='telefono' size="45" required /></p>
            <p>Direccón: <input type='text' name='direccion' size="45" required /></p>
            <p><input class="boton" type='submit' value="Enviar"/></p>
        </form>
        
        <form action="../Formularios/formlogin.php" method="post">
            <input  type="submit" value="Volver al Login" >
        </form>
            
            <p id="incorrecto"></p>

    </div>


</body>


</html>