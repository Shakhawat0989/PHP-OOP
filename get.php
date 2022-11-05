<?php

class base{
    private $data=["name"=>"Sabbir"];

    public function __get($key){
        if(array_key_exists($key,$this->data)){
            return $this->data[$key];
        }
        else{
            return "this key($key)is not defined";
        }
    }
}
$test = new base();
echo $test->name;

?>