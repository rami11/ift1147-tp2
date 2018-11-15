<?php
require_once('db/connection.inc.php');

function redirect_to($location = NULL) {
	if ($location != NULL) {
		header("Location: {$location}");
		exit();
	}
}

function output_message($message = "") {
	if (!empty($message)) {
		return "<p class\"message\">{$message}</p>";
	} else {
		return "";
	}
}

function getFilms($selectedCategory = "") {
	global $connection;

	$filmQuery = "SELECT * FROM films";
  if (!empty($selectedCategory)) {
    $filmQuery .= " WHERE category = '$selectedCategory'";
  }
  $filmQuery .= " ORDER BY id DESC";
  $result = mysqli_query($connection, $filmQuery);

  $films = array();
  $i = 0;
  while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $director = $row['director'];
    $category = $row['category'];
    $duration = $row['duration'];
    $price = $row['price'];
    $image = "images/".$row['image'];

    $films[$i++] = new film($title, $director, $category, $duration, $price, $image);
  }
  return $films;
}

function getCategories() {
	global $connection;

	$categoryQuery = "SELECT * FROM categories";
    $categoryResult = mysqli_query($connection, $categoryQuery);

    $categories = array();
    $j = 0;
    while ($row = mysqli_fetch_assoc($categoryResult)) {
    	$categories[$j++] = $row['name'];
    }

    return $categories;
}

?>