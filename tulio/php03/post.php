<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(250, 160, 190);
        }
        img{
            margin-left: auto;
            width: auto;
            display: flex;
        }
        .c{
            display:flex;
            
        }
    </style>
</head>
<body>
    <h2>Formulario outubro rosa ❤️</h2>
    
    <div class="c">
        <form action="dados.php" method="post">
            <label>nome:</label><br>
            <input type="text" name="nome" required><br><br>

            <label >Por gentileza coloque seu email : </label><br>
            <input type="email" name="email" required><br>

            <label>Qual sua idade? : </label><br>
            <input type="number" name="idade" required><br>

            <label>Ja realizou o exame de mamografia esse ano?</label><br>
            <input type="radio" name="mamografia" value="sim" required> sim <br>
            <input type="radio" name="mamografia" value="nao" required> nao <br><br>

            <input type="submit" value="enviar">

        </form>
        <img src="img/img.jpeg" alt="Se cuidem">
        </div>
</body>
</html>