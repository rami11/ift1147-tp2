<?php
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
  		$userQuery = "SELECT * FROM users WHERE (username = '$username' OR email = '$username');";
		$userResult = mysqli_query($connection, $userQuery);

		$salt = "";
		$admin = false;
		$email = "";
		while ($row = mysqli_fetch_assoc($userResult)) {
			$salt = $row['salt'];
			$admin = $row['admin'];
			$email = $row['email'];
		}
		$saltedPassword =  $password . $salt;
		$hashedPassword = hash('sha256', $saltedPassword);

		$query = "SELECT * FROM users WHERE (username = '$username' OR email = '$username') AND password = '$hashedPassword';";
		$queryResult = mysqli_query($connection, $query);

		if (mysqli_num_rows($queryResult) == 1) {
		    $_SESSION['username'] = $username;
		    $_SESSION['email'] = $email;
		    $_SESSION['admin'] = $admin;
		    //$_SESSION['success'] = "You are now logged in";
		    header('location: ../index.php');
	    } else {
	      	array_push($errors, "Le nom d'utilisateur ou le mot de passe est incorrect.");
	    }
  	}
}
?>