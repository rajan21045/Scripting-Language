<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest</title>
</head>
<body>
   <?php

   if($_SERVER['REQUEST_METHOD']=='POST'){
        $prin = floatval($_POST['principal']);
        $t = floatval($_POST['time']);
        $r = floatval($_POST['rate']);
        $si = ($prin * $t * $r)/100;
        echo "<b>Simple Interest of Principal Amount: $prin with rate of interest $r for time $t years is: $si</b>";
   }

   else{
   ?>
   <form action="simple_interest.php" method="POST">
    <label for="principle">Principal: </label>
    <input type="number" id="principal" name="principal" ><br>
    <br>
    <label for="time">Time: </label>
    <input type="number" name="time" id="time"> <br><br>
    <label for="rate">Rate: </label>
    <input type="number" name="rate" id="rate"><br><br>
    <input type="Submit" value="Calculate SI">
    <input type="reset" value="Cancel"><br>
   </form>

   <?php
   }
   ?>
</body>
</html>