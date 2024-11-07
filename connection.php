<?php
	$host = "localhost";
	$uname = "root";
	$pass = "";
	$dbName = "movie_site";

	try {
		$con = new mysqli($host, $uname, $pass, $dbName);
	} catch (Exception $e) {
		die("<h1>Db connection unsuccessul.</h1>");
	}
?>