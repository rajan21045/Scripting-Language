<!-- Write a script to calculate the factorial of a given number. -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $number = $_POST['num1'];
  $result = factorial($number);
  echo "Factorial of $number is: $result";
}

function factorial($number){
        if($number < 0){
            echo "Number must be non-negative.";
        } else if ($number ==1){
            return 1;
        } else {
            return factorial($number -1)* $number;
        }
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
    <form action="#" method="POST">
        <label for="num1">Enter The Number To Find The Factorial: </label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <input type="submit" value="Find Factorial">
        <br><br>

    </form>
 </body>
 </html>