<?php  
	/* O HTTP permite
	2 formas de requisicao(GET e POST)!!!!!
	As duas formas mandam os dados ao servidor, porem de forma diferente!

	Metodo GET 
	->Informacoes ficam visiveis ao usuario
	-> capacidade max. 1024 caracteres
	-> valores sao passados pela URL

	Metodo POST 
	->Informcoes invisiveis
	ao usuario
	->sem limite
	-> valores passados pela URI

	*/

	//1) Receber os valores do form
	$nome = $_GET['nome'];
	$sobrenome = $_GET['sobrenome'];
	$situacao = $_GET['des'];
	$estado = $_GET['estado'];

	// 2) Exibindo os valores
	echo "Olá, $nome $sobrenome";
	echo "<br>";
	echo "<h3>Eu te amo!!!</h3>";
	echo "<br>";
	echo $situacao;
	echo $estado;






?>