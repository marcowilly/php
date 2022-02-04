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
             * Tipo de variáveis em php
             * String, int, float, boolean, array...
             * 
             * Deve obrigatoriamente iniciar com o caracter "$"
             * Não pode conter espaços ou caracteres especiais (com exceção do underline/underscore)
             */
            
             #String
             $nome = 'Marco Willy';

             #int
             $idade = 21;

             #float
             $peso = 75.5;

             #boolean
             $isFumante = false;
        ?>

        <h1>Ficha cadastral</h1>
        <br>
        <p>Nome: <?=$nome?></p>
        <p>Idade: <?=$idade?></p>
        <p>Peso: <?=$peso?></p>
        <p>Fumante: <?=$isFumante ? 'Sim' : 'Não'?></p>
    </body>
</html>