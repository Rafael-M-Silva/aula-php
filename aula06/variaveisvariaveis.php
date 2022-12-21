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
   
    $curso = "cursoemvideo";
    $$curso = "cursoPHP";
    $$$curso = ["Aula01","Aula02","Aula03"];
    echo "$curso";
    echo "<br> $cursoemvideo";
    echo "<br> $cursoPHP[0]<br>$cursoPHP[1]<br>$cursoPHP[2]";
    ?>
    </div>
    
    <footer>
        <p>Site desenvolvido - <i>Rafael Mauricio</i> &copy;</p>
    </footer>
</body>
</html>