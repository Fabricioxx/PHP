<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include_once 'menu.php'; session_start(); ?>

<div class="container">
    <div class="carrinho">
    <center> <h1>Compra Finalizada !</h1> <!-- titulo -->
        <?php 

        $total = 0;

     if(isset($_SESSION['carrinho'])){ 

       
        echo '<table>'; // abre a tabela
        echo '<tr>'; // abre a linha
        echo '<th>Total</th>'; // coluna 1
        echo '</tr>'; // fecha a linha
     foreach($_SESSION['carrinho'] as $x){

        $total += $x['valor'];
        
     }
        echo '<tr>'; 
        echo '<td align = center> R$ ' . $total . '</td>';
        echo '</tr>';
       echo '</table>'; // fecha a tabela

        }
        else{
            echo 'Carrinho vazio';
        }
   ?>
    </center>
    </div>


    
</body>
</html>