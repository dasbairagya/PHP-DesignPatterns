<?php 
// array_map()=>Return Value: This function returns an array containing all the elements of arr1 after applying the user function to each one.

function callback($val, $val1=null){
    if($val===$val1){
        return;
    }
    return $val;
}

$arr = ['name'=>'Gopal', 'email'=>'name@xyz.com'];
$arr1 = ['name'=>'Gopal', 'email'=>'name1@xyz.com'];
print_r(array_map('callback', $arr));
print_r(array_map('callback', $arr, $arr1));

?>