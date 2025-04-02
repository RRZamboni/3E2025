<?php  //conexao.php
	//Conectando
	$con = mysqli_connect('127.0.0.1',
						  'root', 
						  '',
						  'eteclg');
	//Verificando 	
	if(!$con)
	{
		//Matando o script
		die('Erro ao conectar, PALHAÇO!!!');
	}

?>