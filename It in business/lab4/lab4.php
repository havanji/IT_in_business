<?php
echo ("4.1")."\n";

function invert($array){
    return -$array;
}

$array1 = [1, 2, 3, 4, 5];
$array2 = [1,-2, 3, -4, 5];
$array3 = [];
$arrayResult = array_map("invert", $array1);
print_r($arrayResult);



echo ("4.2")."\n";



echo ("4.3")."\n";



echo ("4.4")."\n";





