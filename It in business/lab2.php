<?php
echo ("Завдання 2. Парайко Андрій 251ЕК")."\n";

$num1 = 256;
$num2 = 427;
$num3 = 173;

echo ("4.22")."\n";

if (($num1 % 2) == 0) {
    echo "Число парне"."\n";
} else {
    echo "Число не парне"."\n";
}

if (($num2 % 2) == 0) {
    echo "Число парне"."\n";
} else {
    echo "Число не парне"."\n";
}

if (($num3 % 2) == 0) {
    echo "Число парне"."\n";
} else {
    echo "Число не парне"."\n";
}

if (($num1 % 10 ) == 7) {
    echo "Число має в кінці 7"."\n";
} else {
    echo "Число не має в кінці 7"."\n";
}

if (($num2 % 10 ) == 7) {
    echo "Число має в кінці 7"."\n";
} else {
    echo "Число не має в кінці 7"."\n";
}

if (($num3 % 10 ) == 7) {
    echo "Число має в кінці 7"."\n";
} else {
    echo "Число не має в кінці 7"."\n";
}

echo ("4.23")."\n";

$num4 = 59;
$num5 = 77;

$res1 = floor($num4/10);
$res2 = $num4%10;
$res3 = floor($num5/10);
$res4 = $num5%10;

if ($res1 > $res2) {
    echo "Перша більша"."\n";
} elseif ($res1 < $res2) {
    echo "Друга більша"."\n";
}else {
    echo "Однакові"."\n";
}

if ($res3 > $res4) {
    echo "Перша більша"."\n";
} elseif ($res3 < $res4) {
    echo "Друга більша"."\n";
}else {
    echo "Однакові"."\n";
}

echo ("4.24")."\n";

echo ("4.25")."\n";

echo ("4.26")."\n";

?>