<?php
class base{
    public $num;

    public function calc($a,$b){
        return $a*$b . "<br>";
    }
}
class derived extends base{
    public $num;

    public function calc($a,$b){
        return $a+$b;
    }
}

$test= new base();
echo $test->calc(5,10);
$test= new derived();
echo $test->calc(5,10);
?>