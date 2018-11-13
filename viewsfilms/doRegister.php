<?php 
require_once("../includes/functions.php");
require_once("../db/connection.inc.php");

// $password = mysql_real_escape_string($_POST["password"]);
$username = mysqli_escape_string($connection, $_POST["username"]);
$email = mysqli_escape_string($connection, $_POST["email"]);
$password = mysqli_escape_string($connection, $_POST["password"]);
$confirmPassword = mysqli_escape_string($connection, $_POST["confirm-password"]);
//$password = "admin";
//printf("Password: %s<br>", $password);
if () {
if ($password != $confirmPassword) {
	// stay at register page
	// show error message
}


// $username = mysql_real_escape_string($_POST["username"]);
//printf("Username: %s<br>", $username);
//printf("Email: %s<br>", $email);

# generate a random salt to use for this account
// $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$salt = bin2hex(random_bytes(32));
//printf("Salt: %s<br>", $salt);

$saltedPassword = $password . $salt;

$hashedPassword = hash("sha256", $saltedPassword);
//printf("Hashed Password: %s<br>", $hashedPassword);

//insert statement
$sql = "INSERT INTO users (username, email, password, salt) ";
$sql .= "VALUES ('{$username}', '{$email}', '{$hashedPassword}', '{$salt}')";
//$sql = "INSERT INTO users VALUES (0, 'admin', 'admin@admin.com', '{$hashedPassword}', '{$salt}', true)";
//printf("sql: %s<br>", $sql);

if (!$connection->query($sql)) {
	echo "Error";
} else {
	//echo "Sucess";
	// open session for the new registerd user
	// redirect to index.php
	redirect_to("../index.php");
}

}

$connection->close();
 ?>