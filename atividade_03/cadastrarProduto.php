<?php
session_start();

$conexao = new PDO("mysql: host=localhost; port=3307; dbname=meubd", "root", "");

if (isset($_POST["nomeProduto"]) && ($_POST["precoProduto"]) && ($_POST["quantidadeProduto"])) {
    $nomeProduto = $_POST["nomeProduto"];
    $precoProduto = $_POST["precoProduto"];
    $quantidadeProduto = $_POST["quantidadeProduto"];

    $conexao->exec("INSERT INTO produto (nome, preco, quantidade) 
    VALUES ('$nomeProduto', '$precoProduto', '$quantidadeProduto')");

    $_SESSION['logou'] === 1;
    header("location: paineldecontrole.php");

}

?>