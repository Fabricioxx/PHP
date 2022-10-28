<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>Folha de Pagamento</title>
   </head>
   <body>
      <?php
	     session_start(); // Inicia a sessão
		 if(!isset($_SESSION['funcionarios'])){ // Verifica se a variável de sessão existe

		    $_SESSION['funcionarios'] = array();// Cria a variável de sessão do tipo Array de Funcionários	 
		 }
	  ?>
      <center><strong>Folha de Pagamento</strong></center> <br><br>

      <center><form action = "calculo.php" method = "post"> <!-- formulario envia os dados para pagina calculo.php com metodo post -->

	     <table border="1px">
		    <tr>
			   <td>Funcionário:</td>
			   <td><input type="text" name="funcionario" size = "50" maxlength="50" style="text-transform:uppercase" required></td>
			</tr>
			<tr>
			   <td>Mês:</td>
			   <td><input type="text" name="mes" size = "50" maxlength="2" required></td>
			</tr>
			<tr>
			   <td>Ano:</td>
			   <td><input type="text" name="ano" size = "50" maxlength="4" required></td>
			</tr>
			<tr>
			   <td>Horas trabalhadas:</td>
			   <td><input type="text" name="horas" size = "50" maxlength="5" required></td>
			</tr>
			<tr>
			   <td>Valor da hora:</td>
			   <td><input type="text" name="valor" size = "50" maxlength="10" required></td>
			</tr>
		 </table> <br><br>
		 <input type="submit" value="Calcular folha"> <!-- This is the submit button -->
		 <a href="listagem.php">Listar Funcionários</a> </center> <!-- link para pagina listagem.php -->
		 <br><br>
      </form> 	  	  
   </body>
</html>