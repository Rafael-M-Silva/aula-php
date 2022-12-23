<!DOCTYPE html>
<html lang="en">
<head>
        <?php 
        $text = isset($_GET["text"])?$_GET["text"]:"Texto";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["color"])?$_GET["color"]:"#000000";
        ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .cor{
    font-size: <?php echo $tam; ?>;
    color: <?php echo $cor ?>;
}
</style>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    </body>

    <div class="cor">
    <?php 
        echo"$text";
     ?>
    </div>
    </html>