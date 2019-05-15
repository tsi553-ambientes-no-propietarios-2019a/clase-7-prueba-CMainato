<?php 
include('../common/utils.php');
if($_POST) {
	if (isset($_POST['username']) && isset($_POST['pass']) && !empty($_POST['username']) && !empty($_POST['pass'])) {
		$username = $_POST['username'];
		$password = $_POST['pass'];

		$sql = "SELECT *
		FROM tienda
		WHERE Usuario='$username'
		AND Clave=MD5('$pass')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['tienda'] = [
						'Usuario' => $row['username'],
						'idTienda' => $row['idTienda']
					];
					redirect('../inicio.php');
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}


	} else {
		redirect('../index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../inicio.php');
}