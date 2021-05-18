<?php

$servername = "localhost";
$db = "To-Do-List";
$username = "root";
$password = "mysql";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?> 