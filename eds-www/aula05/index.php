<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
    <?php 
    echo "<h1> Aula 05 </h1>";

    $num1 = 3;
    $num2 = 2;
    $soma = $num1 + $num2;
    $media = ($num1 + $num2) / 2;

    echo "Primeiro valor: $num1 <br> Segundo valor: $num2 <br>";

    echo "A soma vale: $soma";
    echo "<br> A soma vale: ". ($num1 + $num2);

    echo "<br> A divisão vale: ". ($num1 / $num2);
    echo "<br> A multiplicação vale: ". ($num1 * $num2);
    echo "<br> A subtração vale: ". ($num1 - $num2);
    echo "<br> O resto da divisão vale: ". ($num1 % $num2);
    echo "<br> A média vale: $media"
    ?>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>