<?php
$conn = new mysqli('localhost','root','','pruebab1');
if($conn->connect_error){
    echo 'existio un erro de conexion '.$conn->connect_error;
    exit;
}
if($_POST){
    
    if(!empty($_POST['Codigo']) && !empty($_POST['Nombre']) && !empty($_POST['Tipo']) && !empty($_POST['Cantidad']) &&! empty($_POST['Precio']) &&
       isset($_POST['Codigo']) && isset($_POST['Nombre']) && isset($_POST['Tipo']) && isset($_POST['Cantidad'])&& isset($_POST['Precio'])){

        $Codigo = $_POST['Codigo'];
        $Nombre = $_POST['Nombre'];
        $Tipo =   $_POST ['Tipo'];
        $Cantidad =$_POST ['Cantidad'];
        $Precio = $_POST ['Precio'];

        $sql_insert = " INSERT INTO productos 
        (Codigo, Nombre, Tipo, Stock,Precio)

        VALUES ('$Codigo', '$Nombre', $Tipo, $Cantidad, $Precio )";
     
$conn->query($sql_insert);
        if ($conn->error) {
            echo 'Hubo un error al ingresar los datos tipo de error ' .$conn->error;
            exit;
        }else{
           
            include ('inicio.php');
           
        }
    }else {
      
        echo 'ingrese todos los datos para poder realizar un registro';
        exit;
    }
}
?>