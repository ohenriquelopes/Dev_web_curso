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

        $usuarios_possui_cartao_loja = true;
        $valor_compra = 450;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if($usuarios_possui_cartao_loja && $valor_compra >= 400) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;

        } else if ($usuarios_possui_cartao_loja && $valor_compra >= 300) {
            $valor_frete = 10;
            $recebeu_desconto_frete = true;

        } else if ($usuarios_possui_cartao_loja && $valor_compra >= 100) {
            $valor_frete = 25;
            $recebeu_desconto_frete = true;
        }


    ?>

    <H1>Detalhes do pedido</H1>
    <p>Possui cartao da loja? <?= $usuarios_possui_cartao_loja ? 'Sim' : 'Nao'; ?>
        
        <?php
        // <condicao> ? true : false 
        /*
            if($usuarios_possui_cartao_loja == true) {
                echo "Sim";
            } else {
                echo "Nao";
            }
        */
        ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?> </p>

    <p>Recebeu desconto no frete?
        <?php
            $teste = $recebeu_desconto_frete ? 'Sim' : 'Nao';
            echo $teste;
        /*
            if($recebeu_desconto_frete == true) {
                echo "Sim";
            } else {
                echo "Nao";
            }
        */
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?> </p>
</body>
</html>