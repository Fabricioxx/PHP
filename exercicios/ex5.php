<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 3 - Exercicio 5</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercicio 05</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Informa suas 4 notas bimestrais</h2>

	<form action="respostas.php" method="post">

	<p>
		<label>1° Bimestre:</label><br>
		<input type="number" name="bim1" step="0.1" min="0" max="10" required>
	</p>

  <p>
		<label>2° Bimestre:</label><br>
		<input type="number" name="bim2" step="0.1" min="0" max="10" required>
	</p>

	<p>
		<label>3° Bimestre:</label><br>
		<input type="number" name="bim3" step="0.1" min="0" max="10" required>
	</p>

	<p>
		<label>4° Bimestre:</label><br>
		<input type="number" name="bim4" step="0.1" min="0" max="10" required>
	</p>

	<button type="submit" name="enviarEx5">Enviar</button>

	</form>


</body>
</html>