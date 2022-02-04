<?php
    $file = fopen('../../../APP_HELP_DESK/arquivo.txt', 'a');
    session_start();

    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['conteudo']);
    $descricao = str_replace('#','-',$_POST['descricao']);

    $texto = $_SESSION['id']."#$titulo#$categoria#$descricao".PHP_EOL;

    fwrite($file, $texto);

    fclose($file);

    header('Location: abrir_chamado.php');
?>