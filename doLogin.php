<?php
/**
 * @Author: rsn
 * @Date:   2018-11-09 11:29:53
 * @Last Modified by:   rsn
 * @Last Modified time: 2018-11-09 11:51:59
 */
require_once("db/connection.inc.php");

$usename = $_POST["username"];
printf("username: %s<br>", $username);
$password = $_POST["password"];
printf("password: %s<br>", $password);

$saltQuery = "SELECT salt FROM users WHERE username = '$username';";
$result = $connection->query($saltQuery);
# you'll want some error handling in production code :)
# see http://php.net/manual/en/function.mysql-query.php Example #2 for the general error handling template
$row = $result->fetch_assoc($result);
$salt = $row['salt'];

$saltedPassword =  $password . $salt;

$hashedPassword = hash('sha256', $saltedPassword);

$query = "SELECT * FROM users WHERE username = '$username' and password = '$hashedPassword';";
printf("Query: %s<br>", $query);

$count = $connection->query();
printf("Result: %d<br>", $count);


# if nonzero query return then successful login
?>
