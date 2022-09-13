<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // gettype() => retorna o tipo da variavel
    $valor = 10;
    $valor2 = (float) $valor; // casting, altera o tipo da variavel para float (double, float sao iguais)

    echo $valor . ' ' . gettype($valor);
    echo '<br />';
    echo $valor2 . ' ' . gettype($valor2);

    ?>
</body>
</html>