<?php
include 'database.php';

$obj = new database();
$obj->select('students', '*',null,null,null,null);
echo "Select result is :";
print_r($obj->getResult());

/* $obj->sql('SELECT * FROM students WHERE age = "25"');
echo "Sql result is :";
print_r($obj->getReasult()); */
?>