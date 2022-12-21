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
   
    $num1 = 3;
    $num2 = &$num1;
    $num2 += 5; 
    echo "A variavel N1 é $num1 e variavel N2 é $num2";
    ?>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>