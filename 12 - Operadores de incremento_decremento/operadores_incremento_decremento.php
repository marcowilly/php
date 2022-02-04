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
             * Pré-incremento(++$var)
             * Pré-decremento(--$var)
             * Pós-incremento($var++)
             * Pós-decremento($var--)
             */     

             $a = 7;
             echo '<h3>Pós-incremento</h3>';
             echo "a = ".$a++." <br>";
             echo "a = ".$a." <br>";

             echo '<h3>Pré-incremento</h3>';
             echo "a = ".++$a." <br>";
             echo "a = ".$a." <br>";

             echo '<h3>Pós-decremento</h3>';
             echo "a = ".$a--." <br>";
             echo "a = ".$a." <br>";

             echo '<h3>Pré-decremento</h3>';
             echo "a = ".--$a." <br>";
             echo "a = ".$a." <br>";
        ?>
    </body>
</html>