<?php
//require_once('db/connection.inc.php');
// require_once('classFilm.inc.php');

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
    $id = $row['id'];
    $title = $row['title'];
    $director = $row['director'];
    $category = $row['category'];
    $duration = $row['duration'];
    $price = $row['price'];
    $image = "images/".$row['image'];
    $preview = $row['preview'];

    $film = new Film($id, $title, $director, $category, $duration, $price, $image);
    $film->setPreview($preview);

    $films[$i++] = $film;
    //$films[$i++] = $row;
  }
  return $films;
}

function getFilm($id) {
  global $connection;

  $query = "SELECT * FROM films WHERE id = '$id' LIMIT 1";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
  //$id = $film['id'];
  $title = $row['title'];
  $director = $row['director'];
  $category = $row['category'];
  $duration = $row['duration'];
  $price = $row['price'];
  $image = "images/".$row['image'];

  $film = new Film($id, $title, $director, $category, $duration, $price, $image);
  
  return $film;
}

function getCategories() {
	global $connection;

	$categoryQuery = "SELECT * FROM categories";
    $categoryResult = mysqli_query($connection, $categoryQuery);

    $categories = array();
    $j = 0;
    while ($row = mysqli_fetch_assoc($categoryResult)) {
    	$categories[$j++] = mysqli_escape_string($connection, $row['name']);
    }

    return $categories;
}

?>