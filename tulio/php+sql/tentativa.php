<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar</title>
</head>

<body>
    <h2>Sistema de login com CPF</h2>

    <form method="POST">
        <label>Digite seu CPF (apenas números): </label>
        <input type="text" name="cpf" minlength="11" maxlength="11" placeholder="Coloque seu CPF">
        <br><br>
        <input type="submit" name="cadastrar" value="Cadastrar CPF">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cpf = $_POST["cpf"];

        // 🔹 1. Validação do CPF antes de tentar cadastrar
        if (!ctype_digit($cpf) || strlen($cpf) != 11) {
            echo "<p>O CPF deve conter exatamente 11 números.</p>";
            exit;
        }

        // 🔹 2. Tudo que envolve banco de dados fica dentro do try
        try {
            // Ativa exceções do MySQLi
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            // Conecta ao banco
            $conn = new mysqli("127.0.0.1", "root", "aluno", "sistema", "3307");
            $conn->set_charset("utf8mb4");

            if (isset($_POST["cadastrar"])) {
                // Usa prepared statement (evita SQL injection)
                $stmt = $conn->prepare("INSERT INTO usuarios (cpf) VALUES (?)");
                $stmt->bind_param("s", $cpf);
                $stmt->execute();

                echo "<p>CPF cadastrado com sucesso!</p>";
            }

            $conn->close();

        } catch (mysqli_sql_exception $e) {
            // 🔹 3. Tratamento dos erros do banco
            if ($e->getCode() == 1062) {
                echo "<p>CPF já cadastrado.</p>";
            } else {
                echo "<p>Erro no banco de dados: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
        }
    }
    ?>
</body>
</html>
