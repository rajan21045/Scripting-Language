<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $number1 = intval($_POST['num1']);
        for($i=1; $i<=10; $i++ ){
            $mul = $number1 * $i;
            echo "$number1 * $i is $mul<br>";
        }
    }
else{
    ?>

    <form action="#" method="post">
        <label for="num1">NUmber: </label>
        <input type="number" name="num1" id="num1"><br><br>
        <input type="submit" value="Multiple Table">
        <br>
    </form>
    <?php

}
?>
</body>
</html>