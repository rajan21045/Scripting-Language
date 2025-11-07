<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Unknown';
    $age = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : 'Unknown';
    echo "your name is " . $name . " and your age is " . $age . ".";
}
?>