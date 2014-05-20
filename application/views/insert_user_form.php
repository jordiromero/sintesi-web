<html>
	<head>
			<title>Restauria</title>
			<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

			<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
			<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
			<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	</head>
	<body>

	<div class="container">
		<br><img src="<?php echo base_url();?>assets/images/restauria.png" ><br>
		<form method="post">

			<div class="form-group">
				<label for="name">Nom:</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Nom" />
			</div>

			<div class="form-group">
				<label for="surname">Cognoms:</label>
				<input type="text" class="form-control" name="surname" id="surname" placeholder="Cognoms" />
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Email" />
			</div>

			<div class="form-group">
				<label for="username">Usuari:</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="Usuari" />
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="pass" id="password" placeholder="Password" />
			</div>

			<div class="form-group">
				<label></label>
				<input type="hidden" class="form-control" name="user_id" id="user_id" value = "2" />
			</div>

			

			<button type="submit" class="btn btn-primary">Registrat</button>
			<button type="reset" class="btn btn-danger">Cancel&middot;lar</button>
		</form>

	</div>

	<div class="container">
<?php if(@$error): ?>
    Error.
    <br />
<?php endif; ?>

<?php echo @validation_errors(); ?>

<br />
</div>
	</body>
</html>