<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
    <?php 
    $nome = isset($_GET["name"])?$_GET["name"] : "[nao foi encontrado]";
    $nasc = isset($_GET["anonas"])?$_GET["anonas"]: "[nao foi encontrado]";
    $sexo = $_GET["sexo"];


    $data = date("Y");
    $idade = $data-$nasc;
    if($idade == $data){
        $idade = "Não encontrado";
    };

    echo "<br>nome : $nome";
    echo "<br>idade : $idade";
    echo "<br>sexo : $sexo";
    ?>
    <a href="./formulario.html">Voltar</a>
    </div>
</body>
</html>