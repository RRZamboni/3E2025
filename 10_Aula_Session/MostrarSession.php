<?php
	
	//Iniciando a sessao
	session_start();

	//verificando a existencia das var de sessao
	if(isset($_SESSION['login']) && 
		isset($_SESSION['senha']))        
	{
		echo "Bem vindo :".$_SESSION['login'];
		echo "<br> Sua senha é :".$_SESSION['senha'];
	}
	else
	{
		echo "Sessão não foi iniciada!!!!";
	}




?>