<?php
	$server_host = 'localhost';

	$database = 'gtech_web';
	$server_username = 'root';
	$server_password = '';


	$conn = mysqli_connect($server_host,$server_username,$server_password,$database)
	or
		die("Failed to connect to database");
	mysqli_query($conn,"SET NAMES 'UTF8'");

?>