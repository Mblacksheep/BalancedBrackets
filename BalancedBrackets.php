<?php

$string = "[](){}";
$brackets = ["[]", "{}", "()"];

if(strlen($string)%2 || $string == null){
    echo "String is not valid.";
} else{
    $count = true;
    while($count){
        $string = str_replace($brackets, "", $string, $count);
    }
    if(strlen($string) == 0){
        echo "String is valid";
    } else {
        echo "String is not valid";
    }
}