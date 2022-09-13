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

        //sequenciais (numericos)
        //$lista_frutas = array('Bannana', 'Macã', 'Morango', 'Uva');
        $lista_frutas = ['Bannana', 'Macã', 'Morango', 'Uva']; // igual a linha de cima
        $lista_frutas[] = 'Abacaxi'; // inserir no final do array

        var_dump($lista_frutas);
        echo '<br />';
        print_r($lista_frutas);

        //associativos

        $lista_frutas2 = array(
            'a' => 'Bannana', 
            'b' => 'Macã', 
            'x' => 'Morango', 
            'z' => 'Uva',
            '2' => 'Abacate'
        );
        echo '<br />';
        echo '<pre>';
        var_dump($lista_frutas2);
        echo '</pre>';
    ?>
</body>
</html>