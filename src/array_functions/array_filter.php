<?php 
// array_filter() => Return Value: The function returns a filtered array.
function callBack($val){
    if($val%2 ==0)
        return true;
    else
        return false;
};

$arr = [1,3,5,7,4,8,2];

print_r(array_filter($arr, "callBack"));
//find the even numbers of an array is the best example

?>