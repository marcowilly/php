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
            # void function
            function exibirBoasVindas(){
                echo "Bem-vindo ao curso de PHP!<br>";
            }
            exibirBoasVindas();

            # return function
            function calcularAreaTerreno($largura, $comprimento){
                return $largura * $comprimento;
            }
            echo calcularAreaTerreno(30, 50)."<br>";
        ?>
    </body>
</html>