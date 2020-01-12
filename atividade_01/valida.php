<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Validação de Formulário</title>
    

        <?php
            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $email = $_POST['email'];
            //$confirma = $_POST['confirma'];

            ?>

        </head>
    <body>

        <div class = "envelopeValida">

            <p> <h4> <?php echo "Nome do usuário: " . $nome ?> </h4></p>
            <p> <h4> <?php echo "Data de nascimento: " . $data; ?> </h4></p>
            <p> <h4> <?php echo "E-mail: " . $email; ?> </h4></p>

                <form action = "principal.php">
                    <div class="envelopeBotoes">
                        <input type="submit" value="Voltar">
                    </div>

        </div>

        <script type="text/javascript" src="javascript.js"></script>

    </body>
</html>

