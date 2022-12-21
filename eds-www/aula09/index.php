<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
    <?php 
    echo "<h1> Aula 04 </h1>";
    $idade = 23;
    $nome = "Rafael Mauricio";
    $endereco = "Osasco";
    $anoatual = 2022;
    $anonascimento = $anoatual - $idade;
    
    echo "$nome <br> $idade anos <br> $endereco <br> nasceu em $anonascimento";
    ?>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>