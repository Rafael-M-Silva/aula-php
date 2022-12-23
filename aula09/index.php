<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
    <?php 
    echo "<h1> Aula 09 </h1>";

    $nascimento = isset($_GET["num"]) ? $_GET["num"] : "1900";
    $data = date("Y");
    $idade = $data - $nascimento;
    if($idade < 16){
        $votar = "Você tem $idade anos e não pode votar";
        $dirigir =  "e não pode dirigir";
    }else if($idade >= 16 && $idade < 18 || $idade > 65){
        $votar = "Voce tem $idade anos e seu voto é opcional";
        $dirigir = "e não pode dirigir";
        if($idade > 65){
            $dirigir = "e pode dirigir";
        };
    }else{
        $votar = "Voce tem $idade anos e é obrigado a votar";
        $dirigir = "e pode dirigir";
    };

    echo "$votar $dirigir";

    ?>
    <a href="./index.html">Voltar</a>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>