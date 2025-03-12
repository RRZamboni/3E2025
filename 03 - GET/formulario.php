<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Show</title>
</head>
<body>
	<!-- Form para passar dados-->
	<form action="doformulario.php" 
	method="GET">
		<h3>Nome:</h3>
		<input type="text" name="nome">

		<h3>Sobrenome:</h3>
		<input type="text" name="sobrenome">		

		<h3>Situação:</h3>
		<input type="radio" name="des" value="Desempregado">
		Desempregado
		<input type="radio" name="des" value="Empregado">
		Empregado

		<h3>Estado</h3>
		<select name="estado">
			<option value="--">--</option>
			<option value="BA">BA</option>
			<option value="RJ">RJ</option>
			<option value="SP">SP</option>
		</select>

		<br>
		<br>

		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar">	


	</form>

</body>
</html>