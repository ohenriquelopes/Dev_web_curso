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
        $array1 = 'String';
        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }

        $array = [1 => 'a', 7 => 'b', 18 => 'c',];
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);
        echo '<pre>';
        print_r($chaves_array);
        echo '</pre>';

        $ordena = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte'];
        echo '<pre>';
        print_r($ordena);
        echo '</pre>';
        sort($ordena); // true or false
        echo '<pre>';
        print_r($ordena);
        echo '</pre>';

        // asort() ordena um array preservando os indices
        // count() conta a quantidade de elementos de um array
        // array_merge() funde um ou mais arrays
        // explode() divide uma string baseada em um delimitador
        // implode() junta elementos de um array em uma string


        


    ?>

</body>
</html>