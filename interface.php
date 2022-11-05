<?php
interface parent1{
    function sum($a, $b);
}

interface parent2{
    function sub($c, $d);
}

interface parent3{
    function mul($e, $f);
}

interface parent4{
    function div($x, $y);
}

class calc implements parent1, parent2, parent3, parent4{
    public function sum($a, $b){
        echo $a+$b . "<br>";
    }

    public function sub($a, $b){
        echo $a-$b . "<br>";
    }

    public function mul($a, $b){
        echo $a*$b . "<br>";
    }

    public function div($a, $b){
        echo $a/$b . "<br>";
    }
}

$test = new calc();

$test->sum(15,10);
$test->sub(15,10);
$test->mul(15,10);
$test->div(15,10);

?>