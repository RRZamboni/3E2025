<?php 
	/* Escrita e Leitura
	      de arquivos!!!

	   Var. para manipular
	   o arquivo. 
	   
	   Funcao fopen() - cria
	   ou abre o arquivo
	   Parametros:
	   w ->indica escrita de arquivo. Cria o arquivo
	   caso nao exista

	   a ->indica escrita de arquivo. Cria o arquivo
	   caso nao exista, caso 
	   exista sera incrementado

	   r->indica leitura
	*/


	   //Variarel para manipular o file
	   $arq = fopen("arquivao.txt","w");

	   //Escrevendo na !@#$%% do arquivo
	   //Funcao fwrite()
	   fwrite($arq,"..Doente de amor..<3");

	   for($i=0; $i < 10; $i++) 
	   { 
	   		fwrite($arq,"e ae meu xuxu! \n");
	   		// '\n' da um 'enter' entre as linhas
	   }

	   //Fechando o arquivo
	   fclose($arq);


?>




