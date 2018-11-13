<?php
require_once("../includes/functions.php");
require_once('../db/connection.inc.php');

if (isset($_POST['login-submit'])) {
	$username = mysqli_escape_string($connection, $_POST["username"]);
	$password = mysqli_escape_string($connection, $_POST["password"]);

	if (empty($username)) {
    	array_push($errors, "Nom d'utilisateur est obligatoire");
  	}
  	if (empty($password)) {
    	array_push($errors, "Mot de passe est obligatoire");
  	}

  	if (count($errors) == 0) {
  		$saltQuery = "SELECT salt FROM users WHERE username = '$username';";

		$saltResult = mysqli_query($connection, $saltQuery);

		$salt = "";
		while ($row = $saltResult->fetch_assoc()) {
			$salt = $row["salt"];
		}
		$saltedPassword =  $password . $salt;
		$hashedPassword = hash('sha256', $saltedPassword);

		$userQuery = "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword';";

		$userResult = mysqli_query($connection, $userQuery);
		if (mysqli_num_rows($userResult) == 1) {
	      $_SESSION['username'] = $username;
	      $_SESSION['success'] = "You are now logged in";
	      redirect_to('../index.php');
	    } else {
	      array_push($errors, "Le nom d'utilisateur ou le mot de passe est incorrect.");
	    }
  	}
}
?>