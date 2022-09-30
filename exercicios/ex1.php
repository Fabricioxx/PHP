<!DOCTYPE html>   <!-- comentario -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 3 - exercicio 1</title>

      <!--tag LINK serve para linkar o arquivo de estilo.css /para formatar a pagina -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>


	<h1>Aula 3 - Exercio 1</h1>

	<!-- incluir o arquivo de menu -->
   <?php include_once "menu.php" ?> <!-- comando para printar uma string com o arquivo menu -->


   <h2>Dados do funcionario</h2>

  <!-- metodo POST envia os dados atraves do servidor / para a pagina RESPOSTAS.PHP-->
  <form action="respostas.php" method="post"> <!-- Criar um formuladrio -->
  	 <p>
  	 	<!-- a tag LABEL e usada em conjunto com a tag INPUT para briar nome da caixa e a caixa de digitação -->
       <label>Nome:</label><br> <!-- rotulo(nome) da caixa(input)/ tag BR para manter a caixa em baixo -->
       <input type="text" name="nome" maxlength="40" required ><!-- criar a caixa(imput) de digitação/ parametro TYPE para dizer que tipo de conteudo sera escrito na caixa(tipo texto(letras ou string/ MAXLENGTH é o numero de caracteres que será posivel digitar dentro do INPUT)  o atributo NOME é para marcar o nome da INPUT -para poder localizalo) -->
  	 </p>

  	 <!-- cada parte do formulario esta dentro de um paragrafo-->
  	 <!-- entre as tag de de abrir( <> ) e de fechar( </> ) vai o nome que vai aparer na tela-->

  	 <p>
  	 	<label>Salário atual:</label><br>
  	 	<input type="number" name="salario" step="0.01" min="800" max="8000"> <!-- atributo STEP para adicionar numero de  casas decimais -->
  	 	<!-- min="800" max="8000" - para informar o valor minimo inicial e o falor maximo final que a flexinha da caixa de input começa e termina -->
  	 </p>

  	 <p>
  	 	<label>Percentual de aumento:</label><br>
  	 	<input type="number" name="percentual" min="1" max="100" step="0.1">
  	 </p>

  	 <p>
  	 	<button type="submit"  name="enviarEx1">Enviar</button>
  	 	<!-- TYPE é o tipo do botão(submit é ENVIAR) nome="anviarEx1" - NOME DO BOTÃO-->
  	 </p>


  </form>



</body>
</html>