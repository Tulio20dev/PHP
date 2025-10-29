<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pruduto</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header> <h1>Só Black consertos</h1></header>
    <main>
        <section>
            <form action="produto.php" method="post">  
                <label for="nome_produto">Nome do Produto</label>
                <input type="text" name="nome_produto">
                <label for="telefone_contato">Telefone Para Contato</label>
                <input type="tel" name="telefone_contato" required>
                <label for="tipo_do_aparelho"> Tipo Do Seu Aparelho</label>
                <select name="tipo_do_aparelho" required>
                    <option value="Geladeira">Geladeira</option>
                    <option value="Micro_Ondas">micros ondas</option>
                    <option value="fogão">fogão</option>
                    <option value="Maquina_de_Lavar">Maquina de Lavar</option>
                </select>
                <label for="data_preferida"> Data do atedimento </label>
                <input type="date" name="data_preferida" required>
                <label for="descrição"> descrição</label>
                <textarea name="descrição" required></textarea>
                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>
    <footer>
        <span> feito por Gabriel,Marco Túlio e Emanuelly</span>
    </footer>
</body>
</html>