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
             * Adição(+)
             * Subtração(-)
             * Multiplicação(*)
             * Divisão(/)
             * Modulo(%)
             */

             $num1 = 13;
             $num2 = 4;
            
             echo "$num1 + $num2 = ".($num1+$num2).'<br>';
             echo "$num1 - $num2 = ".($num1-$num2).'<br>';
             echo "$num1 * $num2 = ".($num1*$num2).'<br>';
             echo "$num1 / $num2 = ".($num1/$num2).'<br>';
             echo "$num1 % $num2 = ".($num1%$num2).'<br>';

            /**
             * Adição(+=)
             * Subtração(-=)
             * Multiplicação(*=)
             * Divisão(/=)
             * Modulo(%=)
             */

             $x = 10;
             $x += 5;

             echo $x;
        ?>
    </body>
</html>