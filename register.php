<?php include 'header.html' ?>
<link rel="stylesheet" href="css/login.css" />
<!-- <script type="text/javascript" src="js/login.js"></script> -->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<!-- panel heading -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a class="active" id="register-form-link">Inscrire</a>
						</div>
					</div>
					<hr>
				</div>
				<!-- panel body -->
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="register-form" action="index.php" method="post" role="form" style="display: block;">
								<!-- username -->
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="">
								</div>
								<!-- email -->
								<div class="form-group">
									<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Courriel" value="">
								</div>
								<!-- password -->
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
								</div>
								<!-- confirm password -->
								<div class="form-group">
									<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmez mot de passe">
								</div>
								<!-- register now -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Inscrire">
										</div>
									</div>
								</div>
								<!-- cancel -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
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
<?php include 'footer.html' ?>