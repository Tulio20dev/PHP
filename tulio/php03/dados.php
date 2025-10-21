<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(250, 160, 190)
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST ["nome"];
        $mamografia = $_POST ["mamografia"];
        $email = $_POST ["email"];
        $idade = $_POST ["idade"];

        echo "<h3>❤️ Dados Recebidos (POST)</H3>";
        echo "<p>Nome : $nome</P> <br>";
        echo "<p>Fez mamografia : $mamografia</P> <br>";
        echo "<p>Email de contato : $email</P> <br>";
        echo "<p>Numero para contato : $idade</p> <br>";

        echo "<h1>Parabéns pela iniciativa</h1>";
    
    }
    else {
        echo "<h1>A pagina foi acessada incorretamente</h1>";
        echo "<h2> por favor preencher o formulario</h2>";
        echo "<a href='post.php'> Formulario </a>";
    }
    ?>
</body>
</html>