<?php
	  session_start();
include("db/conexion.php");
	$user = $_POST['usuario'];
	$pw = $_POST['pw'];

	$query = "SELECT * from usuario where usuario = '$user' and password = '$pw'";

	$resultado = mysqli_query($conn,$query);

	$count = mysqli_num_rows($resultado);

	if($count == 1){
	 $_SESSION['loggedin'] = true;
	 $_SESSION['username'] = "admin";
	 $_SESSION['start'] = time();
	 $_SESSION['tipo'] = "magia";
	 $_SESSION['expire'] = $_SESSION['start'] + (60) ;
	 $_SESSION['id']=1;
		header("location: ../panelAdmin.php");
	}else
	{

	echo "<script language='JavaScript'>
	alert('El usuario o contraseña es incorrecto,intente nuevamente');
	location.href='login.php';
	</script>";
	}
?>