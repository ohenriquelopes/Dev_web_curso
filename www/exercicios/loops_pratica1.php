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
        //$registros = ['Titulo noticia 1', 'Titulo noticia 2', 'Titulo noticia 3'];
        /*
        $idx = 0;
        while($idx < 3) {
            echo $registros[$idx];
            echo '<hr />';

            $idx++;
        }
        */

        $registros = [
            ['titulo' => 'Titulo noticia 1', 'conteudo' => 'conteudo 1'],
            ['titulo' => 'Titulo noticia 2', 'conteudo' => 'conteudo 2'],
            ['titulo' => 'Titulo noticia 3', 'conteudo' => 'conteudo 3'],
            ['titulo' => 'Titulo noticia 4', 'conteudo' => 'conteudo 4'],
        ];

        echo '<pre>';
        //print_r($registros);
        echo '</pre>';

        $idx = 0;
        while($idx < count($registros)) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr />';

            $idx++;
        }

        echo '<br />';

        do {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr />';

            $idx++;

        } while($idx < count($registros));

        echo '<br />';

        for ($idx = 0; $idx < count($registros); $idx++) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr />';
        }

    ?>

</body>
</html>