<?php


class Fruit{
    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_info(){
        echo "The fruit is $this->name and the color is $this->color";
    }
}


class StrawBerry extends Fruit{
    function message(){
        echo "Am I A Strawberry";
    }
}

$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
echo "<br>";
$strawberry->get_info();

?>