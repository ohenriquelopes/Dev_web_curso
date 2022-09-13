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

        $num = 7.3;

        echo ceil($num); // arredonda para cima
        echo floor($num); // arredonda para baixo
        echo round($num); // arredonda com base na fracao || .0 e .4 => baixo e .5 => cima
        echo rand(); // gera um valor aleatorio || 0 ate randmax
        echo getrandmax(); // mostra o valor do randmax do seu SO
        echo sqrt(9); // gera a raiz quadrada
    ?>
</body>
</html>