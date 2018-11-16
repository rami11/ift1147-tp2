<div style="margin: 25px">
  <div style="margin: 10px; position: relative;">
    <div>
      <h4 style="color: #218838">Liste des films</h4>
    </div>
    <div>
      <a class="btn btn-success" href="viewsfilms/film.php">Ajouter</a>
    </div>
  </div>
  <table class="table table-striped" style="">
    <thead>
      <tr>
        <th scope="col">Pochette</th>
        <th scope="col">Titre</th>
        <th scope="col">Réalisateur</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Durée</th>
        <th scope="col">Prix</th>
        <th scope="col">Gestion</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($films as $film) : ?>
        <tr>
          <td scope="row"><img src="<?php echo $film->getImage(); ?>" style="width:50px; height: 55px;" /></td>
          <td><?php echo $film->getTitle(); ?></td>
          <td><?php echo $film->getDirector(); ?></td>
          <td><?php echo $film->getCategory(); ?></td>
          <td><?php echo $film->getDuration(); ?></td>
          <td><?php echo $film->getPrice(); ?></td>
          <td>
            <a class="btn btn-success btn-sm" href="viewsfilms/updateForm.php?id=<?php echo $film->getId(); ?>">Modifier</a>
            <a class="btn btn-danger btn-sm" href="viewsfilms/deleteFilm.php?id=<?php echo $film->getId(); ?>">Supprimer</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<div>
