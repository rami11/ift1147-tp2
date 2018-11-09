<?php
/**
 * @Author: rsn
 * @Date:   2018-11-09 11:29:53
 * @Last Modified by:   rsn
 * @Last Modified time: 2018-11-09 14:27:56
 */
require_once("includes/functions.php");
require_once("db/connection.inc.php");

// $hello = = $_POST["hello"];
// printf("Hello: %s<br>", $hello);

$username = $_POST["username"];
printf("username: %s<br>", $username);
$password = $_POST["password"];
printf("password: %s<br>", $password);

$saltQuery = "SELECT salt FROM users WHERE username = '$username';";
printf( "query: %s<br>", $saltQuery);
$result = $connection->query($saltQuery);
printf( "result: %d<br>", $result);
# you'll want some error handling in production code :)
# see http://php.net/manual/en/function.mysql-query.php Example #2 for the general error handling template
$salt = "";
while ($row = $result->fetch_assoc()) {
	//printf( "row: %s<br>", $row);
	$salt = $row["salt"];
}

printf( "salt: %s<br>", $salt);
$saltedPassword =  $password . $salt;

$hashedPassword = hash('sha256', $saltedPassword);

$sql = "SELECT * FROM users WHERE username = '$username' and password = '$hashedPassword';";
printf("Query: %s<br>", $sql);

$count = $connection->query($sql);
printf("Result: %d<br>", $count);

redirect_to("index.php");
# if nonzero query return then successful login
?>
