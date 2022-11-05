<?php

trait hello{
    public function sayhello(){
        echo "Hello everyone <br>";
    }
}
trait hi{
    private function sayhello(){
        echo "Hi everyone";
    }
}

class base{
    use hello, hi{
        hello::sayhello insteadOf hi;
        hi::sayhello as public newhello;
    }
}

$test=new base();
$test->sayhello();
$test->newhello();

?>