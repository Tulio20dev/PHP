<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //definindo duas variaveis
    $a = 19;
    $b = 15;
    echo "<h2>Operaçoes aritmeticas <h2>";
    // Operaçoes basicas
    echo 'soma a + b = '. ($a + $b) . "<br>";
    echo 'subtração a + b = '. ($a - $b) . "<br>";
    echo 'multiplacação a + b = '. ($a * $b) . "<br>";
    echo 'divisão a + b = '. ($a / $b) . "<br><br>";

    if ($a > $b) {
        echo "o valor de ($a) é maior que ($b).";
    }
    elseif ($b > $a) {
        echo "o valor de ($b) é maior que ($a)."; 
    }
    else {
        echo "os dois sao iguais." ;
    }
    //defini as variaveis
    $c = 7;
    $d = 9;
    //mostrar as operaçoes
    echo 'soma c + d = '. ($c + $d) . "<br>";
    echo 'subtração c + d = '. ($c - $d) . "<br>";
    echo 'multiplacação c + d = '. ($c * $d) . "<br>";
    echo 'divisão c + d = '. ($c / $d) . "<br><br>";

    if ($c/$d == 2){
        echo "a divisao é exatamente 2<br>";
    }
    elseif ($c/$d > 2){
        echo "a divisao é maior que 2<br>";
    }
    else{
        echo "a divisão é menor que 2<br>";
    }

    if ($c+$d == 2){
        echo "a soma é exatamente 2<br>";
    }
    elseif ($c+$d > 2){
        echo "a soma é maior que 2<br>";
    }
    else{
        echo "a soma é menor que 2<br>";
    }

    if ($c*$d == 2){
        echo "a multiplicação é exatamente 2<br>";
    }
    elseif ($c*$d > 2){
        echo "a multiplicação é maior que 2 <br>";
    }
    else{
        echo "a multiplacação é menor que 2<br>";
    }
    ?>
</body>
</html>