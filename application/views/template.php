<!DOCTYPE html> 
<html>
	<head>
		<title>Restauria</title>

		<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="<?php echo base_url();?>assets/jquerymobile/css/jquery.mobile-1.4.2.css" />
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/jquerymobile/js/jquery.mobile-1.4.2.js"></script>
	<script type="text/javascript">
    			jQuery.noConflict();
		</script>

	</head>
	<body>

		<div data-role = "page">
			<div data-role="header" data-theme="a" class="ui-class">
				<a href="<?php echo base_url();?>index.php/main/index" class="ui-btn ui-btn-b">Home</a>
				<h1>Restauria</h1>
				
				
			</div>
			<div data-role="content">
				<div data-role = "collapsible" data-collapsed="true">
					<h4>Reserva</h4>
					<ul data-role="listview">
						<li><a href="">Realitza Reserva</a></li>
						<li><a href="">Consulta Reserva</a></li>
					</ul>

				</div>
			</div>

			<div data-role="content">
				<div data-role = "collapsible" data-collapsed="true">
					<h4>Consulta Carta</h4>
					<ul data-role="listview">
						<li><a href="">Tot</a></li>
						<li><a href="">Entrants</a></li>
						<li><a href="">Amanides</a></li>
						<li><a href="">Sopes</a></li>
						<li><a href="">Arrosos</a></li>
						<li><a href="">Pasta</a></li>
						<li><a href="">Carns</a></li>
						<li><a href="">Peixos</a></li>
						<li><a href="">Postres</a></li>
						<li><a href="">Carta de vins</a></li>
					</ul>

				</div>
			</div>

			<div data-role="content">
				
			<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-r">On Trobar-nos</button>

			</div>
			<div data-role="footer" class="ui-class" data-theme="a">
				<p><?php echo $this->user->username;  ?>  - <a href="<?php echo base_url();?>index.php/main/logout">Sortir </a></p>
				<h4>&copy; Jordi Romero</h4>
			</div>
		</div>
		
		
	</body>
</html>