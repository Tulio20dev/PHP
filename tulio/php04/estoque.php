<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgba(190, 188, 189, 1)
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST ["nome"];
        $categoria = $_POST ["categoria"];
        $preço = $_POST ["preço"];
        $estoque = $_POST ["estoque"];

        echo "<h3> ESTOQUE (POST)</H3>";
        echo "<p>Nome : $nome</P> <br>";
        echo "<p>categoria : $categoria</P> <br>";
        echo "<p>preço : $preço</P> <br>";
        echo "<p>estoque : $estoque</p> <br>";;
    }  
    if (isset($_GET["campanha"]) && isset($_GET["versao"])) {
        $campanha = $_GET ['campanha'];
        $versao = $_GET ['versao'];

        echo "<h3> ESTOQUE (GET)</H3>";
        echo "<p>campanha : $campanha <p>";
        echo "<p>versao :  $versao <p>";

    }
    
    ?>
</body>
</html>