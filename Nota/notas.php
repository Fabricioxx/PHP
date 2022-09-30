<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Controle de notas
      </title>
   </head>
   <body>
      <center><strong>Controle de notas</strong></center>
      <form action = "calculo.php" method = "post">
	     <table>
		    <tr>
			   <td>Aluno</td>
			   <td><input type="text" name="aluno" size = "50" maxlength="50" style="text-transform:uppercase" required></td>
			</tr>
			<tr>
			   <td>Primeiro bimestre</td>
			   <td><input type="text" name="b1" size = "5" maxlength="5"></td>
			</tr>
			<tr>
			   <td>Segundo bimestre:</td>
			   <td><input type="text" name="b2" size = "5" maxlength="5"></td>
			</tr>
			<tr>
			   <td>Terceiro bimestre:</td>
			   <td><input type="text" name="b3" size = "5" maxlength="5"></td>
			</tr>			
			<tr>
			   <td>Quarto bimestre:</td>
			   <td><input type="text" name="b4" size = "5" maxlength="5"></td>
			</tr>
		 </table> <br><br>
		 <input type="submit" value="Calcular media">
		 <br><br>
      </form> 	  	  
   </body>
</html>