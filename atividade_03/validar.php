<?php

    session_start();

    $conexao = new PDO("mysql: host=localhost; port=3307; dbname=meubd", "root", "");

    if (isset($_POST['nome']) && ($_POST['senha'])) {
        $nome = $_POST['nome'];
        $senha = md5($_POST['senha']);
    }

    $pesquisaBanco = $conexao->query('SELECT nome, senha FROM usuario');
    $login = 0;

    if ($pesquisaBanco) {
        foreach ($pesquisaBanco as $resultado) {
            if (($nome == $resultado['nome']) && ($senha == $resultado['senha'])) {
                $login = 1;
            break;
            }
        }
    }

    if ($login) {
        $_SESSION['logou'] = 1;
        header('location: paineldecontrole.php');
        } else {
        header('location: projeto3.php');
    }
   
?>