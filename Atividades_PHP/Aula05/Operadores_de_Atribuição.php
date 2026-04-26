<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $p = 100;
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ".number_format($preco, 2)."<br>";
        $preco += $preco * 10 / 100; // Aumenta o preço em 10%
        echo "O preço do produto com 10% de aumento é R$ ".number_format($preco, 2)."<br>";
        $preco -= $preco * 10 / 100; // Diminui o preço em 10%
        echo "O preço do produto com 10% de desconto é R$ ".number_format($preco, 2)."<br>";

        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é ".--$atual."<br>";
        echo "O ano atual é $atual e o ano posterior é ".++$atual."<br>";

        $n = $_GET["n"];
        echo "O valor de n antes da incrementação é $n<br>";
        echo "O valor de n depois da incrementação é ".($n++)."<br>";

        $n = $_GET["n"];
        echo "O valor de n antes da decrementação é $n<br>";
        echo "O valor de n depois da decrementação é ".($n--)."<br>";

        $n = $_GET["n"];
        echo "O valor de n antes da incrementação de 2 em 2 é $n<br>";
        echo "O valor de n depois da incrementação de 2 em 2 é ".($n+=2)."<br>";
    ?>
</body>
</html>