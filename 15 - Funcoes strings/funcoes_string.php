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
            $texto = 'curso completo de PHP';

            echo '<h1>String to lower</h1>';
            echo $texto.'<br>';
            echo strtolower($texto).'<br>';

            echo '<h1>String to upper</h1>';
            echo $texto.'<br>';
            echo strtoupper($texto).'<br>';

            echo '<h1>Upper case first</h1>';
            echo $texto.'<br>';
            echo ucfirst($texto).'<br>';

            echo '<h1>String length</h1>';
            echo $texto.'<br>';
            echo strlen($texto).'<br>';

            echo '<h1>String replace</h1>';
            echo $texto.'<br>';
            echo str_replace('PHP','JavaScript',$texto).'<br>';

            echo '<h1>String part</h1>';
            echo $texto.'<br>';
            echo substr($texto, 0, strlen($texto)-6).'<br>';
        ?>
    </body>
</html>