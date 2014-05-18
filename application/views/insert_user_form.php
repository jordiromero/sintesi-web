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
		<form role="form" method="post">
			<div class="form-group">
				<label for="name">Nom:</label>
				<input type="text" class="form-control" id="name" placeholder="Nom" value="<?php echo @$_POST['name']; ?>">
			</div>
			<div class="form-group">
				<label for="surname">Cognoms:</label>
				<input type="text" class="form-control" id="surname" placeholder="Cognoms" value="<?php echo @$_POST['surname']; ?>">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo @$_POST['email']; ?>">
			</div>
			<div class="form-group">
				<label for="username">Usuari:</label>
				<input type="text" class="form-control" id="username" placeholder="Usuari" value="<?php echo @$_POST['username']; ?>">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Password" value="<?php echo @$_POST['password']; ?>">
			</div>
			<button type="submit" class="btn btn-default">Registrat</button>
			<button type="reset" class="btn btn-default">Cancel&middot;lar</button>
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