<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produto</title>
    <style>
        body {
    background-color: #000;
    color: #00bcd4;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh; 
}

header h1{
    text-align: center;
    padding: 20px 0;
    color: white;

}

main {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 20px;
}

section {
    width: 100%;
    max-width: 600px;
    background-color: #1a1a1a; 
    padding: 30px;
    border-radius: 8px; 
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

article h1 {
    color: #00bcd4; 
    border-bottom: 2px solid #00bcd4;
    padding-bottom: 10px;
    margin-bottom: 20px;
    text-align: center;
}

article p, article div {
    margin-bottom: 15px;
    line-height: 1.6;
    color: white;
}

article span {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #ccc; 
}
div p {
    background-color: #333;
    padding: 10px;
    border-radius: 4px;
   
}

a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 15px;
    background-color: #ffffffff; 
    color: #000; 
    text-decoration: none; 
    border-radius: 5px;
    font-weight: bold;
}

.hover {
    background-color: #f7fafaff; 
}

footer span {
    font-style: italic;
}
    </style>
</head>
<body>
    <?php 
        if(isset($_POST['nome_produto'])){
            $nomeDOProduto = $_POST['nome_produto'];
            $telefone = $_POST['telefone_contato'];
            $tipoDoAparelho = $_POST['tipo_do_aparelho'];
            $data = $_POST['data_preferida'];
            $descrição = $_POST['descrição'];
        }

    ?>
    <header><h1>Só Black consertos</h1></header>
    <main>
        <section>
            <article>
                <h1> Agendamento </h1>
                <p> Produto: <?php echo $nomeDOProduto ?> </p>
                <p> Telefone do cliente: <?php echo $telefone?></p>
                <p>tipo de aparelho: <?php echo $tipoDoAparelho ?></p>
                <p>melhor data pra o cliente: <?php echo $data ?></p>
                <div>
                    <span> descrição </span>
                    <p><?php echo $descrição ?></p>
                </div>
                <a href="index.php"> Voltar Para a Pagina Inical</a>
            </article>
        </section>
    </main>
    <footer><span> feito por Gabriel, Marco Túlio e Emanuelly </span></footer>
</body>
</html>