<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bdproyecto";

	$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if (!$link) {
		die("Error de conexion".mysqli_connect_error());
	}
?>
