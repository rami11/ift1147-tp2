<?php //require_once('../includes/functions.php'); ?>
<?php //$categories = getCategories(); ?>
<?php require_once('addFilm.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajouter film</title>
<?php include('../header.html'); ?>
<link rel="stylesheet" href="../css/login.css" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<?php include('errors.php'); ?>
			<div class="card card-login">
				<!-- card header -->
				<div class="card-header">
					<div class="row">
						<div class="col-sm-6">
							<a class="active" id="register-form-link">Ajouter film</a>
						</div>
					</div>
					<hr>
				</div>
				<!-- card body -->
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="film-form" action="film.php" method="post" style="display: block;">
								<div class="form-group">
									<input type="text" name="title" id="title" class="form-control" placeholder="Titre" autofocus>
								</div>
								<div class="form-group">
									<input type="text" name="director" id="director" class="form-control" placeholder="Réalisateur">
								</div>
								<div class="form-group">
									<select name="category" id="category" class="form-control">
										<option disabled selected value placeholder="hello">Categorie</option>
										<?php foreach ($categories as $category) : ?>
											<option><?php echo $category ?></option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<input type="number" min="0" max="300" name="duration" id="duration" class="form-control" placeholder="Durée">
								</div>
								<div class="form-group">
									<input type="number" step="0.01" min="0" max="50" name="price" id="price" class="form-control" placeholder="Prix">
								</div>
								<div class="form-group">
									<input type="file" name="image" id="image" value="haha">
									<!-- <div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="inputGroupFileAddon01">Pochette</span>
									  </div>
									  <div class="custom-file">
									    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									    <label class="custom-file-label" for="inputGroupFile01">Choisir le fichier</label>
									  </div>
									</div> -->
								</div>

								<!-- buttons -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 offset-sm-3">
											<input type="submit" name="submit-film" id="register-submit" class="form-control btn btn-register" value="Ajouter">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 offset-sm-3">
											<a href="../index.php" class="form-control btn btn-cancel">Annuler</a>
		
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>