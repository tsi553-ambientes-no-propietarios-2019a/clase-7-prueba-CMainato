


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
</head>
<body>

<form action="php/Registra_Producto.php" method ="post">
<h1>Registro de Productos</h1>

<div>
<label >Codigo:</label>
<input type="text" id = "Codigo" name="Codigo" required="required">
</div>
<br>

<div>
<label >Nombre:</label>
<input type="text" id = "Nombre" name="Nombre" required="required">
</div>
<br>

<div>
<label >Tipo:</label>
<select name="Tipo">
  <option value="C01">Alimento</option>
  <option value="C02">Vestimenta</option>
  <option value="C03">Salud</option>
  <br>
</select>
<br>

<div>
<label >Cantidad:</label>
<input type="text" id = "Cantidad" name="Cantidad" required="required">
</div>
<br>

<div>
<label >Precio:</label>
<input type="text" id = "Precio" name="Precio" required="required">
</div>
<br>


<button>Guardar</button>
</form>

    
</body>
</html>