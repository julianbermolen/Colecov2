<?php
	include("../db/conexion.php");

	$id = $_POST['id'];
	$nombre = addslashes($_POST['nombre']);
	$descripcion = addslashes($_POST['descripcion']);
	$precio = $_POST['precio'];
	$tipo = $_POST['tipo'];
	$imagen1 = addslashes($_FILES["file"]["name"]);
	$imagen2 = addslashes($_FILES["file1"]["name"]);
	$imagen3 = addslashes($_FILES["file2"]["name"]);


if ($_FILES["file"]["error"] > 0){
	if ($imagen1 == ''){
	$query="UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio WHERE idProducto = $id";
	
	mysqli_query($conn,$query);
	header('location:../../panelAdmin.php');
		}
} else {
	
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 1024;
	$query2="UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion',precio = $precio, imagen1='$imagen1',imagen2='$imagen2', imagen3='$imagen3' WHERE idProducto = $id";

	if (in_array($_FILES['file']['type'], $permitidos) && $_FILES['file']['size'] <= $limite_kb * 1024){
		$ruta = "../img/portfolio/" . $_FILES['file']['name'];
		
		if (!file_exists($ruta)){
			
			$resultado = @move_uploaded_file($_FILES["file"]["tmp_name"], $ruta);

			if ($resultado == 1){
				$imagen1 = $_FILES["file"]["name"];
				$resultadoQuery = mysqli_query($conn,$query2);
				
				header('location:../../panelAdmin.php');
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['file']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}
?>