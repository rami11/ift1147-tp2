<?php include 'header.html' ?>
<link rel="stylesheet" href="css/tp2.css" />
<script type="text/javascript" src="js/login.js"></script>
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
							<a href="#" class="active" id="login-form-link">Connexion</a>
						</div>
					</div>
					<hr>
				</div>
				<!-- panel body -->
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="login-form" action="index.php" method="post" role="form" style="display: block;">
								<!-- username text -->
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								</div>
								<!-- password text -->
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<!-- login submit -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se connecter">
										</div>
									</div>
								</div>
								<!-- cancel submit -->
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