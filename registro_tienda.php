<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prueba</title>
</head>
<body>

<form action="PHP/registration.php" method ="post">
	<form action="registro_tienda.php" method ="post">
<h1>Registro de tienda</h1>

<div>
<label >Nombre tienda:</label>
<input type="text" id = "username" name="nombre" required="required">
</div>
<br>

<div>
<label >Usuario:</label>
<input type="text" id = "username" name="usuario" required="required">
</div>
<br>

<div>
<label>Contrasenia: </label>
<input type="password" name="password" required ="required">
</div>
<br>

<div>
<label>Repetir Contrasenia: </label>
<input type="password" name="passwordRep" required ="required">
</div>
<br>

<button>Guardar</button>
</form>

    
</body>
</html>