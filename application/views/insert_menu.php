<body>
	<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<body>
	<div class="container">
		<h1>Inserta Menús</h1><br>
		<?php echo $output; ?>
	</div>
