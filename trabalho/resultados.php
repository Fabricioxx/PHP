<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultado Alunos</title>
</head>
<body>

<center><strong>Listagem Resultado dos Alunos</strong> <br><br>

<?php
    
     $alunosAprovado = 0;
	 $percentualAprovado = 0;
	 $alunosReprovado = 0;
	 $percentualReprovado = 0;
	 $alunosRecuperacao = 0;
	 $percentualRecuperacao = 0;
	 $totalAlunos = 0;
	 $mediaTurma = 0;
	 $melhorAluno =  Array();
	 $piorAluno = Array();
	 $somamedias = 0;

	session_start(); // Inicia a sessão

     foreach($_SESSION['alunos'] as $n){

		 $totalAlunos += 1; // Conta o total de alunos

		 if($n['resultado'] == "Aprovado"){

			 $alunosAprovado += 1;

			    if($n['media'] > $melhorAluno){

				   // $melhorAluno['id'] = $n['id']; // Salva o id do aluno com a maior média
					$melhorAluno['media'] = $n['media']; // Salva a maior média
					$melhorAluno['aluno'] = $n['aluno']; // Salva o nome do aluno com a maior média
			    }else{

					$melhorAluno['media'] = $n['media']; // Salva a maior média
					$melhorAluno['aluno'] = $n['aluno']; // Salva o nome do aluno com a maior média
				}

		 }
		 else if($n['resultado'] == "Reprovado"){

			 $alunosReprovado += 1; // Conta o total de alunos reprovados

			    if($n['media'] < $piorAluno){

				   // $piorAluno['id'] = $n['id']; 
				    $piorAluno['media'] = $n['media']; 
					$piorAluno['aluno'] = $n['aluno'];
			    }else{

					$piorAluno['media'] = $n['media'];
					$piorAluno['aluno'] = $n['aluno'];
				}

			   

		 }
		 else if($n['resultado'] == "Recuperação"){

			 $alunosRecuperacao += 1; // Conta o total de alunos em recuperação

			  
		 }

		 $somamedias += $n['media'];

	 }

	 $percentualAprovado = ($alunosAprovado / $totalAlunos) * 100; // Calcula o percentual de alunos aprovados
	 $percentualReprovado = ($alunosReprovado / $totalAlunos) * 100; // Calcula o percentual de alunos reprovados
     $percentualRecuperacao = ($alunosRecuperacao / $totalAlunos) * 100; // Calcula o percentual de alunos em recuperação
	 $mediaTurma = $somamedias / $totalAlunos; // calcula a média da turma

?>


   <center>   <table border="1">

	  <tr>
		<td>Total Aluno:</td>
		<td><?php echo $totalAlunos; ?></td>
	  </tr>
	  
	  <tr>
		<td>Media da Turma:</td>~
		<td><?php echo $mediaTurma; ?></td>
	  </tr>
	  
	  <tr>
		<td>Aluno com a maior média:</td>
		<td><?php echo $melhorAluno['aluno']; ?></td>
	  </tr>
	  
	  <tr>
		<td>Aluno com a menor média:</td>
		<td><?php echo $piorAluno['aluno']; ?></td>
	  </tr>
	  
	  <tr>
		<td>Percentual de alunos aprovados:</td>
		<td><?php echo $percentualAprovado; ?>%</td>
	  </tr>

	  <tr>
		<td>Total de alunos aprovados:</td>
		<td><?php echo $alunosAprovado; ?></td>
	  </tr>
	  
	  <tr>
		<td>Percentual de alunos reprovados:</td>
		<td><?php echo $percentualReprovado; ?>%</td>
	  </tr>

	  <tr>
		<td>Total de alunos reprovados:</td>
		<td><?php echo $alunosReprovado; ?></td>
	  </tr>
	  
	  <tr>
		<td>Percentual de alunos em recuperação:</td>
		<td><?php echo $percentualRecuperacao; ?>%</td>
	  </tr>

	  <tr>
		<td>Total de alunos em recuperação:</td>
		<td><?php echo $alunosRecuperacao; ?></td>
	  </tr>

	  </table>
	
       <br><br>

	   <a href="index.php">Voltar</a>

	</center>
</body>
</html>