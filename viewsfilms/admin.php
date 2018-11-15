<div style="margin: 25px">
  <div style="margin: 10px; position: relative;">
    <div>
      <span style="color: green; right: 10px; font-size: 24; font-weight: 500;">Liste des films</span>
    </div>
    <div>
      <!-- <input type="button" class="btn-add" value="Ajouter"/> -->
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
          <td scope="row"><img src="<?php echo $film->getImage(); ?>" style="width:51px; height: 75px;" /></td>
          <td><?php echo $film->getTitle(); ?></td>
          <td><?php echo $film->getDirector(); ?></td>
          <td><?php echo $film->getCategory(); ?></td>
          <td><?php echo $film->getDuration(); ?></td>
          <td><?php echo $film->getPrice(); ?></td>
          <td><input type="button" class="btn btn-success btn-sm" value="Modifier" />&nbsp;
              <input type="button" class="btn btn-danger btn-sm" value="Supprimer" /></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<div>
