<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>Folha de Pagamento</title>
   </head>
   <body>
      <center><strong>Folha de Pagamento</strong></center> <br><br>

	  <center>  <table border="1px"> <!-- inicio da tabela -->

		    <tr> <!-- inicio da linha 1 -->
			   <td>Funcionário:</td> <!-- inicio da coluna da linha 1-->
			   <td> <?php echo strtoupper($_POST['funcionario']); ?> </td>
			</tr>

			<tr> <!-- inicio da linha 2 -->
				<td>Horas trabalhadas:</td> <!-- primeira coluna da linha 2-->
			    <td align = "right"> <!-- align = "right" alinha o texto a direita -->
			    <?php echo $_POST['horas']; ?> </td>
			</tr>

			<tr> <!-- inicio da linha 3-->
			   <td>Valor da Hora:</td> <!-- primeira coluna da linha 3-->
			   <td align = "right"> <?php echo $_POST['valor']; ?> </td> <!-- segunda coluna da linha 3 -->
			</tr>	

			<tr>
			   <td>Salário bruto:</td>
			   <td align = "right">
			   <?php 
			    $horas = intval($_POST['horas']); //$horas recebe o valor inteiro de $_POST['horas']
			    $valor = floatval($_POST['valor']); //$valor recebe o valor real de $_POST['valor']
				$bruto = $horas * $valor; // Calcula o salário bruto echo $bruto;
			     echo "$bruto"; // Exibe o salario bruto 
				 ?> </td>
			</tr>
			<tr>
			   <td>IR:</td>
			   <td align = "right">
			   <?php
			  
			   if($bruto <= 1903.98){ //condição aninhada para calcular o IR 
			      $ir = 0;	   
			   }
			   else{
			      if($bruto <= 2826.65){
				     $ir = ($bruto * 7.5/100) - 142.80;
				  }		
				  else{
				     if($bruto <= 3751.05){
				        $ir = ($bruto * 15/100) - 354.80;		 
					 }	
                     else{
					    if($bruto <= 4664.68){
						   $ir = ($bruto * 22.5/100) - 636.13;   	
						}
						else{
					       $ir = ($bruto * 27.5/100) - 869.36;		
						}
					 }						 
				  }					  
			   }
			   echo "$ir"; // Exibe o valor do IR
			   ?>
			   </td>
			</tr>
			<tr>
			   <td>INSS:</td> 
			   <td align = "right">
			   <?php
			   if($bruto <= 1212){ //condição aninhada para calcular o INSS
			      $inss = $bruto * 7.5/100;    	   
			   }
			   else{
			      if($bruto <= 2427.35){
				     $inss = $bruto * 9/100; 	  
				  }	
				  else{
				     if($bruto <= 3641.03){
				        $inss = $bruto * 12/100;		 
					 }
				     else{
					    $inss = $bruto * 14/100;	 
					 }						 
				  }					  
			   }
			   echo "$inss" // Exibe o valor do INSS
			   ?>			   
			   </td>
			</tr>
			<tr>
			   <td>FGTS</td>
			   <td align = "right"> <!-- align = "right" alinha o texto a direita -->
			   <?php
			      $fgts = $bruto * 8.5/100; // Calcula o valor do FGTS
				  echo "$fgts"; // Exibe o valor do FGTS
			   ?>
			   </td>
			</tr>
			<tr>
			   <td>Salário líquido</td>
			   <td align = "right">
			   <?php
			      $liquido = $bruto - $ir - $inss; // Calcula o salário líquido
				  echo "$liquido"; 	// Exibe o salário líquido
			   ?>
			   </td>
			</tr>
	   </table>	   <center> <!-- Fim da tabela -->

	   <?php
	      session_start(); // Inicia a sessão

	      $fTemp = array(); // Cria um array vazio

		  $fTemp['funcionario'] = strtoupper($_POST['funcionario']); // Adiciona o nome do funcionário no array
		  $fTemp['mes'] = intval($_POST['mes']); // Adiciona o mês no array
		  $fTemp['ano'] = intval($_POST['ano']); // Adiciona o ano no array
		  $fTemp['horas'] = intval($_POST['horas']); // Adiciona as horas no array
		  $fTemp['valor'] = floatval($_POST['valor']); // Adiciona o valor da hora no array

		  array_push($_SESSION['funcionarios'], $fTemp); // Adiciona o array $fTemp no array $_SESSION['funcionarios'] que foi criado na página anterior		  
	   ?>
	  <br><br>
	  <button onclick="history.back()"> Voltar </button> 
   </body>
</html>