<?php

interface Animal{
    public function makeSound();

}


class Dog implements Animal{
    public function makeSound(){
        return "Woof Woof";
    }
}

class Cat implements Animal{
    public function makeSound(){
        return "Meow Meow";
    }
}


$dog = new Dog();
echo $dog->makeSound();
echo "<br>";
$cat = new Cat();
echo $cat->makeSound();
?>