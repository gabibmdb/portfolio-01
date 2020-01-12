<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

    <?php 
        session_start();

        if (isset($_POST['senha2'])) {
            $_SESSION['sessaoNome'] = $_POST['nome'];
            $_SESSION['sessaoSenha'] = $_POST['senha'];
        }

        
    ?>

<body>
    <div class="formulario">
        <form method="POST" action="validar.php">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>

        <div class="mt-5">
            <?php

                if (isset($_SESSION["erro"])) {
                    if ($_SESSION["erro"] == 1) {
                    echo "<small>Usuário ou senha inválida.</small>";
                    } elseif ($_SESSION["erro"] == 2) {  
                        echo  "<script>alert('É preciso fazer login!');</script>";
                        unset($_SESSION['erro']);
                        //echo "<small>É preciso logar.</small>";
                    } else {
                        echo "<small>Erro.</small>";
                    }
                }
            ?>
        </div>

        <div class="mt-5">
            <a href="cadastrar.php"> Cadastrar novo usuário </a><br>
            <a href="redefinir.php"> Esqueceu sua senha? </a><br>
        </div>
    </div>

    
</body>

<script type="text/javascript" src="javascript.js"></script>
</html>
