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
            $arr = Array('Marco','Willy', 'Elisiana', 'Dinha', 'Ana', 'Maria');

            if(is_array($arr)){
                echo 'Sim, é um array';
            }else{
                echo 'Não, é um array';
            }

            $arr = [1 => 'a', 7 => 'b', 18 => 'c'];
            echo '<br><pre>';
            print_r($arr);
            echo '<pre>';

            $chaves_array = array_keys($arr);
            echo '<br><pre>';
            print_r($chaves_array);
            echo '<pre>';

            $arr = Array('Marco','Willy', 'Elisiana', 'Dinha', 'Ana', 'Maria');
            sort($arr);
            echo '<br><pre>';
            print_r($arr);
            echo '<pre>';

            $arr = Array('Marco','Willy', 'Elisiana', 'Dinha', 'Ana', 'Maria');
            asort($arr);
            echo '<br><pre>';
            print_r($arr);
            echo '<pre>';

            echo '<br><pre>';
            echo count($arr);
            echo '<pre>';

            $arrSO = ['OSX','Windows'];
            $arrSO1 = array('Linux');
            $arrSO2 = Array('Kali');

            $arr = array_merge($arrSO, $arrSO1, $arrSO2);
            echo '<br><pre>';
            print_r($arr);
            echo '<pre>';

            $data = '26/04/2018';
            $arr = explode('/', $data);
            echo '<br><pre>';
            print_r($arr);
            echo '<pre>';

            $arr = implode('-', $arr);
            echo '<br><pre>';
            print_r($arr);
            echo '<pre>';
        ?>
    </body>
</html>