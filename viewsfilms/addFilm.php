<?php 
require_once('../db/connection.inc.php');

if (isset($_POST['submit-film'])) {
	// $password = mysql_real_escape_string($_POST["password"]);
	$title = mysqli_escape_string($connection, $_POST["title"]);
	$director = mysqli_escape_string($connection, $_POST["director"]);
	$category = mysqli_escape_string($connection, $_POST["category"]);
	$duration = mysqli_escape_string($connection, $_POST["duration"]);
	$price = mysqli_escape_string($connection, $_POST["price"]);

	if (empty($title)) {
		array_push($errors, "Le titre est obligatoire.");
	}
	if (empty($director)) {
	 	array_push($errors, "Le réalisateur est obligatoire.");
	}
	// if (empty($category)) {
	// 	array_push($errors, "La categorie est obligatoire.");
	// }
	if (empty($duration)) {
		array_push($errors, "La duree est obligatoire.");
	}
	if (empty($price)) {
		array_push($errors, "Le prix est obligatoire.");
	}
	//first check the database to make sure 
	//a film does not already exist with the same title
	$query = "SELECT * FROM films WHERE title='$title' LIMIT 1";
	$result = mysqli_query($connection, $query);
	$film = mysqli_fetch_assoc($result);

	if ($film) { // if film exists
		if ($film['title'] === $title) {
		  array_push($errors, "Le film '$title' existe déjà.");
		}
	}

	// Image upload
	$imageName = "avatar.png";
	if (!empty($_FILES['image']['name'])) {
		$imageName = basename($_FILES['image']['name']);
		$extension = strtolower(end(explode('.', $imageName)));

		$uploadName = sha1($imageName.time($imageName)).".".$extension;

		$imagePath = "../images/".$uploadName;
	    //$path .= basename($_FILES['image']['name']);
	    if(!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
	        array_push($errors, "There was an error uploading the file, please try again!");
	    }
	}

	// Finally, add film if there are no errors in the form
	if (count($errors) == 0) {
		$query = "INSERT INTO films (title, director, category, duration, price, image) ";
		$query .= "VALUES ('$title', '$director', '$category', '$duration', '$price', '$uploadName')";

		mysqli_query($connection, $query);
		header('location: ../index.php');
		// redirect_to('../index.php');
	}
}

?>