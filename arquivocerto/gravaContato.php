<?php


	include('cabecalhof.php');



	//array criado automaticamente , contendo as variaveis enviadas por método post


	//faça com que a página exiba os valores informados  no formulario
	//não esqueça  de acrescentar cabeçalho e rodapéem sua página

	$dados = $_POST;

		//abrir o arquivo e pegar o ultimo codigo existente 

		$dados = file("agenda.csv");
		foreach ($dados as $linha) {
			$colunas = explode(";", $linha);
			$cod_atual = $colunas[0];
		}

	



		$codigo = $cod_atual+1;
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$foto = $_POST['foto'];

		$texto = $codigo.";".$nome.";".$telefone.";".$email.";".$foto;

		print($texto);

		//abrir o arquivo agenda.csv em modo de ecrita

		$arquivo = fopen("agenda.csv" , "a+");

		//escrever o texto no arquivo

		fwrite($arquivo , "\n". $texto);

		//fechar o arquivo

		fclose("$arquivo");
?>

	<h2>Contato inserido</h2>
	<meta http-equiv=refresh content="3;URL=exemplof.php">




	














?>