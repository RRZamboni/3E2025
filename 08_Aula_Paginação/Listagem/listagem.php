<?php
	//Conectando com o DB
	include('../Conexao/conexao.php');


	//Verificando página atual
	if(isset($_GET['pagina']))
	{
		$pagina = $_GET['pagina'];
	}
	else
	{
		$pagina = 1;
	}




	//Query e selec
	$cmd = "SELECT * FROM produto";

	//Executando a query
	$produto = mysqli_query($con,$cmd);

	// Total de registros do select
	$total = mysqli_num_rows($produto);

	// Variável para salvar total de itens por página
	$registro = 4;

	// Calculando  o total de páginas
	//Ceil - arredonda o valor
	$numpaginas = ceil($total/$registro);

	//Var para calcular p inicio da próxima visualização
	//tendo como base a página atual
	$inicio = ($registro * $pagina) - $registro;

	//Selecionando por página
	$cmd = "SELECT * FROM produto
			LIMIT $inicio,$registro";

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
			echo "
					<tr>
						<td>".$linha['NOME']."</td>
						<td>".$linha['DESCRICAO']."</td>
						<td>".$linha['ID_AREA']."</td>
						<td>".$linha['PRECO_UNI']."</td>
						<td>".$linha['MOEDA']."</td>
						<td>".$linha['PAIS_ORIGEM']."</td>
					</tr>
			      ";

		}

			?>

		</table>
		<center>
			<ul class="pagination">
				<li>
					<a href="listagem.php?pagina=1">
						$laquo
					</a>
				</li>

				<?php
					for ($i=1; $i < $numpaginas; $i++) 
					{ 
						echo  "<li><a href='listagem.php?pagina=$i'>
								$i
					     		</li></a>";
					}
				?>



				<li>
					<a href="listagem.php?pagina=<?php
										    echo $numpaginas?>
							">
						$raquo
					</a>
				</li>

			</ul>
		</center>

	</div>	
</body>
</html>
