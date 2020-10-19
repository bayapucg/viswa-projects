<?php

    $servername="localhost";
    $username="atohm";
	$password = "vegya4all";

	// $servername = "localhost";
	// $username   = "root";
	//  $password   = "";

	$dbh = new PDO("mysql:host=$servername;dbname=rfidattendance", $username, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
