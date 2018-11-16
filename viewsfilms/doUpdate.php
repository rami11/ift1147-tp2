<?php
require_once('../db/connection.inc.php');
require_once('../includes/functions.php');

$categories = getCategories();

$id = $_GET['id'];

$query = "SELECT * FROM films WHERE id = '$id' LIMIT 1";
$result = mysqli_query($connection, $query);
$film = mysqli_fetch_assoc($result);

$title = $film['title'];
$director = $film['director'];
$category = $film['category'];
$duration = $film['duration'];
$price = $film['price'];
$image = $film['image'];

$image = $film['image'];

if (isset($_POST['submit-update-film'])) {
	$title = $_POST['title'];
	$director = $_POST['director'];
	$category = $_POST['category'];
	$duration = $_POST['duration'];
	$price = $_POST['price'];
	// $image = $_POST['image'];

	if (empty($title)) {
		array_push($errors, "Le titre est obligatoire.");
	}
	if (empty($director)) {
	 	array_push($errors, "Le réalisateur est obligatoire.");
	}
	if (empty($category)) {
		array_push($errors, "La categorie est obligatoire.");
	}
	if (empty($duration)) {
		array_push($errors, "La duree est obligatoire.");
	}
	if (empty($price)) {
		array_push($errors, "Le prix est obligatoire.");
	}

	// Image upload
	$uploadName = $image;
	if (!empty($_FILES['image']['name'])) {
		$imageName = basename($_FILES['image']['name']);
		$extension = strtolower(end(explode('.', $imageName)));

		$uploadName = sha1($imageName.time($imageName)).".".$extension;

		$imagePath = "../images/".$uploadName;
	    if(!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
	        array_push($errors, "There was an error uploading the file, please try again!");
	    }

	    if ($image != "avatar.png") {
	    	unlink("../images/".$image);
		}
	}

	// Finally, update film if there are no errors in the form
	if (count($errors) == 0) {
		$query = "UPDATE films SET title = '$title', director = '$director', ";
		$query .= " category = '$category', duration = '$duration', ";
		$query .= " price = '$price', image = '$uploadName' ";
		$query .= " WHERE id = '$id' ";

		mysqli_query($connection, $query);
		header('location: ../index.php');
	}
}
?>