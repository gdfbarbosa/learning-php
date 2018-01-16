<?php

$array = array();
array_push($array, "apple");
array_push($array, "orange");
array_push($array, "banana");

var_dump($array);

print_r(array_shift($array)."\n");

print_r(array_pop($array)."\n");

?>
