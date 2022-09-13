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

        // recuperacao da data atual / data corrente
        echo date('D');
        ?>
        <br />
    <?php
        // data e hora atual, atualizado no sistema que a aplicacao PHP ta rodando
        echo date('d/m/Y H:i:s');
        echo '<br />';
        
        // recupera o timezone da aplicacao
        echo date_default_timezone_get();

        // set como novo default o time zone escolhido, nao altera o php.ini
        date_default_timezone_set('America/Sao_Paulo');

        echo '<br />';
        echo date('d/m/Y H:i:s');
        echo '<br />';
        echo date_default_timezone_get();
        echo '<br />';


        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        //timestamp
        // 01/01/1970 -- 2018-04-24
        // A data é apartir de 1970 pois é o inicio da era UNIX

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br />';
        echo $data_final . ' - ' . $time_final;
        echo '<br />';

        $diferenca_times = $time_final - $time_inicial;

        $segundos_existem_dia = 24 * 60 * 60;
        $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
        echo '<br />';
        echo "A diferenca de dias é: $diferenca_de_dias_entre_as_datas";




    ?>
</body>
</html>