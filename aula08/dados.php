<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div>
        <?php 
        $valor = $_GET["n"];
        $calculo = sqrt($valor);
        echo "A raiz quadrada de $valor é: ".number_format($calculo,"2");
         ?>
        <a href="./index.html">voltar</a>
    </div>

    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>

</html>