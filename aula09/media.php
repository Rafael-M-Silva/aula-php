<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
        <?php 
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2) / 2;
        if($media < 5){
            $resultado = "REPROVADO!";
        }else if($media >= 5 & $media < 7){
            $resultado = "de RECUPERAÇÃO!";
        }else{
            $resultado = "APROVADO!";
        };

        echo "A média entre $nota1 e $nota2 é igual a $media<br>";
        echo "Você está $resultado"; 
        ?>
    <a href="./media.html">Voltar</a>
    </div>
</body>
</html>