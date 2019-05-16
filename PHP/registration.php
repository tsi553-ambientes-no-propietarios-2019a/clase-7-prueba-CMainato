<?php
$conn = new mysqli('localhost','root','','pruebab11');
if($conn->connect_error){
    echo 'existio un erro de conexion '.$conn->connect_error;
    exit;
}
if($_POST){
    
    if(isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['passwordRep']))
    {

        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $password =$_POST ['password'];
        $passwordRep =$_POST ['passwordRep'];

        $sql_insert = " INSERT INTO tienda 
        (NombTienda, Usuario, Clave)

        VALUES ('$nombre', '$usuario', MD5('$password'))";
     
     }
}
?>

<?php 
    if($_POST){
    if($password == $passwordRep){
            $sql = "SELECT * FROM tienda WHERE Usuario = '$usuario'";
            $res = $conn->query($sql); 
           
            if($res->num_rows > 0){
                echo 'El usuario ya existe'; 
            }else{
                $conn->query($sql_insert);
                header('Location: ../index.php?mensaje=Tienda registrada correctamente, puede iniciar sesion');
                exit; 
            }
        }else{
    $conn->query($sql_insert);
            header('Location: ../registro_tienda.php?mensaje=Las contraseñas no coinciden');
            echo 'Las contraseñas no coinciden'; 
        }
    }
?>
