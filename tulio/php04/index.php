<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
    <style>
        body{
            background-color: #252424ff;
            color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            background-image:url(img/black-friday-me.webp);
            background-repeat: no-repeat;
            background-size: 100%;
            background: center;
        }
    </style>
</head>
<body>
    <h2>Campanha Black friday 🛒</h2>
    
    <div class="c">
        <form action="estoque.php?campanha=Blackfriday&versao=01" method="POST">
            <label>nome :</label><br>
            <input type="text" name="nome" required><br><br>

            <label >categoria : </label><br>
            <input type="text" name="categoria" required><br><br>

            <label>Preço : </label><br>
            <input type="number" name="preço" required><br><br>

            <label>Quantidade em estoque :</label><br><br>
            <input type="number" name="estoque"><br><br>

            <input type="submit" value="enviar"><br>
        
        </form>
        
        </div>
    
    
</body>
</html>