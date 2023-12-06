<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "threaderz_store";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=threaderz_store",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
