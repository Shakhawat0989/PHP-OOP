<?php

class base{
    private $first_name;
    private $last_name;

    public function hello(){
        echo $this->first_name;
        echo $this->last_name;
    }

    private function setName($fname, $lname){
        $this->first_name=$fname;
        $this->last_name=$lname;
    }
    

    public function __call($method, $argu){
        if(method_exists($this,$method)){
            call_user_func_array([$this,$method],$argu);
        }
        else{
            echo "Method dose not exist";
        }
    }

}

$test=new base();
$test->setName("Shakhawat","Sabbir");
$test->hello();

?>