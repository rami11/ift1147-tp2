<?php
require_once('../db/connection.inc.php');

$id = $_GET['id'];

$query = "SELECT * FROM films WHERE id = '$id' LIMIT 1";
$result = mysqli_query($connection, $query);
$film = mysqli_fetch_assoc($result);

$title = $film['title'];
$director = $film['director'];
//$category = $film['category'];
$duration = $film['duration'];
$price = $film['price'];

$image = $film['image'];

if (isset($_POST['submit-update-film'])) {

	//_POST

}

?>