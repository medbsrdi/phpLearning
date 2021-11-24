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
        $numbers = array(1,2,3,4,5,3);
        echo count($numbers); echo "<br>";
        echo max($numbers); echo "<br>";
        echo min($numbers); echo "<br>";
        sort($numbers); print_r($numbers); echo "<br>"; // 1 2 3 3 4 5 
        rsort($numbers); print_r($numbers); echo "<br>"; // 5 4 3 3 2 1 
        echo $num_string = implode(" * ",$numbers); // 5 * 4 * 3 * 2 * 1
    ?>
</body>
</html>
