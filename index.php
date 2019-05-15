<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
</head>
<body>

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
</form>

    
</body>
</html>