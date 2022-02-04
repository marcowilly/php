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

            //in_array() -> retorna true ou false para existência do que esta sendo procurado
            //array_search() -> retorna o índice do valor pesquisado caso exista

            $listaFrutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

            echo '<pre>';
            print_r($listaFrutas);
            echo '</pre><br>';

            //true -> texto == 1
            //false -> texto == vazio
            echo in_array('Maça', $listaFrutas);
            echo '<br>';

            //Encontre -> index do array
            //Não encontre -> null
            echo array_search('Uva', $listaFrutas);
            echo '<br>';

            $listaCoisas['frutas'] = $listaFrutas;
            $listaCoisas['pessoas'] = ['João', 'José', 'Maria'];

            echo '<pre>';
            print_r($listaCoisas);
            echo '</pre><br>';

            echo in_array('Uva', $listaCoisas['frutas']);
            echo '<br>';
        ?>
    </body>
</html>