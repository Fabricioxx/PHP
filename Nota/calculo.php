<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Calculo de notas
      </title>
   </head>
   <body>
      <center><strong>Controle de notas</strong></center> <br><br>   

	  <?php // Inicio do PHP

       $aluno = $_POST['aluno'];	
	    $b1 = floatval($_POST['b1']); // floatval() converte string para float
		 $b2 = floatval($_POST['b2']);
		 $b3 = floatval($_POST['b3']);
		 $b4 = floatval($_POST['b4']);


		 $media = ($b1+$b2+$b3+$b4)/4; // Calculo da media


       //strtoupper() converte para maiusculas
		 echo "A média do aluno " . strtoupper($_POST['aluno']) . " é $media <br><br>";  // Mostra a media do aluno


		 echo "A MEDIA DO ALUNO $aluno É $media <br><br>"; // Mostra a media do aluno (uma segunda forma)

		 if($media >= 7){
		    echo "APROVADO";	 
		 }
		 else{
		    if($media < 2.5){
			   echo "REPROVADO";	
			}				
			else{
			   echo "RECUPERAÇÃO";	
			}
		 }
	  ?> <!-- Fim do PHP -->
	  <br><br>
	  <button onclick="history.back()"> Voltar </button> <!-- Botão para voltar à página anterior -->   
   </body>
</html>