<?php
	function filtrarUsuarios(){
		if(isset($_SESSION['tipo']) || $_SESSION['tipo'] == 'magia'){
			
		}else{
			header('Location: assets/login.php');
		}
	}
	function listarProductos()
		{
			include("assets/db/conexion.php");
			$query = "SELECT * FROM producto";
			$resultado = mysqli_query($conn,$query);

			return $resultado;
		}

?>