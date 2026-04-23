<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;

        echo "O resultado da soma entre $n1 e $n2 é igual a $s";
        echo "<br/>A subtração entre $n1 e $n2 é igual a " . ($n1 - $n2);
        echo "<br/>A multiplicação entre $n1 e $n2 é igual a " . ($n1 * $n2);
        echo "<br/>A divisão entre $n1 e $n2 é igual a "
        . ($n1 / $n2);
        echo "<br/>O resto da divisão entre $n1 e $n2 é igual a "
        . ($n1 % $n2);
        echo "<br/>A potência de $n1 elevado a $n2 é igual a "
        . ($n1 ** $n2);
        echo "<br/>A raiz quadrada de $n1 é igual a "
        . sqrt($n1);
        echo "<br/>O valor absoluto de -7 é igual a "
        . abs(-7);
    ?>
</body>
</html>