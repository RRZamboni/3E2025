<?php
	//Conexão
	include('../conexao/conexao.php');

	//Recuperando valores
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	//Query do sql
	$sql = "SELECT * FROM login WHERE
	        login='$login' AND senha='$senha'";

	//Executando a query
    $cmd = mysqli_query($con,$sql);

    //Verificando se senha e login existe
    if(mysqli_num_rows($cmd) == 0)
    {
    	//Se total de linhas for '0' logo, 
    	//usuário nao existe :(
        header("Location: login.php?erro=Login%20inexistente!!!");
    }
    else
    {
    	//Criando a Session
    	session_start();
    	$_SESSION['login'] = $login;
    	header("Location: ../select/lista.php");
    }

?>