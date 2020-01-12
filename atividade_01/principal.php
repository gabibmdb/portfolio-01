<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Formulário</title>

	<body>

        <div class = "envelope">

            <h1>Formulário</h1>
        
            <form action="valida.php" method="POST">
                Nome: <input type="text" name="nome" id="nome"><br>
                Data: <input type="text" name="data"><br>
                E-mail: <input type="text" name="email" id="email1"><br>
                Confirme seu e-mail: <input type="text" name="email" onblur="confirmaEmail()" id="email2"><br>
                    <div class="envelopeBotoes">
                        <input type="submit" value="Enviar">
                    </div>
            </form>
            
        </div>
        
        <script type="text/javascript" src="javascript.js"></script>

	</body>
	
	</head>
</html>
