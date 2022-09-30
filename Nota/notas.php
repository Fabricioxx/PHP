<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">

      <title>Controle de notas</title>
   </head>

   <body>
      <center><strong>Controle de Notas</strong></center><br><br>

	  <center>  <form action = "calculo.php" method = "post">
	     <table border="1px">
		    <tr>
			   <td><b>Aluno :</b></td>
			   <td><input type="text" name="aluno" size = "50" maxlength="50" style="text-transform:uppercase" required></td>
			</tr>
			<tr>
			   <td><b>Primeiro Bimestre :</b></td>
			   <td><input type="text" name="b1" size = "50" maxlength="5"></td>
			</tr>
			<tr>
			   <td><b>Segundo Bimestre:</b></td>
			   <td><input type="text" name="b2" size = "50" maxlength="5"></td>
			</tr>
			<tr>
			   <td><b>Terceiro Bimestre:</b></td>
			   <td><input type="text" name="b3" size = "50" maxlength="5"></td>
			</tr>			
			<tr>
			   <td><b>Quarto Bimestre:</b></td>
			   <td><input type="text" name="b4" size = "50" maxlength="5"></td>
			</tr>
		 </table> <br><br>
		 <input type="submit" value="Calcular media">
		 <br><br>
      </form> 	  </center>	  
   </body>
</html>