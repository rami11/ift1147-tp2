<?php
require_once('../db/connection.inc.php');

$id = $_GET['id'];
// echo "<br>id: ". $id;

// delete the image
$selectQuery = "SELECT * from films WHERE id = '$id' LIMIT 1";

$selectResult = mysqli_query($connection, $selectQuery);
$film = mysqli_fetch_assoc($selectResult);

$image = "";
if ($film) {
	$image = $film['image'];
}

$imagePath = "../images/".$image;
//echo "<br> Image Path: ".$imagePath;
unlink($imagePath);

$query = "DELETE FROM films WHERE id = '$id'";

mysqli_query($connection, $query);
header('location: ../index.php');

?>
