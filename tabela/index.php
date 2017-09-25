<?php
//tras conteudo como texto

	//$cabecalho = file_get_contents("cabecalho.php");
	//print($cabecalho);


//inclui o código PHP, executando-o
	include("cabecalho.php");

	print(date("l, F d, Y, H:i:s"));

//função file abre um arquivo e retorna seu conteudo para um array


	$dados = file("tabela.csv");
	
	

//percorrer o array e exibir cada um dos elementos 
				
		print("<table border='1'>");

		foreach ($dados as $linha) {
			//partes é um array que recebe o resultade da separação do texto
			//explode tira o que é colocado entre ""
			$partes = explode(";", $linha);
			print('<tr>
		 			<td>'.$partes[0].'</td>
					<td>'.$partes[1].'</td>
					<td>'.$partes[2].'</td>
					<td>'.$partes[3].'</td>
				  </tr>');

		}

		print("</table>");


//função abre um arquivo e retorna seu conteudo em uma string
	$rodape = file_get_contents("rodape.php");
	print($rodape)
?>



