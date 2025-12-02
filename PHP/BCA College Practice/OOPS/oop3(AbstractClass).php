<?php
abstract class Car{
    public $name;
    public function __construct($name){
    $this->name = $name;
    }
  abstract public function intro() : string;


}
class Rajann extends Car{
    public function intro(): string{
        return "My car is a $this->name";
    }
}

class Sasinn extends Car{
    public function intro(): string{
        return "My car is a $this->name";
    }
}


$r = new Rajann("BMW");
echo $r->intro();
echo "<br>";
$s= new Sasinn("Audi");
echo $s->intro();


?>