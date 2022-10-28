<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
     <center>


        <strong>Calculo de notas Aluno</strong><br><br>

        <?php

           $ResultadoAluno = "Não foi informado";

             $b1 = floatval($_POST['b1']); // floatval() converte para float
             $b2 = floatval($_POST['b2']); 
             $b3 = floatval($_POST['b3']);
             $b4 = floatval($_POST['b4']);

             $aluno = $_POST['aluno'];

             $media = ($b1+$b2+$b3+$b4)/4; // calcula a média

            echo "A média do aluno " . strtoupper($aluno) . " é $media <br><br>"; // strtoupper() converte para maiúsculas

            if($media >= 7.0){

                echo "<strong> APROVADO </strong>";	 

                $ResultadoAluno = "Aprovado";
            }
            else{

                if($media < 2.5){
                    echo "<strong> REPROVADO </strong>";	

                    $ResultadoAluno = "Reprovado";
                }				
                else{
                    echo "<strong> RECUPERAÇÃO </strong>";	

                    $ResultadoAluno = "Recuperação";
                }
            }

            echo "<br><br>"; // quebra de linha

            session_start(); // Inicia a sessão

           // echo "Número de alunos informados: " . $_SESSION['totalAlunos']; // $_SESSION['totalAlunos'] é uma variável de sessão
           // $_SESSION['totalAlunos'] += 1; //
            

            $AlunoTemp = array();

            $AlunoTemp['aluno'] = $aluno;
            $AlunoTemp['media'] = $media;
            $AlunoTemp['resultado'] = $ResultadoAluno;
           // $AlunoTemp['id'] = $_SESSION['totalAlunos'];
            
            
            array_push($_SESSION['alunos'], $AlunoTemp); // adiciona o $AlunoTemp na $_SESSION['alunos']


        ?>


          

    
    
    <br><br>
	  <button onclick="history.back()"> Voltar </button>
    
    
    
    
    
    
    
    
    </center>
    
</body>
</html>