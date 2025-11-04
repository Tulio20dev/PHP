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
    background-color: #00bcd4; 
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
    margin-top: 20px
}
    </style>
</head>
<body>
    <header><h1>Só Black consertos</h1></header>
    <?php 
        if(isset($_POST['nome_cliente'])){
            $nomeDOcliente = $_POST['nome_cliente'];
            $telefone = $_POST['telefone_contato'];
            $tipoDoAparelho = $_POST['tipo_do_aparelho'];
            $data = $_POST['data_preferida'];
            $descrição = $_POST['descrição'];

            $conn = mysqli_connect("localhost","root","aluno","conserto","3307");

            if ($conn -> connect_error) {
                die("<p style='color:red;'>Erro na conexão com  o banco de dados: ". $conn -> connect_error . "</p>");
        }
        
        $sql = "INSERT INTO conserto (nome,telefone,tipoDoAparelho,data,descrição)
                VALUES ('$nomeDOcliente','$telefone','$tipoDoAparelho','$data','$descrição')";


        if ($conn -> query($sql) === TRUE) {
            echo "<p><strong>Nome do cliente:</strong> $nomeDOcliente</p>";
            echo "<p><strong>Telefone :</strong> $telefone</p>";
            echo "<p><strong>Tipo de aparelho:</strong>$tipoDoAparelho</p>";
            echo "<p><strong>Data preferida:</strong>$data </p>";
            echo "<p><strong>Descrição do problema:</strong>$descrição </p>";
            echo "<p style='color:green; font-weight:bold;'>✅ Agendamento salvo com sucesso no banco de dados! </p><br>";
        } else {
            echo "<p style='color:red;'>❌ Erro ao salvar: " . $conn->error . "</p>";
        }
        
        $conn->close();
    }

    ?>
    <a href="index.php"> Voltar ao formulario</a>
    
    <main>
        <section>
            <article>
                <h1> Agendamento </h1>
                <p> Nome do cliente: <?php echo $nomeDOcliente ?> </p>
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
    <footer><span> feito por Gabriel, Marco Túlio, Emanuelly e João Pedro</span></footer>
</body>
</html>