<?php
abstract class parentclass{
    protected $name;

    abstract protected function calc($a, $b);

}

class childclass extends parentclass{
    public function calc($c, $d){
        echo $c + $d;
    }
}

$test = new childclass();
$test->calc(10,20);

?>