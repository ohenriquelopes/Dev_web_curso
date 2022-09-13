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
        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        // valores null
        if(is_null($funcionario1)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Nao, a variavel não é null';
        }

        echo '<br />';

        if(is_null($funcionario2)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Nao, a variavel não é null';
        }

        echo '<br />';

        if(is_null($funcionario3)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Nao, a variavel não é null';
        }
        echo '<hr >';
        // valores vazios?

        if(empty($funcionario1)) {
            echo 'Sim, a variavel está vazia';
        } else {
            echo 'Nao, a variavel nao está vazia';
        }

        echo '<br />';

        if(empty($funcionario2)) {
            echo 'Sim, a variavel está vazia';
        } else {
            echo 'Nao, a variavel nao está vazia';
        }
        echo '<br />';

        if(empty($funcionario3)) {
            echo 'Sim, a variavel está vazia';
        } else {
            echo 'Nao, a variavel nao está vazia';
        }
    ?>

</body>
</html>