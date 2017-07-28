<?php
	include("../db/conexion.php");
	include("funcionesAdmin.php");
	session_start();
	filtrarUsuarios();
	$nombre = addslashes($_POST['nombre']);
	$descripcion = addslashes($_POST['descripcion']);
	$precio = $_POST['precio'];
	$tipo = $_POST['tipo'];
	$imagen1 = addslashes($_FILES["file"]["name"]);
	$imagen2 = addslashes($_FILES["file1"]["name"]);
	$imagen3 = addslashes($_FILES["file2"]["name"]);
	$query2="insert into producto(nombre,descripcion,precio,idtipo,imagen1,imagen2,imagen3) values('$nombre','$descripcion','$precio',$tipo,'$imagen1','$imagen2','$imagen3')";


if ($_FILES["file"]["error"] > 0){

	$imagen1 = 'sinimagen.png';
	mysqli_query($conn,$query2);
	header('location:../../panelAdmin.php');
} else {
	
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 1024;
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