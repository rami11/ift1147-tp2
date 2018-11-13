<?php 
	define("HOST", "127.0.0.1");
	define("USER", "root");
	define("PASSEWORD", "vector2");
	define("DB", "film_store");

	$connection = mysqli_connect(HOST, USER, PASSEWORD, DB);

	 if (!$connection) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	// Error handling array
	$errors = array();
	session_start();
 ?>