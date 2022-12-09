<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Carrinho</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 

   <?php 
	     session_start(); // Inicia a sessão
		 if(!isset($_SESSION['produtos'])){ // Verifica se a variável de sessão existe

		    $_SESSION['produtos'] = array();// Cria a variável de sessão do tipo Array de compras	 
		 }
	  ?>

    <?php include_once 'menu.php'; ?>

    <center><h1>Minha loja<h1></center><br><br>


    <div class="inicio">



        <img src="image.png" > 

     



    </div>


    

    
</body>
</html>