<?php
	//Abriindo o arquivo
	$arq = fopen("arquivao.txt","r");

	//Lendo o arquivo
	//O arquivo eh percorrido
	//linha por linha
	while(!feof($arq))
	{
		//Repete o laco, ate 
		//o arquivo chegar ao final
		echo fgets($arq);
		echo "<br>";
	}

	//Fecha a !#$¨%&%$# do arquivo
	fclose($arq);




?>



