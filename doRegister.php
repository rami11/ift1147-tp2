<?php 
	require_once("includes/functions.php");
	require_once("db/connection.inc.php");

	// $username = mysql_real_escape_string($_POST["username"]);
	$username = $_POST["username"];
	printf("Username: %s<br>", $username);

	$email = $_POST["email"];
	printf("Email: %s<br>", $email);

	// $password = mysql_real_escape_string($_POST["password"]);
	$password = $_POST["password"];
	printf("Password: %s<br>", $password);

	# generate a random salt to use for this account
	$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
	printf("Salt: %s<br>", $salt);

	$saltedPassword = $password . $salt;

	$hashedPassword = hash("sha256", $saltedPassword);
	printf("Hashed Password: %s<br>", $hashedPassword);

	//insert statement
	$sql = "INSERT INTO users VALUES (0, '{$username}', '{$email}', '{$hashedPassword}', '{$salt}')";
	printf("sql: %s<br>", $sql);
	//$sql = "INSERT INTO users VALUES (0, 'rsn', 'rsn@rsn.com' '1111', 'dfslsdjlf')";

	if (!$connection->query($sql)) {
		echo "Error";
	} else {
		echo "Sucess";
	}

	$connection->close();
	/*redirect_to("index.php");*/
 ?>
 <div>
 	User registered!
 </div>