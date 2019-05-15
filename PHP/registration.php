<?php
$conn = new mysqli('localhost','root','','pruebab1');
if($conn->connect_error){
    echo 'existio un erro de conexion '.$conn->connect_error;
    exit;
}
if($_POST){
    
    if(!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['passwordRep']) &&
       isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['passwordRep'])){

        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $password =$_POST ['password'];
        $passwordRep =$_POST ['passwordRep'];

        $sql_insert = " INSERT INTO tienda 
        (NombTienda, Usuario, Clave, RepClave)

        VALUES ('$nombre', '$usuario', MD5('$password'),MD5('passwordRep'))";
     
     $conn->query($sql_insert);
        if ($conn->error) {
            echo 'Hubo un error al ingresar los datos tipo de error ' .$conn->error;
            exit;
        }else{
          
           echo 'DATOS INGRESADOS CORRECTAMENTE PUEDE INICIAR SECION';
           redirect('../index.php?error_message=Usuario o clave incorrectos!');

           
        }
    }else {
      
        echo 'ingrese todos los datos para poder realizar un registro';
		exit;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <h1></h1>
    <form action="../index.php" method = "post">
    <div>
    
    
    </div>
    <div>
    
    </div>
</body>
</html>