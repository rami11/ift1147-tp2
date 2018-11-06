<?php include 'header.html'; ?>
<link rel="stylesheet" href="css/cart.css" />
</head>
<body>
<div style="margin: 25px">
<div style="margin: 10px; position: relative;">
  <div style="display: inline-block;">
    <span style="color: green; right: 10px; font-size: 24; font-weight: 500;">Votre Panier</span>
  </div>
  <div style="display: inline-block; float: right;">
    <input type="button" class="btn-delete" value="Vider le panier"/>
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
    <tr>
      <th scope="row"><img src="library/perfume.jpg" style="width:51px; height: 75px;" /></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><input type="button" class="btn-delete" value="Supprimer" /></td>
    </tr>
    <tr>
      <th scope="row"><img src="library/perfume.jpg" style="width:51px; height: 75px;" /></th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><input type="button" class="btn-delete" value="Supprimer" /></td>
    </tr>
    <tr>
      <th scope="row"><img src="library/perfume.jpg" style="width:51px; height: 75px;" /></th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><input type="button" class="btn-delete" value="Supprimer" /></td>
    </tr>
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