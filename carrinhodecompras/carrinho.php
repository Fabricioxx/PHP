<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include_once 'menu.php'; session_start(); ?>


<div class="container">
        <div class="carrinho">
            <h1>Carrinho de Compras</h1> <!-- titulo -->
            <?php 

     if(isset($_SESSION['carrinho'])){ 

       
        echo '<table>'; // abre a tabela
        echo '<tr>'; // abre a linha
        echo '<th>Produto</th>'; // coluna 1
        echo '<th>Preço</th>'; // coluna 2
        echo '</tr>'; // fecha a linha
     foreach($_SESSION['carrinho'] as $x){
        echo '<tr>'; 
        echo '<td>' . $x['nome'] . '</td>';
        echo '<td align = center>' . $x['valor'] . '</td>';
        echo '</tr>';
     }
     echo '</table>'; // fecha a tabela

        }
        else{
            echo 'Carrinho vazio';
        }
   ?>
            <div class="finalizar">
                <a href="finalizar.php">Finalizar Compra</a>
            </div>
        </div>


    
</body>
</html>