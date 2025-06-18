<?php
	/*  !!!Session!!!
		Sao variaveis que ficam guardadas no server. Quando uma variavel for criada, a mesma ira existir ate o momento em que o navegador seja fechado, ou o programa faca essa funcao!!!
	*/

		//Iniciando a sessao
		session_start();

		//Configurando as var. de session
		$_SESSION['login'] = "pedrao@pedro.com";
		$_SESSION['senha'] = "pedraocampeao";

		//mens. que deu certo!!!!
		echo "As variáveis estão configuradas!!!";

?>