<?php
	//1) Recebendo valores
	$coisa = $_POST['algo'];

	//Relembrando lacos
	// de repeticao <3!!!
	//       FOR
	// Laco de repeticao usado quando
	// sabemos o total de repeticao
	// a ser executada!!!!!
	//  for(inicio; final; incremento)
	$vFinal = 3;
	for ($i=0; $i < $vFinal; $i++) 
	{ 
		echo "<h2>Mensagem Nº: $i</h2>";
		echo "<br>";
		echo $coisa;
		echo "<hr>";
	}




	// WHILE
	// Laco de repeticao similar
	//ao FOR, porem ha a necessidade
	// e se criar um contador dentro 
	//do laco!!!!
	// while(enquanto cond. verdadeira)
	//      {
	//         repita    
	//      }
	$count = 0; 
	while($count <= 6) 
	{
	    echo "Mensagem Nº $count";
		echo $coisa;
		echo "<hr>";

	   $count += 1;	

	}

?>







