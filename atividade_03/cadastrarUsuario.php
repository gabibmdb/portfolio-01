<?php

session_start();

$conexao = new PDO("mysql: host=localhost; port=3307; dbname=meubd", "root", "");

if (isset($_POST['nome']) && ($_POST['email']) && ($_POST['senha'])) {
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];

    $conexao->exec("INSERT INTO usuario (nome, senha, email) 
    VALUES ('$nome', '$senha', '$email')");

    header('location: projeto3.php');

}


?>


