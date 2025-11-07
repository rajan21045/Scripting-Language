<!-- Write a program that swaps two numbers without using a third variable. -->
<?php
if(isset($_GET['num1']) && isset($_GET['num2'])){
    $a = $_GET['num1'];
    $b = $_GET['num2'];

    echo "<b>Before Swapping: </b><br>";
    echo "Number 1: $a <br>";
    echo "Number 2: $b <br><br>";

    // a=20 b=30
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "<b>After Swapping: </b><br>";
    echo "Number 1: $a <br>";
    echo "Number 2: $b <br>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#">
        <label for="num1">Enter An Number: </label>
        <input type="number" name="num1" id="num1" required>
        <br><br>

        <label for="num2">Enter Another Number: </label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <input type="submit" value="Swap Numbers">
        <br><br>

    </form>
</body>
</html>