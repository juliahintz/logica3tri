<?php
//variável receberá conteudo de um arquivo e será um string

	$contatos = file_get_contents("tabela.csv");

	echo($contatos);

?>
