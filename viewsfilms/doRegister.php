<?php 
require_once('../db/connection.inc.php');

if (isset($_POST['register-submit'])) {
	$username = mysqli_escape_string($connection, $_POST["username"]);
	$email = mysqli_escape_string($connection, $_POST["email"]);
	$password = mysqli_escape_string($connection, $_POST["password"]);
	$confirmPassword = mysqli_escape_string($connection, $_POST["confirm-password"]);

	if (empty($username)) {
		array_push($errors, "Le nom d'utilisateur est obligatoire.");
	}
	if (empty($email)) {
	 	array_push($errors, "L'email est obligatoire.");
	}
	if (empty($password)) {
		array_push($errors, "Le mot de passe est obligatoire.");
	}
	if ($password != $confirmPassword) {
		array_push($errors, "Les deux mots de passe ne correspondent pas.");
	}

	//first check the database to make sure 
	// a user does not already exist with the same username and/or email
	$userCheckQuery = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($connection, $userCheckQuery);
	$user = mysqli_fetch_assoc($result);

	if ($user) { // if user exists
		if ($user['username'] === $username) {
		  array_push($errors, "Ce nom d'utilisateur existe déjà.");
		}

		if ($user['email'] === $email) {
		  array_push($errors, "Cet email existe déjà.");
		}
	}

	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {
		// Générer un sel aléatoire à utiliser pour ce compte
		$salt = bin2hex(random_bytes(32));

		$saltedPassword = $password . $salt;
		$hashedPassword = hash("sha256", $saltedPassword);

		$query = "INSERT INTO users (username, email, password, salt) ";
		$query .= "VALUES ('$username', '$email', '$hashedPassword', '$salt')";

		mysqli_query($connection, $query);
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "You are now registered";
		header('location: ../index.php');
	}
}
?>