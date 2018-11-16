<?php require_once('doUpdate.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier film</title>
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
							<a class="active" id="register-form-link">Modifier film</a>
						</div>
					</div>
					<hr>
				</div>
				<!-- card body -->
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<form name="update-form" id="update-form" action="updateForm.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
								<!-- title -->
								<div class="form-group">
									<input type="text" name="title" id="title" class="form-control" placeholder="Titre" value="<?php echo $title ?>">
								</div>
								<!-- director -->
								<div class="form-group">
									<input type="text" name="director" id="director" class="form-control" placeholder="Réalisateur" value="<?php echo $director ?>">
								</div>
								<!-- category -->
								<div class="form-group">
									<select name="category" id="category" class="form-control">
										<option disabled selected value placeholder="hello">Categorie</option>
										<?php foreach ($categories as $cat) : ?>
											<?php if ($category == $cat) : ?>
												<option <?php echo "selected" ?>><?php echo $category ?></option>
											<?php endif ?>
												<option><?php echo $cat ?></option>
										<?php endforeach ?>
									</select>
								</div>
								<!-- duration -->
								<div class="form-group">
									<input type="number" min="0" max="300" name="duration" id="duration" class="form-control" placeholder="Durée" value="<?php echo $duration ?>">
								</div>
								<!-- price -->
								<div class="form-group">
									<input type="number" step="0.01" min="0" max="50" name="price" id="price" class="form-control" placeholder="Prix" value="<?php echo $price ?>">
								</div>
								<!-- image -->
								<div class="form-group">
									<input type="file" name="image" id="image">
								</div>

								<!-- buttons -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 offset-sm-3">
											<input type="submit" name="submit-update-film" id="submit-update-film" class="form-control btn btn-success" value="Modifier">
										</div>
									</div>
								</div>
								<div class="form-group">	
									<div class="row">
										<div class="col-sm-6 offset-sm-3">
											<a href="../index.php" class="form-control btn btn-danger">Annuler</a>
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