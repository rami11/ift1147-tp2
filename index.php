<?php require_once 'library/classFilm.inc.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php include 'header.html'; ?>
<link rel="stylesheet" href="css/index.css" />
<script type="text/javascript" src="js/index.js"></script>
<?php
  require_once("db/connection.inc.php");

  printf("session[loggedin]: %s<br>",$_SESSION['loggedin']);
  echo isset($_SESSION['loggedin']) . "<br>";
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo "Welcome". $_SESSION['username'];
  } else {
      echo "Faillllllllllllllllllllllllllllll!";
  }


  /* Select queries return a resultset */
  $result = $connection->query("SELECT * FROM film");

  $films = array();
  $i = 0;
  while ($row = $result->fetch_assoc()) {
      $title = $row["title"];
      $director = $row["director"];
      $category = $row["category"];
      $duration = $row["duration"];
      $price = $row["price"];

      $films[$i++] = new film($title, $director, $category, $price);
  }
  $result->close();

  $connection->close();
?>
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
            <a class="nav-link">Nos films <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Catégories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Thriller</a>
              <!-- <div class="dropdown-divider"></div> -->
              <a class="dropdown-item" href="#">Comedy</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li id="nav-item-cart" class="nav-item" style="display: none;"><a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>&nbsp;</a></li>
          <li id="nav-item-email" class="nav-item" style="display: none;"><a class="nav-link">rami.serapian@gmail.com</a></li>&nbsp;&nbsp;&nbsp;
          <li id="nav-item-register"class="nav-item"><a class="nav-link" href="register.php"><i class="fas fa-user-alt"></i> Devenir membre</a></li>
          <li id="nav-item-login" class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
          <li id="nav-item-logout" class="nav-item" style="display: none"><a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i> Deconnexion</a></li>
        </ul>
      </div>
    </nav>

    <!-- <div>
      <input type="button" name="" value="Hide/Show" onclick="updateView()">
    </div> -->

    <!-- Test Card -->
    <!-- <div class="col-12 col-sm-6 col-md-4">
      <div class="card-film card text-center">
      <img class="img-film card-img-top" src="library/perfume.jpg" alt="Card image cap" data-toggle="modal" data-target="#previewModal">
      <div class="card-body">
       <h5 class="card-title">Title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Director</h6>
        <h6 class="card-subtitle mb-2 text-muted">Category</h6>
       <h6 class="card-subtitle mb-2 text-muted" style="font-style: italic;">$ 20</h6>
      <input type="number" class="number-picker" name="quantity" min="1" max="5" value="1"/><br/>
       <button type="button" class="button-add" data-toggle="modal" data-target="#previewModal"><i class="glyphicon glyphicon-shopping-cart"></i> Ajouter</button>
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
    <div class="container">
      <div class="row">
        <?php
          foreach ($films as $film) {
            $film->display();
          }
        ?>
      </div>
    </div>
  </div>
</html>