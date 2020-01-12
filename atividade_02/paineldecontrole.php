<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Painel de Controle</title>
</head>

<?php 
    session_start();

    if ($_SESSION['logou'] == 1) {
        unset($_SESSION['logou']);
        unset($_SESSION['erro']);
    } 

    else {
        $_SESSION['erro'] = 2;
        header('location: projeto2.php');
    }
?>

<body>

    <div class="formulario">
        <h2>Bem-vindo(a)!</h2>

        <button type="button" class="btn btn-dark" onclick="window.location.href='projeto2.php'">Voltar</button>
    </div>

</body>
</html>