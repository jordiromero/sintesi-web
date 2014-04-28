<body>
	<div class="container">
		<div class="form-group">
			<?=@error ?>
		<form method="post" >
			<table id="taula" class="table table-hover table-condensed" border="0">
				<tr>
				<th colspan="2" class="text-center">Menús</th>
				</tr>
				<tr>
					<td>Imatge:</td>
					<td><input class="form-control" type= "file" id="exampleInputFile" name="image"></td>
				</tr>
				<tr>
					<td>Nom:</td>
					<td><input class="form-control" type= "text" name="name"></td>
				</tr>	
				<tr>
					<td>Descripció:</td>
					<td><textarea class="form-control" rows="3" name="description"></textarea></td>
				</tr>
				<tr>
					<td>Tipo:</td>
					<td><input class="form-control" type= "text" name="type"></td>
				</tr>
				<tr>
					<td><button type="submit" class="btn btn-default">Insertar</button></td>
					<td><button type="reset" class="btn btn-default">Cancel·lar</button></td>
				</tr>			


			</table>



		</form>	
		</div>
	</div>
</body>
<html>