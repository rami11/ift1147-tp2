<?php
/**
 * @Author: rsn
 * @Date:   2018-11-09 11:29:53
 * @Last Modified by:   rsn
 * @Last Modified time: 2018-11-09 16:48:01
 */
require_once("../includes/functions.php");
require_once("../db/connection.inc.php");

$username = $_POST["username"];
//printf("username: %s<br>", $username);
$password = $_POST["password"];
//printf("password: %s<br>", $password);

$saltQuery = "SELECT salt FROM users WHERE username = '$username';";
//printf( "query: %s<br>", $saltQuery);
$result = $connection->query($saltQuery);
//printf( "result: %d<br>", $result);
# you'll want some error handling in production code :)
# see http://php.net/manual/en/function.mysql-query.php Example #2 for the general error handling template
$salt = "";
while ($row = $result->fetch_assoc()) {
	//printf( "row: %s<br>", $row);
	$salt = $row["salt"];
}

//printf( "salt: %s<br>", $salt);
$saltedPassword =  $password . $salt;

$hashedPassword = hash('sha256', $saltedPassword);

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword';";
//printf("Query: %s<br>", $sql);

$userResult = $connection->query($sql);

$count = $userResult->num_rows;
//printf("Count: %s<br>", $count);
// var_dump($count );

# if nonzero query return then successful login
if ($count > 0) {
	// session_start();
	// $_SESSION['loggedin'] = "true";
	// $_SESSION['username'] = $username;
	redirect_to("../index.php");
} else {
	//echo output_message("Username or Password incorrect!");
	redirect_to("login.php");
	$_GET['loggenin'] = false;
}
?>
