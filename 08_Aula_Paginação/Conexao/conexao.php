<?php
	//Conectando
	$con = mysqli_connect(
	'localhost','root','','produtinho');

	//Verificando a conexao
	if(!$con)//se nao conectou, mata o script
	{
		die("Erro ao conectar com o DB!");
	}

?>