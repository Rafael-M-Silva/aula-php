<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
    <?php 
    echo "<h1> Aula 06 </h1>";
   
    $preco = $_GET["preco"];
    $desconto = $_GET["desconto"];
    $final = $preco - (($desconto / 100) * $preco);
    echo "O valor do produto é : R$". number_format($preco, 2, ",", ".");
    echo "<br> Desconto de $desconto%";
    echo "<br> Preço final : R$$final";
    ?>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>