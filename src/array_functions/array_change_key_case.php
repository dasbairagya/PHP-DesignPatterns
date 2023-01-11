<?php
$student = ['name'=>'std1', 'Email'=>'std1@mail.com','ROLL'=>04];
print_r(array_change_key_case($student, CASE_UPPER));
print_r(array_change_key_case($student, CASE_LOWER));