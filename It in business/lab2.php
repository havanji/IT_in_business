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

$num6 = 48;
$num7 = 52;

$res5 = floor($num6/10);
$res6 = $num6%10;
$res7 = floor($num7/10);
$res8 = $num7%10;

if (($num6 ** 2) == (4 * ($res5 * $res5 * $res5 + $res6 * $res6 * $res6))){
    echo ("Квадрат цього числа дорівнює учетверенній сумі кубів його цифр")."\n";
}else {
    echo ("Квадрат цього числа НЕ дорівнює учетверенній сумі кубів його цифр")."\n";
}

if (($num7 ** 2) == (4 * ($res7 * $res7 * $res7 + $res8 * $res8 * $res8))){
    echo ("Квадрат цього числа дорівнює учетверенній сумі кубів його цифр")."\n";
}else {
    echo ("Квадрат цього числа НЕ дорівнює учетверенній сумі кубів його цифр")."\n";
}

echo ("4.25")."\n";

$num8 = 15;
$num9 = 79;

$res9 = floor($num8/10);
$res10 = $num8%10;
$res11 = floor($num9/10);
$res12 = $num9%10;

if (($res9 + $res10) > 9){
    echo ("Сума цих цифр є двухзначним числом")."\n";
}else {
    echo ("Сума цих цифр НЕ є двухзначним числом")."\n";
}

if (($res11 + $res12) > 9){
    echo ("Сума цих цифр є двухзначним числом")."\n";
}else {
    echo ("Сума цих цифр НЕ є двухзначним числом")."\n";
}
echo ("2 завдання не зрозумів, що за число a??")."\n";

echo ("4.26")."\n";

$num10 = 15;
$num11 = 58;

if (($num10 % 3)  == 0){
    echo ("Це число кратне 3-м")."\n";
}else {
    echo ("Це число НЕ кратне 3-м")."\n";
}

if (($num11 % 3)  == 0){
    echo ("Це число кратне 3-м")."\n";
}else {
    echo ("Це число НЕ кратне 3-м")."\n";
}
echo ("2 завдання не зрозумів, що за число a??")."\n";






