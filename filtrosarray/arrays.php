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
		 $clientes = array(); //Declaração do array de clientes
		 $clientesTemp = array();
		 
		 $clientesTemp['id'] = 1;
		 $clientesTemp['Nome'] = 'João';
		 $clientesTemp['Idade'] = 15;
		 array_push($clientes, $clientesTemp); //Adiciona um elemento ao final do array
		 
		 $clientesTemp['id'] = 2;
		 $clientesTemp['Nome'] = 'Joaquim';
		 $clientesTemp['Idade'] = 33;
		 array_push($clientes, $clientesTemp); // array_push($clientes, $clientesTemp) é equivalente a $clientes[] = $clientesTemp
		 
		 $clientesTemp['id'] = 3;
		 $clientesTemp['Nome'] = 'Maria';
		 $clientesTemp['Idade'] = 44;
		 array_push($clientes, $clientesTemp);
		 
		 print_r($clientes); //Mostra a estrutura do array
		 echo "<br>";
		 echo $clientes[0]['id'] . ", " . $clientes[0]['Nome'] . ", " . $clientes[0]['Idade'] . "<br>";
		 echo "Percorrendo a matriz com FOR <br>";
		 for($i = 0; $i < 3; $i++){
		    echo $clientes[$i]['id'] . ", " . $clientes[$i]['Nome'] . ", " . $clientes[$i]['Idade'] . "<br>";	 
		 }
		 echo "Percorrendo a matriz com FOREACH <br>";
		 foreach($clientes as $x){
		    echo $x['id'] . ", " . $x['Nome'] . ", " . $x['Idade'] . "<br>";	    	 
		 }
		 $filtro = 'Joaquim';
		 $novoArray = array_filter($clientes, function($chave) use($filtro){ // array_filter filtra o array de acordo com a condição passada na função anônima (função sem nome)
		    return ($chave['Nome'] == $filtro);	 
		 }); //array_filter filtra o array de acordo com a condição passada na função anônima (função sem nome)
		 echo 'Mostrando o array filtrado por nome <br>';
		 print_r($novoArray);
		 echo '<br>Mostrando o array original<br>';
		 print_r($clientes);
		 echo '<br>';
		 
		 $filtro = 30;
		 $novoArray = array_filter($clientes, function($chave) use($filtro){
		    return ($chave['Idade'] > $filtro);	 
		 });
		 echo 'Mostrando o array filtrado por idade <br>';
		 print_r($novoArray);
		 echo '<br>Mostrando o array original<br>';
		 print_r($clientes);
		 echo '<br>';
		 
		 $filtro = 30;
		 $filtro1 = 3;
		 $novoArray = array_filter($clientes, function($chave) use($filtro, $filtro1){
		    return ($chave['Idade'] > $filtro && $chave['id'] == $filtro1);	 
		 });
		 echo 'Mostrando o array filtrado por mais de uma chave <br>';
		 print_r($novoArray);
		 echo '<br>Mostrando o array original<br>';
		 print_r($clientes);
		 echo '<br>';
      ?> 	  
   </body>
</html>