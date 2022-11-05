<?php
class employee{
    public $Name;
    public $age;
    public $salary;

    public function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;

    }
    public function info(){
        echo "<h3>Employee Profile <h3> " . "<br>";
        echo "Name : " . $this->name . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "Salary" . $this->salary . "<br>"; 
    }
}

class manager extends employee{
    public $ta=2000;
    public $phone=500;
    public $totalSalary;

    public function info(){
        $this->totalSalary=$this->salary+$this->ta+$this->phone;

        echo "<h3>Manager Profile <h3> " . "<br>";
        echo "Name : " . $this->name . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "Salary" . $this->totalSalary . "<br>";
    }
}

$e1= new employee("Sabbir",25,20000);
$e2= new manager("Shakhawat",24,40000);


$e1->info();
$e2->info();
?>