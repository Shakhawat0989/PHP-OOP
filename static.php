<?php

class base{
    public static $name="Sabbir";
    public static $name1="Shakhawat";

    public static function show(){
        echo self::$name1 ." ";
    }
    public static function info(){
        echo self::$name;
    }
    public function __construct($n){
        self::$name=$n;
    }
   

 
}


//echo base::$name;

//base::show();

//$test=new base("Shakhawat");

base::show();
$test=new base("Hossain");
base::info();

 



?>