<?php
	//Conectando com o DB
	include('conexao.php');

	//Query e select
	$cmd = "SELECT * FROM produto";

	//Executando a query
	$produto = mysqli_query($con,$cmd);

	// Total de registros do select
	$total = mysqli_num_rows($produto);

	// Variável para salvar total de itens por página
	$registro = 4;

	// Calculando  o total de páginas
	$numpaginas = ceil($total/$registro);


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
			echo "
					<tr>
						<td>".$linha['nome']."</td>
						<td>".$linha['descricao']."</td>
						<td>".$linha['id_area']."</td>
						<td>".$linha['preco_uni']."</td>
						<td>".$linha['moeda']."</td>
						<td>".$linha['pais_origem']."</td>
					</tr>
			      ";

		}

			?>

		</table>
	</div>	
</body>
</html>
