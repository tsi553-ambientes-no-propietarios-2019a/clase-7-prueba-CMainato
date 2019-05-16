

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
</head>
<body>
<?php
 echo 'Tienda registrada correctamente, puede iniciar sesion'; 
?>
<form action="php/proces_login.php" method ="post">
<h1>Inicio de secion</h1>

<div>
<label >Usuario:</label>
<input type="text" id = "username" name="username" required="required">
</div>
<br>

<div>
<label>Contrasenia: </label>
<input type="password" name="pass" required ="required">
</div>
<br>


<button>Ingresar</button>
<a href="registro_tienda.php">Registrarse</a>
<br><br>
</form>
</body>
</html>