<?php
	include('../db/conexion.php');
	include("funcionesAdmin.php");
	session_start();
	filtrarUsuarios();

	$id = $_GET['id'];
	if(isset($_GET['imagen1'])){$imagen1 = $_GET['imagen1']; }
	if(isset($_GET['imagen2'])){$imagen2 = $_GET['imagen2']; }
	if(isset($_GET['imagen3'])){$imagen3 = $_GET['imagen3']; }
	$ruta = "../img/portfolio/";
	$query = "DELETE from producto where idProducto = $id";
	$resultado = mysqli_query($conn,$query);
if($resultado != FALSE){
	chdir($ruta); // Comment this out if you are on the same folder
	chown($imagen1,465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
	$do = unlink($imagen1);
	header('location:../../panelAdmin.php');
}else{
	echo "contactarse con el administrador, error al eliminar";
}
	
?>