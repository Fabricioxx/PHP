<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include_once 'menu.php';  session_start(); 

if(!isset($_SESSION['carrinho'])){ // Verifica se a variável de sessão existe

    $_SESSION['carrinho'] = array();// Cria a variável de sessão do tipo Array de compras	 
 }


?>


<div class="container">
    <div class="produtos">
<?php 
    if(isset($_SESSION['produtos'])){ // Verifica se a variável de sessão existe e se existe produtos cadastrados
      echo "<h1>Produtos</h1>";
      echo "<table>";
      echo "<tr>";
      echo "<th>Nome do Produto</th>";
      echo "<th>Valor do Produto</th>";
      echo "<th>Comprar</th>";
      echo "</tr>";
      foreach ($_SESSION['produtos'] as $key => $value) { // Percorre o array de produtos cadastrados e exibe na tela
          echo "<tr>";
          echo "<td>".$value['nome']."</td>";
          echo "<td> R$ ".$value['valor']."</td>";
          echo "<td><a href='produtos.php?id=".$key."'>Comprar</a></td>";
          echo "</tr>";
      }
      echo "</table>";
  }

   // adiciona um produto ao carrinho

    if(isset($_GET['id'])){ // Verifica se o id do produto foi passado por GET
        $id = $_GET['id']; // Pega o id do produto passado por GET
        if(isset($_SESSION['produtos'][$id])){ // Verifica se o produto existe no array de produtos cadastrados
             $produto = $_SESSION['produtos'][$id]; // Pega o produto do array de produtos cadastrados
             if(!isset($_SESSION['carrinho'][$id])){ // Verifica se o produto já existe no carrinho
                  $_SESSION['carrinho'][$id] = $produto; // Adiciona o produto ao carrinho
                  $_SESSION['carrinho'][$id]['quantidade'] = 1; // Adiciona a quantidade do produto no carrinho
             }else{
                  $_SESSION['carrinho'][$id]['quantidade'] += 1; // Adiciona mais uma unidade do produto no carrinho
             }

            }
            
            header('Location: carrinho.php'); // Redireciona para a página do carrinho
        }
   

       // if(isset($_SESSION['carrinho'][$key])){ // Verifica se o produto já existe no carrinho
            // unset($_SESSION['carrinho'][$key]); // Remove o produto do carrinho

         //  }



  ?>
    </div>
    
</body>
</html>