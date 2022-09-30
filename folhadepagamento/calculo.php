<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculo Folha</title>
</head>
<body>

	<center><strong> Folha de Pagamento</strong></center> <br><br>

	<?php
		$funcionario = $_POST['funcionario'];
		$mes = $_POST['mes'];
		$ano = $_POST['ano'];
		$horas = $_POST['horas'];
		$valor = $_POST['valor'];
    ?>

<center>  <table  border="1px" > 
		<tr>
		   <td ><b> Funcionario:</b> </td>
		   <td> <?php echo $funcionario; ?> </td>
        </tr>

		<tr>
		   <td><b> Mês:</b> </td>
		   <td align = "right"> <?php echo $mes; ?> </td> <!-- align = alinhamento do texto -->
		</tr>

		<tr>
		   <td><b> Ano: </b> </td>
		   <td align = "right"> <?php echo $ano; ?> </td>
		</tr>  
		
		<tr>
		   <td><b> Horas Trabalhadas:</b> </td>
		   <td align = "right"> <?php echo $horas; ?> </td>
		</tr>
		
		<tr>
		   <td><b> Valor da Hora:</b> </td>
		   <td align = "right"> <?php echo $valor; ?> </td>
		</tr>
		
		<tr>
		   <td><b> Salário Bruto:</b> </td>
		   <td align = "right"> <?php  $bruto = $horas * $valor; //calcula o salario bruto
		                         echo "$bruto"; //imprime o salario bruto
								 ?> </td> 
		</tr>   

		
        <!-- Calculo do IR ============================================================= -->
		<tr> 
			<td><b> IR</b></td>
			<td align = "right"> <?php if ($bruto <= 1903.98) { //verifica se o salario bruto é menor ou igual a 1903.98
				$ir = 0; //se for, o imposto de renda é 0
				//echo "$ir"; //imprime o imposto de renda

			} else if ($bruto > 1903.98 && $bruto <= 2826.65) { //verifica se o salario bruto é maior que 1903.98 e menor ou igual a 2826.65
				$ir = ($bruto * 0.075) - 142.80; //se for, o imposto de renda é 7.5% do salario bruto
				//echo "$ir"; //imprime o imposto de renda

			} else if ($bruto > 2826.65 && $bruto <= 3751.06) { //verifica se o salario bruto é maior que 2826.65 e menor ou igual a 3751.06
				$ir = ($bruto * 0.15) - 354.80; //se for, o imposto de renda é 15% do salario bruto
				//echo "$ir"; //imprime o imposto de renda
			} else  { 

				 if($bruto <= 4664.68){ //verifica se o salario bruto é menor ou igual a 4664.68

					 $ir = ($bruto * 0.225) - 636.13; //se for, o imposto de renda é 22.5% do salario bruto
					// echo "$ir"; //imprime o imposto de renda

				 } else {
					 $ir = ($bruto * 0.275) - 869.36; //se não for, o imposto de renda é 27.5% do salario bruto
					 
				 }
			} 
			echo "$ir"; //imprime o imposto de renda
			?> </td>
        </tr> <!-- fIM LINHA IR ============================================================= -->
          
    <!-- Calculo do INSS ============================================================= -->
		<tr>
			<td><b> INSS</b></td>
			<td align = "right"> <?php if ($bruto <= 1212) { //verifica se o salario bruto é menor ou igual a 1212
				$inss = $bruto * 0.075; //se for, o INSS é 7.5% do salario bruto
				//echo "$inss"; //imprime o INSS

			} else if ($bruto > 1212 && $bruto <= 2427.35) { //verifica se o salario bruto é maior que 1212 e menor ou igual a 2427.35
				$inss = $bruto * 0.09; //se for, o INSS é 9% do salario bruto
				//echo "$inss"; //imprime o INSS

			} else if ($bruto > 2427.35 && $bruto <= 3641.03) { //verifica se o salario bruto é maior que 2427.35 e menor ou igual a 3641.03
				$inss = $bruto * 0.12; //se for, o INSS é 12% do salario bruto
				//echo "$inss"; //imprime o INSS
			} else  { 
				$inss = $bruto * 0.14;	//se não for, o INSS é 14% do salario bruto
				//echo "$inss"; //imprime o INSS
			}
              
			echo "$inss"; //imprime o INSS
           ?> </td>
         </tr> <!-- fIM LINHA INSS ============================================================= -->

			<!-- Calculo do FGTS ============================================================= -->

			<tr>
				<td><b> FGTS</b></td>
				<td align = "right"> <?php $fgts = $bruto * 0.08; //calcula o FGTS
				echo "$fgts"; //imprime o FGTS
				?> </td>	
            </tr> <!-- fIM LINHA FGTS ============================================================= -->

			<!-- cALCULO DO SALARIO LIQUIDO ============================================================= -->

			<tr>
				<td><b> Salário Líquido</b></td>
				<td align = "right"> <?php $liquido = $bruto - $ir - $inss; //calcula o salario liquido
				echo "$liquido"; //imprime o salario liquido

				?> </td>	
			</tr> <!-- fIM LINHA SALARIO LIQUIDO ============================================================= -->
	</table>
	<br><br>
	<button onclick="history.back()"> Voltar </button> </center> <!-- botão para voltar a página anterior -->

	<!-- <a href="folha.php">Voltar</a> -->

</body>
</html>