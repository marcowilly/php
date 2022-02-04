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
             * OPERADORES CONDICIONAIS
             * 
             * Igual(==)
             * Identico(===)
             * Diferente(!=)
             * Diferente(<>)
             * Não identico(!==)
             * Menor(<)
             * Maior(>)
             * Menor igual(<=)
             * Maior igual(>=)
             */

             /**
              * OPERADORES LOGICOS
              *
              * e(AND ou &&)
              * OU(OR ou ||)
              * XOR(XOR)
              * Negacao(!)
              */

              $isCartaoLoja = true;
              $valorCompra = 255;
              $valorFrete = 50;

             if($isCartaoLoja && $valorCompra >= 400){
                $valorFrete = 0;
             }else if($isCartaoLoja && $valorCompra >= 300){
                $valorFrete = 10;
             }else if($isCartaoLoja && $valorCompra >= 100){
                $valorFrete = 25;
             }
             
             echo '<h1>Detalhes do pedido</h1>';
             echo "Possui cartao loja ".($isCartaoLoja ? 'Sim' : 'Não')."<br>";
             echo "Valor da compra: $valorCompra <br>";
             echo "Valor do frete: $valorFrete <br>";
             echo "valor total: ".($valorFrete+$valorCompra);
        ?>
    </body>
</html>