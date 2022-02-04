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
            $number = -2.49;
            #Arredonda para cima
            echo ceil($number).'<br>';

            $number = -2.49;
            #Arredonda para baixo
            echo floor($number).'<br>';

            $number = -2.49;
            #Arredonda com base na fração
            echo round($number).'<br>';

            #Gera um valor aleatorio
            echo rand(10, 20).'<br>';

            #Retorna maior valor suportado pelo sistema
            echo getrandmax().'<br>';

            #Raiz quadrada
            echo sqrt(9).'<br>';
        ?>
    </body>
</html>