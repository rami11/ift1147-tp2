<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/login.css" />
	<script type="text/javascript" src="js/login.js"></script>
	<?php //include 'bootstrap.html' ?>

	<title>Login</title>
</head> -->
<?php include 'header.html' ?>
<link rel="stylesheet" href="css/login.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card card-login">
					<!-- card heading -->
					<div class="card-header">
						<div class="row">
							<div class="col-sm-6">
								<a class="active" id="login-form-link">Connexion</a>
							</div>
						</div>
						<hr>
					</div>
					<!-- card body -->
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="index.php" method="post" style="display: block;">
									<!-- username text -->
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="">
									</div>
									<!-- password text -->
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
									</div>
									<!-- login submit -->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 offset-sm-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se connecter">
											</div>
										</div>
									</div>
									<!-- cancel submit -->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 offset-sm-3">
												<input type="submit" name="login-cancel" id="login-cancel" tabindex="4" class="form-control btn btn-cancel" value="Annuler">
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