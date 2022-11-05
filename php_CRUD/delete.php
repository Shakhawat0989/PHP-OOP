<?php

include 'database.php';

$obj=new Database();

$obj->delete('students','id="2"');
echo "Delete result is :";
print_r($obj->getresult());

?>