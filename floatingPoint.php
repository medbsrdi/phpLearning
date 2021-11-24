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
        echo abs(0-300)."<br>";
        echo pow(2,8)."<br>";
        echo sqrt(100)."<br>";
        echo fmod(20,7)."<br>";
        echo rand()."<br>";
        echo rand(1,10)."<br>";
        echo 1+"1";

        echo $float = 3.14;
        echo (4/3)."<br>"; #1.3333
        echo round($float,1)."<br>";  #3.1
        echo ceil($float)."<br>"; #4
        echo floor($float); #3

        // echo is_integer(1);
        // echo is_float(0.3);
    ?>
</body>
</html>
