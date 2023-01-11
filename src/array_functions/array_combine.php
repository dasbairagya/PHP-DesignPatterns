<?php
$arr1 = ['name'=>'std1', 'email'=>'std1@xyz.com','roll'=>1];
$arr2 = ['name'=>'std2', 'email'=>'std2@xyz.com','roll'=>2];
print_r(array_combine($arr1,$arr2));

/*Array
(
    [std1] => std2
    [std1@xyz.com] => std2@xyz.com
    [1] => 2
)
*/

$arr1 = ['name', 'email', 'roll'];
$arr2 = ['gopal', 'gopal@gmail.com', '1'];
print_r(array_combine($arr1,$arr2));
/*Array
(
    [name] => gopal
    [email] => gopal@gmail.com
    [roll] => 1
)
*/
