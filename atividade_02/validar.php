<?php

    session_start();

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


    if (($_SESSION['sessaoNome']==$nome) && ($_SESSION['sessaoSenha']==$senha)) {
        $_SESSION['logou'] = 1;
        header('location: paineldecontrole.php');
    } elseif (($_SESSION['sessaoNome']!=$nome) || ($_SESSION['sessaoSenha']!=$senha)) {
        $_SESSION['erro'] = 1;
        header('location: projeto2.php');
    } else {
        $_SESSION['erro'] = 2;
        header('location: projeto2.php');
    }
 
?>