<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form</title>
</head>
<body>
    <form action="superglobalvariable.php" method="get">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Unknown';
    $age = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : 'Unknown';
    echo "your name is " . $name . " and your age is " . $age . ".";
}
?>