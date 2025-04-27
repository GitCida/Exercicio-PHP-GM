<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11</title>
</head>
<body>
    <?php 
        $valorVenda = 250;
        $acrescimo = 0.15;
        $produtoAcrescimo = $valorVenda * $acrescimo;
        $custoProduto = $valorVenda + $produtoAcrescimo;
        echo "O valor de venda do produto é: ", $valorVenda, ", e com o acréscimo de ", $acrescimo, " o custo do produto é: ", $custoProduto;
    ?>
</body>
</html>