<!-- Merge two arrays and sort them alphabetically. -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $arr1 = array();
    $arr2 = array();
    $elem1 = $_POST['element1'];
    $elem2 = $_POST['element2'];
    $elem3 = $_POST['element3'];
    $elem4 = $_POST['element4'];
    array_push($arr1, $elem1, $elem3);
    array_push($arr2, $elem2, $elem4);

    $mergedarray = array_merge($arr1, $arr2);
    sort($mergedarray);
    echo "Merged and Sorted Array: <br>";
    foreach($mergedarray as $value){
        echo $value . "<br>";
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
   <form action="#" method="post">
    <label for="element1">Enter Element First: </label>
    <input type="text" name="element1" id="element1" required>
    <br><br>
    <label for="element2">Enter Element Second: </label>
    <input type="text" name="element2" id="element2" required>
    <br><br>
    <label for="element3">Enter Element Third: </label>
    <input type="text" name="element3" id="element3" required>
    <br><br>
    <label for="element4">Enter Element Fourth: </label>
    <input type="text" name="element4" id="element4" required>
    <br><br>
    <input type="submit" value="Merge and Sort Arrays">
    <br><br>
   </form> 
</body>
</html>