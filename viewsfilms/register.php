<?php //require_once('doRegister.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<?php include('../header.html') ?>
<link rel="stylesheet" href="../css/login.css" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<?php include('errors.php') ?>
			<div class="card card-login">
				<!-- card header -->
				<div class="card-header">
					<div class="row">
						<div class="col-sm-6">
							<a class="active" id="register-form-link">Inscrire</a>
						</div>
					</div>
					<hr>
				</div>
				<!-- card body -->
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="register-form" action="doRegister.php" method="post" style="display: block;">
								<!-- username -->
								<div class="form-group">
									<!-- is-invalid -->
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="<?php echo $username; ?>" autofocus>
								</div>
								<!-- email -->
								<div class="form-group">
									<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Courriel" value="<?php echo $email; ?>">
								</div>
								<!-- password -->
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
								</div>
								<!-- confirm password -->
								<div class="form-group">
									<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmer mot de passe">
								</div>
								<!-- register now -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 offset-sm-3">
											<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Inscrire">
										</div>
									</div>
								</div>
								<!-- cancel -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 offset-sm-3">
											<a href="../index.php" class="form-control btn btn-cancel" tabindex="4" >Annuler</a>
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