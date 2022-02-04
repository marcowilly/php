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
            $listaCoisas = [];
            $listaCoisas['frutas'] = Array(1 => 'Banana',2 => 'Maça',3 => 'Morango',4 => 'Uva');
            $listaCoisas['pessoas'] = [1 => 'João',2 => 'José',3 => 'Maria'];

            echo '<pre>';
            print_r($listaCoisas);
            echo '</pre>';

            echo '<hr>';
            echo $listaCoisas['frutas'][3];
            echo '<br>';
            echo $listaCoisas['pessoas'][2];
        ?>
    </body>
</html>