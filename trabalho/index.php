<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTAS</title>
</head>
  <!--  
     - criar pagina resultados
     - mostar numero de alunos que foi informado;
     - qual é a media da turma (para cada aluno olhar a media e fazer totalMedia/totalAlunos))
     - mostar quem foi o aluno com maior media, mostrar media e aluno
     - mostrar quem foi o aluno com menor media, mostrar media e aluno
     - Alunos aprovados, mostrar os numeros de alunos aprovados e percentual ( usar uma variavel auxiliar
        alunosAprovados e utilizar um if, se aprovado alunosAprovados += 1/ percentual realizar regra de 3
        alunosAprovados/totalAlunos * 100 (total de alunos=100, aprovados = x, ))
    - Alunos reprovados, mostrar os numeros de alunos reprovados e percentual 
    - alunos em recuperação, mostrar os numeros de alunos em recuperação e percentual
  -->


<body>

  <!-- criar uma sission de array para armazenar os dados do aluno -->
  <?php //SEMPRE QUE CARREGAR A PAGINA ELE VAI INICIAR A SESSION
        
        session_start(); // Inicia a sessão

        if(!isset($_SESSION['alunos'])){ // se não existe a sessão alunos

            $_SESSION['alunos'] = array(); // cria a sessão alunos de tipo array
          //  $_SESSION['totalAlunos'] = 1; // cria a sessão totalAlunos de tipo inteiro
        }
        
  ?>



<center><strong>Controle de notas</strong><br><br>

<form action = "calculo.php" method = "post">

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
            <input type="submit" value="Enviar">
            <br><br>
            <a href="resultados.php">Calculo Resultados Alunos</a> </center> <!-- link para pagina listagem.php -->
		 <br><br>

       </form>


    
</body>
</html>