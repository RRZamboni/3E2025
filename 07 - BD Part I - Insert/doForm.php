<?php
	//Incluindo o arquivo conexao.php
	require 'conexao.php'; 

   //Recebendo os valores
   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $curso = $_POST['curso'];
   $endereco = $_POST['end'];	

   // Montando a query de INSERT
   $query = "INSERT INTO aluno(nome,sobrenome,curso,endereco)
             VALUES('$nome','$sobrenome','$curso','$endereco')";

   //Executando a Query!!!
   $result = mysqli_query($con,$query);

   //Verificando
   if($result)
   {
   		echo "<script>
   				 alert('Aluno inserido!!!'); 
   				 history.back();	
   		      </script>";
   }
   else
   {
   		echo "DEU RUIM!!! <br>";
   		echo $query;
   }





?>