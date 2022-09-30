<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Folha de pagamneto</title>
</head>
<body>

	<center><strong>Formulario Folha de Pagamento</strong></center> <br><br>

	<form action="calculo.php" method="post">

	<center>	<table border="1px"> 

         <tr>	<!--tr = Linha da tabela-->
              <td><b>Funcionario :</b></td> <!-- td = Coluna da tabela-->
              <td><input type="text" name="funcionario" size="50" maxlength="50" style="text-transform:uppercase"></td>
         </tr>

		 <tr>
			  <td><b>Mês :</b></td>
			  <td><input type="text" name="mes" size="50" maxlength="2" required></td> 
			  <!-- size = tamanho do campo, maxlength = tamanho maximo do campo -->
	     </tr>		 
		 
		 <tr>
			  <td><b>Ano :</b></td>
			  <td><input type="text" name="ano" size="50" maxlength="4" required></td> <!-- required = obriga o preenchimento do campo -->
	     </tr>
			
		 <tr>
			  <td><b>Horas trabalhadas :</b></td> <!-- type = tipo do campo -->
			  <td><input type="text" name="horas" size="50" maxlength="3" required></td>
	     </tr>

		 <tr>
			  <td><b>Valor da Hora :</b></td> <!-- name = nome do campo -->
			  <td><input type="text" name="valor" size="50" maxlength="5" required></td>
	     </tr>
         
		</table> </center>
		   <br><br>

		<center><input type="submit" value="Calcular Folha"></center> <!-- type = tipo do botão, value = valor do botão -->


	</form>

</body>
</html>