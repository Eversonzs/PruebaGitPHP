<?php

	require "config.php";

		$connection = mysqli_connect($db_host, $db_user ,$db_pass, $db_name);

		// Check connection
		if (mysqli_connect_errno()){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

	//Otra manera
	/*

	$connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

		if($connection -> connect_errno){
			echo "Error connection...<br>";
			return $connection;
		} else{
			echo "Successful connection.<br>";
			return $connection;
		}
	
	*/

?>