<?php
    class Fruit{
        public $name, $color;
        function set_pro($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function get_name_color(){
            echo "Fruits\n Name: $this->name and Color Is $this->color<br>";
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_pro("Apple", "Red");
    $banana->set_pro("Banana", "Yellow");
    $apple->get_name_color();
        echo "<br>";
    $banana->get_name_color();
?>