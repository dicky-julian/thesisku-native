<?php
	$server = "p:localhost";
	$username = "root";
	$password = "";
	$database = "eoq";

	$connection = mysqli_connect($server, $username, $password);
	$database = mysqli_select_db($connection, $database);
?>