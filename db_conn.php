<?php

	define('DB_SERVER', "localhost");
	define('DB_USER', "root");
	define('DB_PASSWORD', "php_databas");
	define('DB_NAME', "lab_attendance");

	if($conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME)){

		// echo "<center><h1 style='color:green'>Connection Successfully Established!</h1></center>";
	}
	else{

		echo "<center><h1 style='color:red'>Can't Connect to Database Server!</h1></center>";
	}

?>