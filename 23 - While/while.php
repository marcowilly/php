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
            $num = 0;
            echo '-- Início do Loop --</br>';
            while($num++ < 10){
                if($num == 5 && false){
                    break;
                }else if($num == 3){
                    continue;
                }
                echo "$num </br>";
            }
            echo '--Fim do Loop--';
        ?>
    </body>
</html>