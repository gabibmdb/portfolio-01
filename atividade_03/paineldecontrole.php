<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    <title>Painel de Controle</title>
</head>

<?php 
    session_start();

    $conexao = new PDO("mysql: host=localhost; port=3307; dbname=meubd", "root", "");

    if (!(isset($_SESSION['logou']))) {
        header('location: erro.html');
    }
    //unset($_SESSION['logou']);

?>


<body>

    <div class="formulario2">
        <div class="formulario2_a">
        <form method="POST" action="cadastrarProduto.php">
            <div class="form-group">
                <label for="nomeProduto">Nome</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto">
            </div>
            <div class="form-group">
                <label for="precoProduto">Preço</label>
                <input type="text" class="form-control" name="precoProduto" id="precoProduto">
            </div>
            <div class="form-group">
                <label for="quantidadeProduto">Quantidade</label>
                <input type="text" class="form-control" name="quantidadeProduto" id="quantidadeProduto">
            </div>
            <button type="submit" class="btn btn-dark btn-block">Submit</button>
            <button type="button" class="btn btn-dark btn-block" onclick="window.location.href='projeto3.php'">Voltar</button>
        </form>
        <div class="logout">
            <a href="logout.php">
            <img src="images/logoutbtn.png" id="logoutButton">
            </a>
        </div>
    </div>


    <!-- VISUALIZAÇÃO DOS PRODUTOS -->

    <div class="formulario2_b">
        <?php

            $precoAsc = $conexao->query("SELECT * FROM produto ORDER BY preco ASC");
            $precoDesc = $conexao->query("SELECT * FROM produto ORDER BY preco DESC");
        ?>

        <div class="asc">
            <p>
            <button class="btn btn-warning btn-block" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
            Crescente
            </button>
            </p>
            <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                <?php
                    if ($precoAsc) {
                        foreach ($precoAsc as $row) {
                            echo $row['nome'] . ' // '  . 'R$' . $row['preco'] . ' // ' . $row['quantidade'] . '</br>';
                        }
                    }
                    ?>
                </div>
                </div>
            </div>
            
        </div>
        </div>

        <div class="desc">

        <p>
            <button class="btn btn-warning btn-block" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
            Decrescente
            </button>
            </p>
            <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    <?php
                    if ($precoDesc) {
                        foreach ($precoDesc as $row) {
                            echo $row['nome'] . ' // '  . 'R$' . $row['preco'] . ' // ' . $row['quantidade'] . '</br>';
                        }
                    }
                    ?>
                </div>
                </div>
            </div>


       
        </div>
        </div>
    </div>

    <script type="text/javascript" src="javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>