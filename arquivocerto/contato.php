<?php
		

	print_r($_GET);
	
	include("cabecalhof.php");



	//guardando valor recebido:

	$codigo = $_GET['cod'];

	//abrindo o arquivo e guardando o resultado em um array:

	$dados = file('agenda.csv');

	//percorrendo array:

	foreach ($dados as $linha) {
		//quebrando a linha em colunas
		$colunas = explode(";", $linha);

		//se o código da linha for igual ao passado via GET...
		if($colunas[0] == $codigo){
			$nome = $colunas[1];
			$telefone = $colunas[2];
			$email = $colunas[3];
			$foto = $colunas[4];
		}

	}

	print('<img src="'.$foto.'">');
	print('<h2>'.$nome.'</h2>');
	print('<p>'.$telefone.'</p>');
	print('<p>'.$email.'</p>');


	include ("rodapef.php");

?>