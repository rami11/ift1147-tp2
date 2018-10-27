<?php include 'header.html' ?>
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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Devenir membre</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

<div style="float: left; display: inline-block; margin: 20px; padding: 20px;">

<div class="card text-center" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Bay Michael</h6>
    <h6 class="card-subtitle mb-2 text-muted">Action</h6>
    <h6 class="card-subtitle mb-2 text-muted" style="font-style: italic;">$ 6.99</h6>
  </div>
</div>

<div class="card text-center" style="width: 18rem; margin: auto;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Bay Michael</p>
    <p class="card-text">Action</p>
    <p class="card-text" style="font-style: italic;">$ 6.99</p>
  </div>
</div>

</div>
<?php include 'footer.html'?>