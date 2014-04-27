<body>
	<table id="taula" class="table table-hover table-condensed" border="1">
<thead>
        <tr>
		<th>ID</th>
        <th>Imatge</th>
        <th>Nom</th>
		<th>Descripci&oacute;</th>	
		<th>Tipo</th>
		<th></th>
		
<?php
	if($query->num_rows() > 0){
    	foreach($query->result() as $row){
    	echo "<tr>";
		echo "<td>".$row->id."</td>";
		echo "<td>"."<img src='$row->image' height='60' width='60'/>"."</td>";
		echo "<td>".$row->name."</td>";
		echo "<td>".$row->description."</td>";
		echo "<td>".$row->type."</td>";
		echo "</tr>";
		}
	}
?>
</table>
</body>
</html>