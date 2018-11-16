<?php
require_once('../includes/CartItem.php');
require_once('../includes/classFilm.inc.php');
require_once('../db/connection.inc.php');
require_once('../includes/functions.php');

$id = $_GET['id'];
// echo "<br>Id: $id";
$quantity = $_POST['quantity'];
// echo "<br>quantity: $quantity<br><br>";
$film = getFilm($id);
// var_dump($film);

$cartItem = new CartItem($film, $quantity);
// echo "<br><br>";
// echo "cartItem:<br>";
// var_dump($cartItem);

// $_SESSION['cart_item'][] = $film;
$_SESSION['cart_item'][] = $cartItem;
$_SESSION['items-in-cart'] += $quantity;

//var_dump($_SESSION['cart_item']);
header("location: cart.php");
?>