<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title> Controle de notas </title>
   </head>
   <body>
      <?php
	     session_start(); // Inicia a sessão

         // $_SESSION['totalAlunos'] é uma variável de sessão
         //isset() verifica se a variável existe
		 if(!isset($_SESSION['totalAlunos'])){ // verifica se a variável de sessão existe

		    $_SESSION['totalAlunos'] = 1;	 // se não existir, cria a variável de sessão do tipo Inteiro
		 }
	  ?>

      <center><strong>Controle de notas</strong></center><br><br>


    <center><form action = "calculo.php" method = "post"> <!-- action= onde vai ser  eviado os dados / method= o tipo de metodo que vai ser usado para enviar os dados -->

	     <table border="1px">
		    <tr>
			   <td>Aluno</td>
			   <td><input type="text" name="aluno" size = "50" maxlength="50" style="text-transform:uppercase" required></td> <!-- style="text-transform:uppercase" converte para maiúsculas , required campo obrigatorio-->
			</tr>
			<tr>
			   <td>Primeiro bimestre:</td>
			   <td><input type="text" name="b1" size = "50" maxlength="5"></td> <!-- maxlength="5" limita o número de caracteres a 5 -->
			</tr>
			<tr>
			   <td>Segundo bimestre:</td>
			   <td><input type="text" name="b2" size = "50" maxlength="5"></td>
			</tr>
			<tr>
			   <td>Terceiro bimestre:</td>
			   <td><input type="text" name="b3" size = "50" maxlength="5"></td>
			</tr>			
			<tr> <!-- linha databela -->
			   <td>Quarto bimestre:</td> <!--  coluna -->
			   <td><input type="text" name="b4" size = "50" maxlength="5"></td>
			</tr>
		 </table> 

         <br><br>

		 <input type="submit" value="Calcular media"> <!-- This is the submit button -->

		 <br><br>

		 <hr> <!-- adiciona uma horizontal line -->

         <br><br>

      </form> 	  	</center> 
      <?php
	     /*if(isset($_POST['aluno']) == true){
		    $nome = strtoupper($_POST['aluno']);
            $b1 = floatval($_POST['b1']);
		    $b2 = floatval($_POST['b2']);
		    $b3 = floatval($_POST['b3']);
		    $b4 = floatval($_POST['b4']);
		    $media = ($b1+$b2+$b3+$b4)/4;
		    echo "A média do aluno $nome é $media";
		 }*/		 

/*
session_start(); // Inicia a sessão
session_unset(); // Limpa a sessão
session_destroy(); // Destrói a sessão
*/
      

      ?> 	  
   </body>
</html>