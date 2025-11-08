PHP

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar</title>
</head>

<body>
    <h2>Sistema de login com cpf</h2>

    <form method="POST">
        <label>Digite seu CPF (apenas números): </label>
        <input type="text" name="cpf" minlength="11" maxlength="11" placeholder="Coloque seu cpf ">
        <br><br>
        <input type="submit" name="cadastrar" value="Cadastrar cpf">

    </form>
    <hr>
    <?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //conexao com banco de dados SQL
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $cpf = $_POST["cpf"];

        if (!ctype_digit($cpf) || strlen($cpf) != 11) {

            echo "<p> O CPF deve conter exatamente 11 números.</p>";
            exit;
        }

        //faz a conexaocom o banco de dados MySQL
        // Parametros: servidor,usuario,senha,nome do banco e porta
        $conn = new mysqli("127.0.0.1", "root", "aluno", "sistema", "3307");

        if ($conn->connect_error) {
            // se houver erro,encera o scipt e mostra a mensagem
            die("<p> Erro ao conectar: " . $conn->connect_error . "</p>");
        }

        //se o usuario clicou em "cadastrar"
        if (isset($_POST["cadastrar"])) {
            //cria o comando sql para inserir o cpf na tabela "usuarios"
            $sql = "INSERT INTO usuarios (cpf) VALUES ('$cpf')";

            if ($conn->query($sql) === TRUE) {
                echo "<p> CPF cadastrado com sucesso!</p>";
            } else {
                echo "<p> CPF ja cadastrado.</p>";
            }
        }

        $conn->close();
    }

    ?>

</body>

</html>