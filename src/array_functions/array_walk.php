<?php 
// array_walk() => Return Value: This function returns a boolean value. It returns TRUE on success or FALSE on failure.
$arr = array(
    "a" => "yellow", 
    "b" => "pink", 
    "c" => "purple"
);
print_r(array_walk($arr, 'myfunction'));

function myfunction($value, $key){
    echo "$key => $value";
}

 ?>