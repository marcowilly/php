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
            /**
             * Para definir variaveis constantes é obrigatório o uso da função define.
             */
            
            define('BD_URL', 'endereco_db_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');

            echo 'URL: '.BD_URL.'<br>';
            echo 'USUARIO: '.BD_USUARIO.'<br>';
            echo 'SENHA: '.BD_SENHA.'<br>';
        ?>
    </body>
</html>