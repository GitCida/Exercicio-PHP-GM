<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12</title>
</head>
<body>
    <?php
    $custoFabricaCarro = 80000;
    $percentagemDistribuidor = 0.28;
    $percentagemImpostos = 0.45;
    $custoComImpostos = ($custoFabricaCarro * $percentagemImpostos) + $custoFabricaCarro;
    $custoAoConsumidor = ($custoComImpostos * $percentagemDistribuidor) + $custoComImpostos;
    echo "O preço desse carro é de ", $custoFabricaCarro, " reais. Com os impostos de ", $percentagemImpostos, " e com a a percentagem do distribuidor de ", $percentagemDistribuidor, ", o preço do consumidor é de ", $custoAoConsumidor, " reais."; 
    ?>
</body>
</html>