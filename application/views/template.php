<!DOCTYPE html> 
<html>
	<head>
		<title>Restauria</title>

		<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="<?php echo base_url();?>assets/jquerymobile/css/jquery.mobile-1.4.2.css" />
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/jquerymobile/js/jquery.mobile-1.4.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-ui-map/demos/js/modernizr-2.0.6/modernizr.min.js"></script>
	<script type="text/javascript">
    			jQuery.noConflict();
		</script>

	</head>
	<body>

		<div data-role = "page" id="pag1">
			<div data-role="header" data-theme="a" class="ui-class">
				<a href="#pag1" data-icon="home">Home</a>
				<!--<p><?php echo $this->user->username;  ?>--><a href="<?php echo base_url();?>index.php/main/logout">Sortir </a>
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
			

			
				<div data-role = "collapsible" data-collapsed="true">
					<h4>Consulta Carta</h4>
					<ul data-role="listview">
						<li><a href="#menu-all">Tot</a></li>
						<li><a href="#menu-starters">Entrants</a></li>
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
			<a href="#map" data-role = "button" data-icon="caret-r">On Trobar-nos</a>
			</div>
			
			<div data-role="footer" class="ui-class" data-theme="a">
				<h4>&copy; Jordi Romero</h4>
				
			</div>
		</div><!--Final Pàgina 1-->

		<!--Pàgina carta tot -->
		<div data-role="page" id="menu-all">
			<div data-role="header">
				<a href="#pag1" data-icon="home">Home</a>
				<h1>Restauria</h1>
				<!--<?php echo $this->user->username;  ?>--><a href="<?php echo base_url();?>index.php/main/logout">Sortir </a>
			</div>

		<div data-role="content">
			<div class="content-primary">
				<div id = "list"></div>
			<script>
				
				$.getJSON("http://192.168.202.184/sintesi/index.php/main/jsonGet", function(data){
					var items = [];
					$.each(data, function(key, val){
						items.push("<li id='"+key+"'>"+val+"</li>");
					});

					$("<ul/>",{
						"class": "new-list",
						html:items.join('')
					}).appendTo("#list");
				});
		

			</script>

			</div>
		
		</div>

		<div data-role="footer" class="ui-class" data-theme="a">
				<h4>&copy; Jordi Romero</h4>
				
			</div>
		</div><!--Final pàgina carta tot -->

		<!--Pàgina carta entrants -->
		<div data-role="page" id="menu-starters">
			<div data-role="header">
				<a href="#pag1" data-icon="home">Home</a>
				<h1>Restauria</h1>
				<!--<?php echo $this->user->username;  ?>--><a href="<?php echo base_url();?>index.php/main/logout">Sortir </a>

			</div>

			<div data-role="content">
				<p>P&agrave;gina starters</p>

			</div>

			<div data-role="footer" class="ui-class" data-theme="a">
				<h4>&copy; Jordi Romero</h4>
				
			</div>
		</div><!--Final pàgina carta entrants -->

		<!--Pàgina mapa -->
		<div data-role="page" id="map">
			<div data-role="header">
				<a href="#pag1" data-icon="home">Home</a>
				<h1>Restauria</h1>
				<!--<?php echo $this->user->username;  ?>--><a href="<?php echo base_url();?>index.php/main/logout">Sortir </a>
			</div>

		<div data-role="content">
			<div id="map_canvas" class="map rounded"></div>
		</div>

		<div data-role="footer" class="ui-class" data-theme="a">
				<h4>&copy; Jordi Romero</h4>
				
			</div>

			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-ui-map/ui/jquery.ui.map.js"></script>
        	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-ui-map/ui/jquery.ui.map.services.js"></script>
        	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-ui-map/demos/js/demo.js"></script>
			
			<script type="text/javascript">
            $(function() { 
				demo.add(function() {
					$('#map_canvas').gmap({'center': '40.81471, 0.515187', 'zoom': 16, 'disableDefaultUI':true, 'callback': function() {
						var self = this;
						self.addMarker({'position': this.get('map').getCenter() }).click(function() {
							self.openInfoWindow({ 'content': 'El teu restaurant' }, this);
						});	
					}});
				}).load();
			});
        </script>
		</div><!--Final pàgina mapa -->
		
	</body>
</html>