<html>
	<head>

		<title>Restauria</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>	
	<body>

<?php if(@$error_login): ?>
    Error en l'usuari o contrasenya.
    <br />
<?php endif; ?>

<?php echo @validation_errors(); ?>

<br />
<div class="container">
    <img src="<?php echo base_url();?>assets/images/restauria.png">
<form method="post">
	<table class="table-striped">
		<tr>
			<th colspan="2" class="text-center">Inicia sessi&oacute;</th>

		</tr>
	<tr>
    	<td>Usuari:</td> 
    	<td><input type="text" name="username" value="<?php echo @$_POST['username']; ?>"/></td><br />
    </tr>
    <tr>
    	<td>Password:</td> 
    	<td><input type="password" name="password" value="<?php echo @$_POST['password']; ?>" /></td><br />
    </tr>
    <tr>
    <td><input type="submit" value="Inicia Sessi&oacute;" class="btn"></td>
	</tr>
    </table>
</form>
</div>
