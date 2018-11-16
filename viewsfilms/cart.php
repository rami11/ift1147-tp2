<?php require_once('../includes/CartItem.php'); ?>
<?php require_once('../includes/classFilm.inc.php'); ?>
<?php require_once('../db/connection.inc.php'); ?>
<!DOCTYPE html>
<html>
<?php include('../header.html'); ?>
<head>
    <title>Panier</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" style="color: #fff;" href="../index.php">Accueil client</a>
</nav>

<div style="margin: 25px">
<div style="margin: 10px; position: relative;">
  <div style="display: inline-block;">
     <h4 style="color: #218838">Votre Panier</h4>
  </div>
  <div style="display: inline-block; float: right;">
    <input type="button" class="btn btn-danger" value="Vider le panier"/>
  </div>
</div>
<table class="table table-striped" style="">
  <thead>
    <tr>
      <th scope="col">Pochette</th>
      <th scope="col">Titre</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix</th>
      <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //var_dump($_SESSION['cart_item']);
    if (isset($_SESSION['cart_item'])) {
      foreach ($_SESSION['cart_item'] as $cartItem) :
        $film = $cartItem->getFilm();
        $price = $film->getPrice() * $cartItem->getQuantity();
        $subtotal += $price;
    ?>
    <tr>
      <th scope="row"><img src="<?php echo "../".$film->getImage(); ?>" style="width:50px; height: 55px;"></th>
      <td ><?php echo $film->getTitle(); ?></td>
      <td><?php echo $cartItem->getQuantity(); ?></td>
      <td>$<?php echo $price; ?></td>
      <td><input type="button" class="btn btn-danger btn-sm" value="Supprimer" /></td>
    </tr>
    <?php
       endforeach;
       $total = $subtotal + 2.94 + 2.1;
      }
    ?>
  </tbody>
</table>
<div style="text-align: right; float: right;">
  <ul style="list-style: none;">
    <li><b>Sous-total:</b>$<?php echo $subtotal ?></li>
    <li><b>TVQ:</b> $2.94</li>
    <li><b>TPS:</b> $2.1</li>
    <li><b>Total:</b>$<?php echo $total ?></li>
  </ul>
</div>

<div>
</body>
</html>