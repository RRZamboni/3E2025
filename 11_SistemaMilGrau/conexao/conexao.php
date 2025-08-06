<?php

//Criando a Conexao
$con = mysqli_connect(
	'localhost','root','','pessoas');

//Verificando se conectou
 if (!$con) 
 {
 	die("Erro ao Conectar".mysqli_connect_error());
 }

 ?>