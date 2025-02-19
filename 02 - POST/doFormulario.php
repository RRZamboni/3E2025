<?php  
	/*  Variável Global $_POST['']
 		É uma forma de receber dados
 		no servidor pelo php!!!
 		Os dados são passados pela URI
	*/

 	//Recebendo valores oriundos do form.
 	$nominho = $_POST['nome'];
 	$sobrenome = $_POST['sobrenome'];
 	$nomeMamae = $_POST['nomemae'];

 	//Mostrando que funcionou
 	if($nominho == "" || $sobrenome = "" || 
 	   $nomeMamae == "") 
 	{
 		echo "<script>
 				 alert('PARA COM ESSA #$#$*&#$ ANIMAL!!!');
 				 history.back();     
 		     </script>";
 	}
 	else 
 	{
 		//Mostrando os valores
 		echo "Nome: $nominho <br>";
 		echo "Sobrenome: $sobrenome <br>";
 		echo "Mamãe: $nomeMamae <br>";
 		echo "<h2> Acho que te amo!!!</h2>";
 	}



?>