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
        //in_array() - true or false para a existencia no array
        //array_search() - retorna o indice do valor pesquisado

        $lista_frutas = ['Bannana', 'Macã', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';
        echo array_search('Uva', $lista_frutas); // retorna o indice ou NULL
        echo '<br />';

        $existe =  in_array('Bannana', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio
        if($existe) {
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Nao, o valor pesquisado nao existe no array';
        }

        echo '<hr >';

        $lista_coisas = [ 
            'frutas' => $lista_frutas,
            'pessoas' => ['Joao', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';
        echo '<br />';

        echo in_array('Joao', $lista_coisas['pessoas']);
    ?>

</body>
</html>