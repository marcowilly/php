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
            #Sequenciais (numéricos)
            $listaFrutas = Array('Banana','Maça','Morango','Uva');
            $listaFrutas[] = 'Abacaxi';

            echo '<pre>';
                var_dump($listaFrutas);
            echo '</pre><br>';
            echo '<pre>';
                print_r($listaFrutas);
            echo '</pre><br>';

            echo $listaFrutas[2];

            #Associativos
            $listaFrutas = [
                'a' => 'Banana',
                'b' => 'Maça',
                'c' => 'Morango',
                'd' => 'Uva'];
            $listaFrutas[] = 'Abacaxi';

            echo '<pre>';
                var_dump($listaFrutas);
            echo '</pre><br>';
            echo '<pre>';
                print_r($listaFrutas);
            echo '</pre><br>';

            echo $listaFrutas['c'];
        ?>
    </body>
</html>