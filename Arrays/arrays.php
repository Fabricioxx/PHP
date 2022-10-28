<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Arrays
      </title>
   </head>
   <body>
      <?php
	     /*$valores = [1, 2, 3, 4, 5]; //Declaração do array
		 print_r($valores); // Mostra a estrutura do array
		 echo "<br>";
		 echo $valores[2] . "<br>"; //Acesso a um determinado elemento do array
		 echo "Mostrando todos os valores do vetor <br>";
		 for($i = 0; $i < 5; $i++){ //Percorrendo o array com FOR
		    echo $valores[$i] . "<br>";
		 }
		 echo "Mostrando todos os valores do vetor com FOREACH <br>";
		 foreach($valores as $x){ //Percorrendo o array com FOREACH
		    echo $x . '<br>';	 
		 }*/
		 $clientes = array(); //Declaração do array
		 $clientesTemp = array(); //Declaração do array
		 
		 $clientesTemp['id'] = 1; //Atribuição de valores ao array
		 $clientesTemp['Nome'] = 'João'; //Atribuição de valores ao array
		 $clientesTemp['Idade'] = 15; //Atribuição de valores ao array

		 array_push($clientes, $clientesTemp); //Inserção de um array dentro de outro array
		 
		 $clientesTemp['id'] = 2;
		 $clientesTemp['Nome'] = 'Joaquim';
		 $clientesTemp['Idade'] = 33;
		 array_push($clientes, $clientesTemp); //Adiciona um novo elemento no array
		 
		 $clientesTemp['id'] = 3;
		 $clientesTemp['Nome'] = 'Maria';
		 $clientesTemp['Idade'] = 44;
		 array_push($clientes, $clientesTemp);
		 
         //---------------------------------------------------------------------------------

		 print_r($clientes);//print_r mostra a estrutura do array
		 echo "<br>";
		 echo $clientes[0]['id'] . ", " . $clientes[0]['Nome'] . ", " . $clientes[0]['Idade'] . "<br>"; //Acesso a um determinado elemento do array

		 echo "Percorrendo a matriz com FOR <br>"; 
		 for($i = 0; $i < 3; $i++){
		    echo $clientes[$i]['id'] . ", " . $clientes[$i]['Nome'] . ", " . $clientes[$i]['Idade'] . "<br>";	 
		 }
		 echo "Percorrendo a matriz com FOREACH <br>";
		 foreach($clientes as $x){
		    echo $x['id'] . ", " . $x['Nome'] . ", " . $x['Idade'] . "<br>";	    	 
		 }
      ?> 	  
   </body>
</html>