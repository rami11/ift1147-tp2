<?php 
	define("HOST", "127.0.0.1");//www-ens.iro.umontreal.ca
	define("USER", "root");//www-ens
	define("PASSEWORD", "vector2");//iarp115S
	define("DB", "film_store");//serapiar_films

	$connection = mysqli_connect(HOST, USER, PASSEWORD, DB);

	 if (!$connection) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	// Error handling array
	$errors = array();
	//array_push($errors, "Hahaha jokinggggggggg");

	session_start();

 ?>