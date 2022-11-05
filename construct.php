<?php
class person{
    public $name;
    public $age;

    function __construct($name="No name", $age=0){
        $this->name=$name;
        $this->age=$age;
    }
    function show(){
        echo $this->name . " - " . $this->age . "<br>";
    }
}

$p1= new person("Sabbir",25);
$p2= new person("Shakhawat",24);
$p3= new person();

$p1->show();
$p2->show();
$p3->show();

?>