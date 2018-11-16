<?php include('../header.html'); ?>
<link rel="stylesheet" href="../css/cart.css" />
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
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
    ?>
    <tr>
      <th scope="row"><img src="library/perfume.jpg" style="width:50px; height: 55px;" /></th>
      <td >Larry</td>
      <td>3</td>
      <td>@twitter</td>
      <td><input type="button" class="btn btn-danger btn-sm" value="Supprimer" /></td>
    </tr>
    <?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"]*$item["quantity"]);
    }
    ?>
  </tbody>
</table>
<div style="text-align: right; float: right;">
  <ul style="list-style: none;">
    <li><b>Sous-total:</b> $fff</li>
    <li><b>TVQ:</b> $fff</li>
    <li><b>TPS:</b> $fff</li>
    <li><b>Total:</b> $fff</li>
  </ul>
</div>

<div>
</body>
</html>