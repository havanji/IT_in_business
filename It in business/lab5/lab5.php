<?php
echo ("5.1")."\n";

$symbols1 = "8 j 8 mBliB8g imjB8B8 jl B";
$symbols2 = "8 8 Bi fk8h B 8 BB8B B B B888 c hl8 BhB fd";
$symbols3 = "8aaaaa dddd r ";
function removeSpace(string $symbols): string{
    return str_replace(" ", '', $symbols)."\n";
}

printf(removeSpace($symbols1));
printf(removeSpace($symbols2));
printf(removeSpace($symbols3));

echo ("5.2")."\n";

function intString(int $n, string $s){
    return str_repeat($s, $n)."\n";
}

printf(intString(6, "I"));
printf(intString(5, "Hello"));

echo ("5.3")."\n";

$name1 = "riley";
$name2 = "Jack";
function helloName($name){
    return "Hello " . ucfirst($name) . "!"."\n";
}

printf(helloName($name1));
printf(helloName($name2));

echo ("5.4")."\n";

$reverse1 = "This is an example!";
$reverse2 = "double spaces";

function reverseWord($word){
//    return implode("", array_map("strrev", explode("", $word)));
    return strrev($word);
}

printf(reverseWord($reverse1));




