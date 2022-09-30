<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 3 - exercicio 2</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 3 - exercicio 3</h1>
     
     <!-- incluir o arquivo de menu //incluide_once (incluir apenas uma vez) -->
	<?php include_once 'menu.php' ?>

	<h2>Calcular volume de uma caixa:</h2>

	<form action="respostas.php" method="get">
		
     <p>
     	<label>Largura:</label><br>
     	<input type="number" name="largura" min="1" required step="0.1">
     </p>

     <p>
     	<label>Altura:</label><br>
     	<input type="number" name="altura" min="1" required step="0.1">
     </p>

     <p>
     	<label>Comprimento</label><br>
     	<input type="number" name="comprimento" min="1" required step="0.1">
     </p>

     <p>
     	<button type="submit" name="enviarEx2">Enviar</button>

     </p>



	</form>

</body>
</html>