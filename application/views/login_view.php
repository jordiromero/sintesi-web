<html>
	<head>

		<title>Restauria</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/jquerymobile/css/jquery.mobile-1.4.2.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<script src="<?php echo base_url();?>assets/jquerymobile/js/jquery.mobile-1.4.2.js"></script>-->
<script type="text/javascript">
    jQuery.noConflict();
</script>

	</head>	
	<body>


<div class="container">
    <br>
    <img src="<?php echo base_url();?>assets/images/restauria.png" >
<form method="post" data-url="true">
    <fieldset>
	<table class="table-striped" align="center">
		<tr>
			<th colspan="2" class="text-center">Inicia sessi&oacute;</th>

		</tr>
	<tr>
    	<td><label class="control-label" for="inputUser">Usuari</label></td> 
    	<td><input type="text" placeholder="Usuari" id="inputUser" name="username"/><!--value="<?php echo @$_POST['username']; ?>" --></td><br />
    </tr>
    <tr>
    	<td> <label class="control-label" for="inputPassword">Password</label></td> 
    	<td><input type="password" placeholder="Password" id="inputPassword" class= "input-medium" name="password"/><!-- value="<?php echo @$_POST['password']; ?>"--></td><br />
    </tr>
    <tr>
    <td><button type="submit"  class="btn btn-large btn-primary">Inicia Sessi&oacute;</button></td>
	</tr>
    </table>
    </fieldset>
</form>
<a href="<?php echo base_url();?>index.php/main/setUserForm">Registra Usuari</a>

</div>
<div class="container">
<?php if(@$error_login): ?>
    Error en l'usuari o contrasenya.
    <br />
<?php endif; ?>

<?php echo @validation_errors(); ?>

<br />
</div>



    </body>
</html>
