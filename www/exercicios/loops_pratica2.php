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
        $funcionarios = [
            ['nome' => 'Joao', 'salario' => 2500, 'data_nascimento' => '06/03/1970'],
            ['nome' => 'Maria', 'salario' => 3000], 
            ['nome' => 'Julia', 'salario' => 2200],
        ];

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario) {
            //echo "ID $idx - Nome: $funcionario <br />";
            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br />";
            }
            echo '<hr />';
        }
    ?>

</body>
</html>