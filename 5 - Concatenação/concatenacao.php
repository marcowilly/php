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
            $nome = 'Marco';
            $cor = 'preto';
            $idade = 21;
            $atividadePreferida = 'estudar';

            //Operador .
            echo 'Olá '.$nome.', vi que sua cor preferida é '.$cor.', possui '.$idade.' anos e gosta de '.$atividadePreferida;

            //aspas duplas
            echo '<br>';
            echo "Olá $nome, vi que sua cor preferida é $cor, possui $idade anos e gosta de $atividadePreferida";
        ?>
    </body>
</html>