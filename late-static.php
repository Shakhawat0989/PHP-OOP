<?php

class base{
    protected static $name = "Sabbir";

    public static function show(){
        echo static::$name;
        echo self::$name;
    }
}

class derived extends base{
    protected static $name = "Shakhawat  ";
}

$test=new derived();
$test->show();

?>