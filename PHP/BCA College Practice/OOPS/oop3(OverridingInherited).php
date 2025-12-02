<?php
class Sasin{
    public $sname, $srollno, $sphone;

    public function _construct($sname, $srollno, $sphone){
    $this->sname =$sname;
    $this->srollno =$srollno;
    $this->sphone =$sphone;
    }
    
    public function display(){
        echo "Student Name is $this->sname, Roll No is $this->srollno, Phone No is $this->sphone";
    }
}

class Rajan extends Sasin{
    public function display(){
        echo "Student Name is $this->sname, Roll No is $this->srollno, Phone No is $this->sphone - This is from Rajan class";
    }
}

$rajan = new Rajan();
$rajan->sname = "Rajan";
$rajan->srollno = "101";
$rajan->sphone = "9876543210";
$rajan->display();
?>