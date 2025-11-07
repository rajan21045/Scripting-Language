<?php
    $pageTitle = "Practical Page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    
    <?php
    $x =10;
    $y =20;
    $sum = $x + $y;
    echo "<b>$x + $y = $sum</b><br>";

    echo "<b>HI WORLD THIS IS $pageTitle</b><br>";

    $name = "Alice";
    echo "Hello, $name! Welcome to the practical PHP page.";

        $i =1;
        echo "<br>";
        while($i<=5){
            echo "<br>$i. Hi Sasin Handsome<br>   ";
            $i++;
        }

    ?>
</body>
</html>