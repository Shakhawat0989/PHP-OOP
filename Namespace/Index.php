<?php

require 'first.php';
require 'second.php';

public function wow(){
    echo "this function from index file";
}

$run = new first\product();
$no = new second\famous();

first\wow();

?>