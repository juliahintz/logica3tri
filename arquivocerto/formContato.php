<?php
	
	include('cabecalhof.php');

?>

	<form method="post" action="gravaContato.php">
		
		<label for="nome">Nome</label>
		<input type="text" name="nome">
		<br>

		<label for="telefone">Telefone</label>
		<input type="text" name="telefone">
		<br>

		<label for="email">Email</label>
		<input type="text" name="email">
		<br>

		<label for="foto">Foto</label>
		<input type="text" name="foto">
		<br>
		
		<input type="submit" name="Inserir">


	</form>

<?php

	$rodape = file_get_contents("rodapef.php");
	print($rodape);

?>