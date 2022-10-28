<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title> Calculo de notas </title>
   </head>
   <body>
      <center><strong>Controle de notas</strong> <br><br>   
	  <?php
	     $b1 = floatval($_POST['b1']); // floatval() converte para float
		 $b2 = floatval($_POST['b2']); 
		 $b3 = floatval($_POST['b3']);
		 $b4 = floatval($_POST['b4']);

		 $media = ($b1+$b2+$b3+$b4)/4; // calcula a média

		 echo "A média do aluno " . strtoupper($_POST['aluno']) . " é $media <br><br>"; // strtoupper() converte para maiúsculas -->

		 if($media >= 7){

		    echo "<strong> APROVADO </strong>";	 
		 }
		 else{

		    if($media < 2.5){
			   echo "<strong> REPROVADO </strong>";	
			}				
			else{
			   echo "<strong> RECUPERAÇÃO </strong>";	
			}
		 }

		 echo "<br><br>"; // quebra de linha

		 session_start(); // Inicia a sessão
		 echo "Número de alunos informados: " . $_SESSION['totalAlunos']; // $_SESSION['totalAlunos'] é uma variável de sessão
		 $_SESSION['totalAlunos'] += 1; // incrementa o total de alunos
	  ?>
	  <br><br>
	  <button onclick="history.back()"> Voltar </button>  <!-- history.back() retorna para a página anterior -->
      </center>
   </body>
</html>