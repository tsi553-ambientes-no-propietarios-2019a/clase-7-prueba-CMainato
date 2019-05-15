    
<?php
$conn = new mysqli('localhost','root','','pruebab1');
if($conn->connect_error){
    echo 'se peodujo un error al tratar de conectar la base de datos ' .$conn->connect_error;
    exit;
}else{
    echo '';
    $sql_extrare = "select * from productos
    ";
    $result = mysqli_query($conn,$sql_extrare);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
<h1 align="center">Productos Registrados</h1>
<form method ="post">
<div>
<table>
<tr>
<table border="2" align="center">
    <thead>
        <tr>
<th>Codigo</th>
<th>Nombre</th>
<th>Tipo </th>
<th>Stock</th>
<th>Precio</th>
</tr>

<tr>
<?php 
$cod = 0;
while($fila = mysqli_fetch_array($result)){
    $cod = $cod+1;?>
<tr>
<td><?php echo $fila['Codigo']; ?></td>
<td><?php echo $fila['Nombre']; ?></td>
<td><?php echo $fila['Tipo']; ?></td>
<td><?php echo $fila['Stock']; ?></td>
<td><?php echo $fila['Precio']; ?></td>


<?php  } ?>
</tr>
</tr>
</table>
</div>
</form>
</body>
</html>