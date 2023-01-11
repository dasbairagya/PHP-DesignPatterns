<?php 

/*
create a string validation function
String minimum lenght is 4 and max is 20
Allow only alphanumeric and underscore only
    -stars with alphabet and not end with _
*/

function validate_pass($password)
{
    if(strlen($password) >= 4 && strlen($password) <= 25 ){
        echo "string length is >= 4 & <= 25 ".PHP_EOL;

        //check if the string start with numeric
        if(!is_numeric($password[0]) && ctype_upper($password[0])){

            //check if the ends with '_'
            if(!substr($password, -1) != "_"){
                echo "Match found!".PHP_EOL;
                return true;

            }
        }

    }
    
    return false;

}

function test_string_reg($password){
    echo "string Length => ".strlen($password).PHP_EOL;
    $regex = "/^[A-Z]\w{4,25}_+$/";

    if(preg_match($regex, $password)){
        echo "pattern matched!".PHP_EOL;
        return;
    }
    else{
        echo "pattern mis-matched!";
        return false;
    }
}

$password = 'AbcAdads211dsafER23dfads_';
test_string_reg($password);
validate_pass($password);
?>