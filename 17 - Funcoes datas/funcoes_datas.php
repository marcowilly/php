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
            #Recupera fusoHorario
            echo date_default_timezone_get().'<br>';
            #Seta fusoHorario
            echo date_default_timezone_set('America/Sao_Paulo').'<br>';
            #Recuperação da data autal / data corrente
            echo date('d/m/Y H:i').'<br>';

            $dataInicial = '2018-04-24';
            $dataFinal = '2018-05-15';

            #timestamp 01/01/1970 UNIX (JS -> millissegundos / segundos)
            $timeInicial = strtotime($dataInicial);
            $timeFinal = strtotime($dataFinal);

            echo "$dataInicial - $timeInicial <br>";
            echo "$dataFinal - $timeFinal <br>";

            $diffTimes = abs($timeFinal - $timeInicial);
            $diaSegundos = 24 * 60 * 60;

            echo $diffDias = $diffTimes / $diaSegundos;
        ?>
    </body>
</html>