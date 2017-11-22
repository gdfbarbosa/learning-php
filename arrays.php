<?php
// create empty array
$array = array();
$another_array = array("apple", "orange", "barbosa");
// insert item
array_push($array, "apple", "raspberry", "banana", "orange");
// print arrays
print_r($array);
print_r($another_array);
echo "Comparing array \$array with \$another_array: ";
$diff = array_diff($another_array, $array);
// print diff between arrays
print_r($diff);
echo "remove an item from the beginning (array_shift): ".array_shift($array)."\n";
// print array
print_r($array);
echo "remove an item from the end (array_pop): ".array_pop($array)."\n";
// print array
print_r($array);
?>
