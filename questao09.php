<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>
    <?php
        $valorDepositado = 350000;
        $rendimento = $valorDepositado * 0.007;
        $valorTotal = $valorDepositado + $rendimento;
        echo "Seu valor total é: ", $valorTotal;
        echo "<br>";
        echo "Seu rendimento após 1 mês foi de: ", $rendimento;
    ?>
</body>
</html>