<body>
	
<div class="container">
	<h1>Menús</h1>

	<table id="taula" class="table table-hover table-condensed table table-bordered">
	
<thead>
        <tr>
        <th></th>
        <th>Nom</th>
		<th>Descripci&oacute;</th>	
		<th>Tipus</th>
		<th>Preu</th>
</thead>		
<?php
	if($query->num_rows() > 0){
    	foreach($query->result() as $row){
    	echo "<tr>";
		echo "<td>"."<img src='/sintesi/assets/images/menu/$row->image' height='60' width='60'/>"."</td>";
		echo "<td>".$row->name."</td>";
		echo "<td>".$row->description."</td>";
		echo "<td>".$row->m_type."</td>";
		echo "<td>".$row->price. '€'."</td>";
		echo "</tr>";
		}
	}
?>
</table>
</div>


