<!-- Check whether a number is even or odd. -->
 <?php
if(isset($_GET['num1'])){
    $num = $_GET['num1'];
    if($num % 2 == 0){
        echo "<b>$num is Even Number</b><br>";
    } else {
        echo "<b>$num is Odd Number</b><br>";
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
    
 <form action="#">
    <h4>CHECKER ODD EVEN</h4><br>
    <label for="num1">Enter The Number To Check: </label>
    <input type="number" name="num1" id="num1" required>
    <br><br>
    <input type="submit" value="Check Number">
    <br><br>
 </form>
 </body>
 </html>