<?php

class base{
    public function __construct(){
        echo "This is construct function<br>";
    }
    public function hello(){
        echo " Hello Everyone <br>";
    }

    public function __destruct(){
        echo "This is destruct function";
    }
}

$test =new base();
$test->hello();

?>