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
            function calcularImpostoRenda($salario){
                if($salario >= 4664.68){
                    return 27.5;    
                }else if($salario >= 3751.06){
                    return 22.5;
                }else if($salario >= 2826.66){
                    return 15;
                }else if($salario >= 1903.99){
                    return 7.5;
                }else{
                    return 0;
                }
            }
            echo calcularImpostoRenda(4000.00);
        ?>
    </body>
</html>