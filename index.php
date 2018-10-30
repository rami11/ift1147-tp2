<?php require_once 'library/classFilm.inc.php';
      include 'header.html';
?>
<link rel="stylesheet" href="css/index.css" />
<nav class="navbar navbar-default">
<div class="container-fluid">
  <!-- Films and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <!-- <a class="navbar-brand" href="https://www.arsenal.com">Films</a> -->
    <span class="navbar-brand" href="https://www.arsenal.com">Films</span>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Nos films <span class="sr-only">(current)</span></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cat&eacute;gories<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Devenir membre</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

<!-- Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
<div class="row">
<?php
  $films = [
    new Film("The best journey", "Rami", "Thriller", 55),
    new Film("The Alchemist", "Rami", "Thriller", 100),
    new Film("Man on the moon", "Rami", "Comedy", 34),
    new Film("Man on the moon", "Rami", "Comedy", 34),
    new Film("Man on the moon", "Rami", "Comedy", 34),
    new Film("Man on the moon", "Rami", "Comedy", 34),
    new Film("Man on the moon", "Rami", "Comedy", 34),
    new Film("Man on the moon", "Rami", "Comedy", 34)
  ];

  foreach ($films as $film) {
    $film->display();
  }

 ?>
</div>
</div>

<?php include 'footer.html'; ?>