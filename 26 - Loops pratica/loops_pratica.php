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
            $registros = array(
                array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
                array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
                array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'));
            
            echo '<h1>While</h1>';
            $idx = 0;
            while($idx < count($registros)){
                echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
                echo '<p>'.$registros[$idx++]['conteudo'].'</p><hr>';
            }

            echo '<h1>Do While</h1>';
            $idx = 0;
            do{
                echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
                echo '<p>'.$registros[$idx++]['conteudo'].'</p><hr>';
            }while($idx < count($registros));

            echo '<h1>For</h1>';
            for($idx = 0; $idx < count($registros); $idx++){
                echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
                echo '<p>'.$registros[$idx]['conteudo'].'</p><hr>';
            }
        ?>
    </body>
</html>