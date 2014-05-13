<html>
	<head>
		<title></title>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	</head>
	<body>
		<div id="datetimepicker">
		<input data-format="hh:mm:ss" type="text"></input>
			<span>
				<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
			</span>
		</div>
		<script type="text/javascript">
  				$(function() {
    				$('#datetimepicker').datetimepicker({
      					language: 'es',
      					pick12HourFormat: true
    				});
  				});
		</script>
	</body>
</html>