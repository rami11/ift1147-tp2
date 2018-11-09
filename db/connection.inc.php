<?php 
	define("SERVEUR", "127.0.0.1");
	define("USAGER", "root");
	define("PASSE", "vector2");
	define("BD", "film_store");

	$connection = new mysqli(SERVEUR, USAGER, PASSE, BD);

  /* check connection */
  if ($connection->connect_errno) {
      printf("Connect failed: %s\n", $connection->connect_error);
      exit();
  } else {
  	echo "Success";
  }

 ?>