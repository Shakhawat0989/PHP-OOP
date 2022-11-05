<?php

include 'database.php';

$obj=new Database();

$obj->insert('students',['students_name'=>'Nishan','age'=>'20','city'=>'Dhakha']);
echo "Insert result is :";
print_r($obj->getresult());

?>