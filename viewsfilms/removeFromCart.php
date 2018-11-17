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

	header("location: cart.php");
}

?>