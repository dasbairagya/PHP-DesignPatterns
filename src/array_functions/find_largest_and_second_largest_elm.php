<?php 
$arr = [1,40,2,80,100,3,99,10];

//#1. sort the elm in assending order
array_multisort($arr);
print_r($arr);

//#2. pop the last elm
$largestElm = array_pop($arr);
print_r($arr);

//#3. pop the last elm again
$secondLargestElm = array_pop($arr);
print_r($arr);

echo "largest elm => $largestElm and second largest element => $secondLargestElm";



?>
