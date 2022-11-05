<?php

include 'database.php';

$obj=new Database();



 $obj->update('students',['students_name'=>'Tusar','age'=>'20','city'=>'Dhakha'],'id="5"');
echo "update result is :";
print_r($obj->getresult());
?>