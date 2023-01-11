<?php 
//get the values of specific column name indexed by id
$employee = [
    ['id'=>1, 'name'=>'Emp1', "roll"=>3],
    ['id'=>2, 'name'=>'Emp2', "roll"=>2],
    ['id'=>3, 'name'=>'Emp3', "roll"=>1],

];
print_r(array_column($employee, 'roll', 'id')); //you can indexed by name also

?>