<?php
class Student{
        public $sname, $sphone, $sgender, $sage, $scourse;
    function __construct($sname, $sphone, $sgender, $sage, $scourse)
    {
        $this->sname = $sname;
        $this->sphone = $sphone;
        $this->sgender = $sgender;
        $this->sage = $sage;
        $this->scourse = $scourse;
    }

    function __destruct()
    {
        echo "The Student name is $this->sname, phone number is $this->sphone, gender is $this->sgender, age is $this->sage, Course Is $this->scourse";
    }
}

$rajan = new Student("Rajan", "9876543210", "Male", 21, "BCA");


?>