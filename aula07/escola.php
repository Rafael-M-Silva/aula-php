<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
    <?php 
    echo "<h1> Aula 07 </h1>";

    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $media = ($nota1 + $nota2) / 2;
    $resultado = ($media < 7)? "REPROVADO" : "APROVADO";
    echo "A média do aluno foi $media é ele está $resultado";
    
    ?>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>