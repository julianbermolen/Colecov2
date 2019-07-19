<?php

	 $host_db = "localhost";
	 $user_db = "u139874784_verde";
	 $pass_db = "JeYkc1iysfNo";
	 $db_name = "u139874784_colec";

	// Connect to server and select databse.
	$conn=mysqli_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");

	mysqli_select_db($conn,"$db_name")or die("Cannot Select Data Base");


?>
