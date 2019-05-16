<?php 
	session_start(); 

	if( $_SERVER['SCRIPT_NAME'] == '../index.php' && isset($_SESSION['user']) ) {
	header('Location: inicio.php'); 
	exit; 
	}

	if($_GET) {
	if(isset($_GET['mensaje'])) {
		$mensajeDesdeRegistro = $_GET['mensaje'];
		echo $mensajeDesdeRegistro;
	}
}



if($_POST) {
	if (isset($_POST['username']) && isset($_POST['pass'])) {
		$username = $_POST['username'];
		$password = $_POST['pass'];
$conn = new mysqli('localhost','root','','pruebab11');


		$sql = "SELECT *
		FROM tienda
		WHERE Usuario='$username'
		AND Clave=MD5('$password')";
		$res = $conn->query($sql); 
			if($res->num_rows > 0){
				

				while ($row = $res->fetch_assoc()){
				$_SESSION['user'] = ['username'=>
				 $row['Usuario'], 'id'=> $row['idTienda']];
				
					$NombredeUsuario = $row['Usuario'];
					$NombredeTienda = $row['NombTienda'];
					$idUsu = $row['idTienda'];
		
				header("Location: ../inicio.php?nom=$NombredeUsuario&tien=$NombredeTienda&id=$idUsu"); 
				exit;
			}

			}else{
				echo 'Usuario o contraseña incorrecto'; 
			}
		}
	}
?>
