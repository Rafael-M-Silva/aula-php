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

    $valor1 = $_GET["x"];
    $valor2 = $_GET["y"];

    echo "Valor $valor1 e $valor2";
    echo "<br> Valor absoluto de $valor2 é : ". abs($valor2);
    echo "<br> O valor de $valor1<sup>$valor2</sup> é : ".pow($valor1, $valor2);
    echo "<br> A raiz quadrada de $valor1 é : ". sqrt($valor1);
    echo "<br> O valor arredondado de $valor1 é : ". round($valor1);
    echo "<br> Parte inteira de $valor1 é : ". intval($valor1);
    echo "<br> formatação de numeros: valor $valor1 é : ". number_format($valor1, 2);
    ?>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>