<!DOCTYPE html>
<html>
<head>
	<title>Folha</title>

<style>

body {

 margin-left:100px;
}

form {

	
}

</style>
</head>

<!-- url   http://localhost/Aula/folha.php -->
<body>

   <center><strong>Formulario Folha de Pagamento</strong></center> <br><br>



  <div class="container">
  	<div class="box">

   <form action="calculo.php" method="post">
   	  
   	  <p>
       <label>Funcionario:</label><br> 
       <input type="text" name="nome" maxlength="40" required >

  	   <p>
       <label>Horas Trabalhadas:</label><br> 
       <input type="text" name="hora" maxlength="40" required >
  	   </p>

  	    <p>
  	 	
       <label>Valor da Hora:</label><br> 
       <input type="text" name="valorhora" maxlength="40" required >
  	   </p>

  	   <button type="submit" name="enviarexp3">Calcular Salario</button>
   </form>
     </div>
   </div>

</body>
</html>