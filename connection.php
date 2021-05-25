<?php

function connect() {
	$servername = "localhost";
	$database = "To-Do-List";
	$username = "root";
	$password = "mysql";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		// echo "Connected successfully";
		return $conn;
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
}