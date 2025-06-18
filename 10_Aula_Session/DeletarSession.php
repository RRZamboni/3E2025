<?php
	
	//Iniciando a sessao
	session_start();

	// 1 - Remove as variaveis
	session_unset();

	// 2 - Destroi a sessao
	session_destroy();

	//mens.
	echo "Sessão destruída!!!!";

?>