<?php
require_once('../includes/CartItem.php');
require_once('../includes/classFilm.inc.php');
require_once('../db/connection.inc.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	foreach ($_SESSION['cart_item'] as $key => $item) {
		if ($item->getFilm()->getId() == $id) {
			unset($_SESSION['cart_item'][$key]);
			break;
		}
	}

	// Calculate shopping cart quantity
	$nbItems = 0;
	foreach ($_SESSION['cart_item'] as $item) {
		$nbItems += $item->getQuantity();
	}
	$_SESSION['nb-item'] = $nbItems;

	header("location: cart.php");
}

?>