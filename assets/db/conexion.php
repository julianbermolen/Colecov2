<?php
	 
	 $host_db = "localhost";
	 $user_db = "id2388959_verdeazulado";
	 $pass_db = "verdeazulado";
	 $db_name = "id2388959_verdeazulado";
	 
	// Connect to server and select databse.
	$conn=mysqli_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");
	 
	mysqli_select_db($conn,"$db_name")or die("Cannot Select Data Base");


?>