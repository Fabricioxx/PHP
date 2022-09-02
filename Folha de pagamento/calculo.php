<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<center><strong>Folha de Pagamento</strong></center> <br><br>

     <?php      
       
       $nome = $_POST['nome'];
       $hora = floatval($_POST['hora']);
       $valorhora = floatval($_POST['valorhora']);

       echo "Funcionario :";
       
       echo "Horas trabalhadas : ";
       
       echo "Valor da hora : ";
       
       echo "Salário Bruto : ";
     
       echo "IR :";
       
       echo "INSS : ";
       
       echo "FGTS : ";
     ?>


</body>
</html>