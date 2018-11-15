<?php
    require_once('db/connection.inc.php');
    require_once('includes/functions.php');
    require_once('includes/classFilm.inc.php');

    if (!isset($_SESSION['username'])) {
      session_unset();
      session_destroy();
    }

    $films = getFilms($_GET['category']);

    $categories = getCategories();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Films</title>
  <?php include('header.html'); ?>
  <link rel="stylesheet" href="css/index.css" />
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" style="color: #fff; font-weight: 500;">Films</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link"><?php echo empty($_GET['category']) ? "Tous les films" : $_GET['category']; ?><span class="sr-only">(current)</span></a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Catégories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php">Tous les films</a>
              <form action="index.php" method="get">
                <?php foreach ($categories as $category) : ?>
                    <input class="dropdown-item" type="submit" name="category" value="<?php echo htmlentities($category) ?>" />
                <?php endforeach ?>
              </form>
            </div>
          </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['username'])) : ?>
          <?php if ($_SESSION['admin'] == false) : ?>
          <li id="nav-item-cart" class="nav-item"><a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>&nbsp;</a></li>
          <?php endif ?>
          <li id="nav-item-email" class="nav-item"><a class="nav-link"><?php echo $_SESSION['email'] ?></a></li>&nbsp;&nbsp;&nbsp;
          <li id="nav-item-logout" class="nav-item"><a class="nav-link" href="viewsfilms/doLogout.php"><i class="fas fa-sign-in-alt"></i> Deconnexion</a></li>
        <?php else : ?>
          <li id="nav-item-register"class="nav-item"><a class="nav-link" href="viewsfilms/register.php"><i class="fas fa-user-alt"></i> Devenir membre</a></li>
          <li id="nav-item-login" class="nav-item"><a class="nav-link" href="viewsfilms/login.php"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
        <?php endif ?>
      </ul>
    </div>
  </nav>

    <!-- Test Card -->
    <!-- <div class="col-12 col-sm-6 col-md-4">
      <div class="card-film card text-center">
      <img class="img-film card-img-top" src="images/perfume.jpg" alt="Card image cap" data-toggle="modal" data-target="#previewModal">
      <div class="card-body">
        <h5 class="card-title">Title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Director</h6>
        <h6 class="card-subtitle mb-2 text-muted">Category</h6>
        <h6 class="card-subtitle mb-2 text-muted" style="font-style: italic;">$ 20</h6>
        <?php if (isset($_SESSION['username'])) : ?>
        <div>
          <div>
            <input type="number" class="number-picker" name="quantity" min="1" max="5" value="1"/>
          </div>
          <div>
            <button type="button" class="button-add" data-toggle="modal" data-target="#previewModal"><i class="glyphicon glyphicon-shopping-cart"></i> Ajouter</button>
          </div>
        </div>
        <?php endif ?>
      </div>
   </div>
    </div> -->

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
    
    <?php if ($_SESSION['admin'] == false) : ?>
      <div class="container">
        <div class="row">
          <?php
            foreach ($films as $film) {
              $film->display();
            }
          ?>
        </div>
      </div>
    <?php else : ?>
      <?php include('viewsfilms/admin.php'); ?>
    <?php endif ?>
  </div>
</html>