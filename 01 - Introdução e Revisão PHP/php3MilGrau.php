   <html>
	<head>
		<meta charset="UTF-8">
		<title>PHPando 3</title>
	</head>
	<body>
		<?php
			//Estrutura condicional IF
			$varTeste = 666;
			$varTeste2 = 1;
			
			/*  Operadores Relacionais
				== - igual
				>  - menor
				<  - maior
				<= - menor igual
				>= - maior igual
				!= - diferente
			*/
			if($varTeste < 555)	
			{
				echo "Perdeu!!!";
			}
			else
			{
				echo "Ganhou";
			}
			
			/*  Operadores Logicos
				
				&& ou and - Verdadeiro se as 
				duas condicoes forem verdadeiras
				
				|| ou or - Verdadeiro se uma das
				duas condicoes forem verdadeiras
			
			*/
			
			$variavelVaziaEIdiota; 
			$genero = "Male";
			$Idade  = 19;
			
			if( ($genero == "Male") && ($Idade >=18) )
			{
				echo "Tiro de Guerra otário!!!!";
			}
			else
			{
				echo "MORRE!!!";
			}
	
			
			
			
			
			
			
		?>
	</body>
 </html>