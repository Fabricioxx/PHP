
// Campos: Nome do produto e valor de venda.
Restrições: Todos os campos são obrigatórios. Não permitir o cadastro de produtos com
o mesmo nome.
Resultado: Cadastrar os produtos em um array.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadatro de produtos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
    <?php include_once 'menu.php'; ?>
    
    <div class="container">
        <div class="cadastrar">
            <h1>Cadastrar Produto</h1>
            <form action="cadastrarProduto.php" method="post">
                <label>Nome do Produto</label>
                <input type="text" name="nomeProduto" placeholder="Nome do Produto">
                <label>Valor do Produto</label>
                <input type="text" name="valorProduto" placeholder="Valor do Produto">
                <input type="submit" value="Cadastrar">
            </form>


            <?php 

              session_start();

             if(isset($_POST['nomeProduto']) && isset($_POST['valorProduto'])){
                $nomeProduto = $_POST['nomeProduto'];
                $valorProduto = $_POST['valorProduto'];
                $produtos = array();
                $produtos['nome'] = $nomeProduto;
                $produtos['valor'] = $valorProduto;

                $_SESSION['produtos'][] = $produtos; // Adiciona o produto no array de produtos

               header('Location: produtos.php'); // Redireciona para a página de produtos
             }
             else{
                echo "Preencha todos os campos";
             }
            
            
            
            ?>




        </div>

    </div>
   
</body>
</html>