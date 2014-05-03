<html>
	<head>
    <meta charset="utf-8"/>
		<title>Restauria</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Latest compiled CSS datatabes  -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/extensions/ColVis/css/dataTables.colVis.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/extensions/ColReorder/css/dataTables.colReorder.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/extensions/FixedHeader/css/dataTables.fixedHeader.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/extensions/TableTools/css/dataTables.tableTools.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/extensions/FixedColumns/css/dataTables.fixedColumns.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- jQuery-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
<!-- Latest compiled JavaScript datatables-->
<!--<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/DataTables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/DataTables/extensions/ColVis/js/dataTables.colVis.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/DataTables/extensions/ColReorder/js/dataTables.colReorder.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/DataTables/extensions/FixedHeader/js/dataTables.fixedHeader.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/DataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/DataTables/extensions/FixedColumns/js/dataTables.fixedColumns.js"></script>-->

	</head>	

<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>index.php/main/index">Restauria</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>index.php/main/index">Inici</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men&uacute; <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/main/setMenu">Insertar Men&uacute;s</a></li>
            <li><a href="<?php echo base_url();?>index.php/main/getMenu">Visualitza Men&uacute;s</a></li>
            <li><a href="#">Consulta Reserves</a></li>
            <li><a href="#">Usuaris</a></li>
          </ul>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>	
<div class="container" align="right">Heu entrat com a: <?php echo $this->user->username; ?>  - <a href="<?php echo base_url();?>index.php/main/logout">Sortir </a></div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#taula').dataTable();
} );

</script>

