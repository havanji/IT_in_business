<?php
echo ("4.1")."\n";

function invert($array){
    return array_map(function ($n){
        return $n * -1;
    }, $array);
}

$array1 = [1, 2, 3, 4, 5];
$array2 = [1,-2, 3, -4, 5];
$array3 = [];
print_r(invert($array1));
print_r(invert($array2));
print_r(invert($array3));

echo ("4.2")."\n";

$array4 = [[ 0, 1, 2, 3, 4 ],
         [ 10,11,12,13,14 ],
         [ 20,21,22,23,24 ],
         [ 30,31,32,33,34 ]];

function toCSV($array){
    return implode("\n", array_map(function($el){
        return implode(",", $el);
    }, $array));
}

print_r(toCSV($array4));

echo ("4.3")."\n";

$array5 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

function countPosSumNeg($array){
    if(empty($array)){return [];}

    $positive = 0;
    $negative = 0;

    foreach ($array as $i) {
        if ($i > 0){
            $positive += 1;
        } else{
          $negative += $i;
        }
    }

    return[$positive, $negative];
}

print_r(countPosSumNeg($array5));

echo ("4.4")."\n";

$array1 = [1, 2, 3, 4, 5];
$array2 = [1,-2, 3, -4, 5];
$array3 = [];
function average($array){
    if(empty($array)){
        return [0];
    }else{
        $average = array_sum($array)/count($array);
        return $average."\n";
    }
};

print_r(average($array1));
print_r(average($array2));
print_r(average($array3));








