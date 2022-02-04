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
            $idade = 21;
            $peso = 75.5;

            echo ($idade > 16 && $idade < 69 && $peso >= 50) ? 'Atende aos requisitos' : 'Não atende aos requisitos';
        ?>
    </body>
</html>