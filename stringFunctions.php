<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nam = "hello world quick"; 
        echo strtoupper($nam)."<br>"; # HELLO WORLD QUICK
        echo strtolower($nam)."<br>"; # hello world quick
        echo ucfirst($nam)."<br>"; # Hello world quick
        echo ucwords($nam)."<br>"; # Hello World Quick
        echo strstr($nam,"ll")."<br>"; # llo world quick
        echo str_replace("quick","super fast",$nam)."<br>"; # hello world super fast
        echo str_repeat($nam,2)."<br>"; # hello world quickhello world quick
        echo substr($nam,5,10)."<br>"; # world qui
        echo strchr($nam,"o")."<br>"; # o world quick
        replace("_"," ",$nam);
    ?>
</body>
</html>
