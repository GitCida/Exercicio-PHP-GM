<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
    <?php 
        $nomeVendedor = "Renan Moreira,";
        $salarioFixo = 2100;
        $numeroVendas = 3480;
        $salarioFinal = ($numeroVendas * 0.15) + $salarioFixo;
        echo "Nome: ", $nomeVendedor, " seu salário fixo é de: ", $salarioFixo, " e seu salário no final do mês foi: ", $salarioFinal; 
    ?>
</body>
</html>