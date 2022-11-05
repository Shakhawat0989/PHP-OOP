<?php

trait hello{

    public function sayhello(){
        echo "Hello Everyone <br>";
    }

    public function sayhi(){
        echo "Hi Everyone <br>";
    }
}
trait bye{

    public function byebye(){
        echo "Bye Bye Everyone <br>";
    }
    public function seeyou(){
        echo "See You Later";
    }
}

class base{
    use hello, bye;
}

$test=new base();
$test->sayhello();
$test->byebye();
$test->sayhi();
$test->seeyou();

?>