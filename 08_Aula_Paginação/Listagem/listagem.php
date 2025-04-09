<?php
	//Conectando com o DB
	include('../Conexao/conexao.php');

	//Query e select
	$cmd = "SELECT * FROM produto";

	//Executando a query
	$produto = mysqli_query($con,$cmd);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listinha</title>

	<link rel="stylesheet" type="text/css" 
	    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	    <script type="text/javascript"
	    		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">	
	    </script>


</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Listagem de Produtos</h1>			
			<p>Produtos fofos com paginação! S2!</p>
		</div>
		<table class="table table-striped">
			<tr>
				<th>Nome:</th>
				<th>Descrição</th>
				<th>Área</th>
				<th>Preço</th>
				<th>Moeda</th>
				<th>País</th>
			</tr>

			<?php 
		while($linha = mysqli_fetch_array($produto)) 
		{
			
		}

			?>

		</table>
	</div>	
</body>
</html>