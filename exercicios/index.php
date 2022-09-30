<!DOCTYPE html>    <!--  comnetario  -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>aula 3 - HOME</title> <!--  nome da aba  -->

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

    <!--  titulo   -->
	<h1>Aula 3 - Home</h1>

          <!-- incluir o arquivo de menu -->
   <?php include_once "menu.php" ?> <!-- comando para printar uma string com o arquivo menu -->


	<p> <!--  paragrafo -->
		Esta é a página principal.<br>
		Utilize o menu para navegar entre as páginas
	</p>

	<ol>
         <li><p> Calcular o aumento que será dado a um funcionário, obtendo do usuário as 
seguintes informações: salário atual e a porcentagem de aumento. Apresentar 
o novo valor do salário e o valor do aumento. </p></li>
         <li><p> Calcular o volume de uma caixa (largura, altura, comprimento).</p></li>
         <li><p>Calcular a idade de uma pessoa, tendo em vista que a mesma irá digitar o ano 
do seu nascimento.</p></li>   
		 <li><p> Calcular o consumo por litro de um carro, sendo que será informada a 
quantidade de quilômetros percorrido e a quantidade de litros abastecido.
</p></li>
         <li><p> Calcular a média final de um aluno com base nas suas 4 notas bimestrais.</p></li>
         <li><p> Ler uma temperatura em graus Celsius e apresentá-la convertida em graus 
Fahrenheit. A fórmula de conversão: F ← (9*C+160)/5</p></li>   	
		 <li><p>Calcular e apresentar o volume de uma lata de óleo cilíndrica, a partir da leitura 
do raio da base e da altura. A fórmula: pi * raio² * altura.</p></li>
     </ol>

</body>
</html>