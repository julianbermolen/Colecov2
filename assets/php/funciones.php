<?php
	function listarProductos()
	{
		include("assets/db/conexion.php");
		$query = "SELECT * FROM producto";
		$resultado = mysqli_query($conn,$query);

		return $resultado;
	}

?>