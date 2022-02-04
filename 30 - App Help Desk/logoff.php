<?php

    session_start();

    //remover índices do array de sessão
    //unset($_SESSION['x']) -> remove apenas se existir

    //destruir a variável de sessão
    //session_destroy()

    session_destroy();
    header('Location: index.php');
?>