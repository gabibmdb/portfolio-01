<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

    <?php
        session_start();
    ?>

<body>
    <div class="formulario">
        <form method="POST" action="cadastrarUsuario.php">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="form-group">
                <label for="senha2">Confirme sua senha</label>
                <input type="password" class="form-control" name="senha2" id="senha2">
            </div>
            <button type="submit" class="btn btn-dark" onclick='confirmaSenha()'>Submit</button>
            <button type="button" class="btn btn-dark" onclick="window.location.href='projeto3.php'">Voltar</button>
        </form>
        
    </div>




</body>

<script type="text/javascript" src="javascript.js"></script>
</html>
