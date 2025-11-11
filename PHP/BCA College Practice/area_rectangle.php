<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $length =intval($_POST['length']);
        $breadth = intval($_POST['breadth']);
        $area = $length * $breadth;
        echo"<b>Area of Rectangle of length $length and Breadth $breadth is $area</b>";
    }
    else{
    ?>
    <form action="#" method="post">
        <label for="length">Length: </label>
        <input type="number" name="length" id="length"><br><br>
        <label for="breadth">Breadth: </label>
        <input type="number" name="breadth" id="breadth"><br><br>
        <input type="submit" value="Area Of Rectangle">
        <input type="reset" value="Cancel">
    </form>
    <?php
    }
    ?>
</body>
</html>