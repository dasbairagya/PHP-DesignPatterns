<?php
//#1.
// $data = ['a'=>'x', 'b'=>'y', 'c'=>'z'];
// $output = [
//     [0=>'a', 1=>'x'],
//     [0=>'b', 1=>'y'],
//     [0=>'c', 1=>'z'],
// ];
echo"-#-#-#-#-#-#-#-#-1-#-#-#-#-#-#-#-#-";
$data = ['a'=>'x', 'b'=>'y', 'c'=>'z'];
$output = [];
foreach($data as $key=>$value){
    $temp = [];
    $temp[] = $key;
    array_push($temp, $value);
    array_push($output, $temp);
}
print_r($output);

echo"-#-#-#-#-#-#-#-#-2-#-#-#-#-#-#-#-#-";
//#2. Find the maximum occurence of the elments

$arr = [1,1,1,2,2,3,3,3,3,4,55,5,5,6,6,3];
$arr1 = array_count_values($arr);
print_r($arr1);
asort($arr1);
print_r($arr1);
$keys = array_keys($arr1);
print_r($keys);
echo array_pop($keys);
echo"-#-#-#-#-#-#-#-#-3-#-#-#-#-#-#-#-#-";


$string = "Hello mama I'm good";
var_dump(strpos($string, 'mama'));
var_dump(str_contains('good', $string));
var_dump(ucfirst('good', $string));

#$str =  '082307'; 
#echo substr(chunk_split($str,2,':'),0,-1); #08:23:07


$path = 'www.example.com/public_html/index.php';
echo strrchr($path, "/");
$file_name = substr(strrchr($path, "/"), 1);
#echo $file_name."\n"; // "index.php" or you can user basename()     
   

$mailid  = 'rayy@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n"; #ravy

$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n"; #1 2 3 2 2 3 4 3


echo "#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#_#";

// $data = array(
//     data:[
//         key="ewdhgz", age=10,
//         key="ewdhgz", age=20,
//         key="ewdhgz", age=30,
//     ]
//     );

// $data = json_decode($data);
// print_r($data);


