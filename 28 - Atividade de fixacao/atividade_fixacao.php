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
            $arr = Array();
            while(count($arr) < 6){
                $n = rand(1, 60);
                if(!in_array($n, $arr)){
                    $arr[] = $n;
                }
            }
            echo '<br><pre>';
            print_r($arr);
            echo '<pre>';
        ?>
    </body>
</html>