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
			$query = "SELECT b.nombre  as nombre1,a.idProducto,a.nombre,a.descripcion,a.precio,a.idtipo,a.imagen1,a.imagen2,a.imagen3 FROM producto a JOIN tipoproducto b on a.idtipo = b.idtipo";
			$resultado = mysqli_query($conn,$query);

			return $resultado;
		}
	function traerProducto($id){
			include("assets/db/conexion.php");
			$query = "select * from producto where idProducto = $id";
			$resultado = mysqli_query($conn,$query);

			return $resultado;
	}
	function listarCategorias(){
		include("assets/db/conexion.php");
		$query = "select * from tipoproducto";
		$resultado = mysqli_query($conn,$query);

		return $resultado;
	}
?>
