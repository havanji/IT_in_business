<?php
$fname = "не знайдено";
$login = "не знайдено";
$email = "не знайдено";
$userPassword = "не знайдено";
$userPassword2 = "не знайдено";

if(isset($_POST["fname"])){

    $fname = $_POST["fname"];
}

if(isset($_POST["login"])){

    $login = $_POST["login"];
}

if(isset($_POST["email"])){

    $email = $_POST["email"];
}

if(isset($_POST["userPassword"])){

    $userPassword = $_POST["userPassword"];
}
echo "Ім'я: $fname <br> Логін: $login <br> E-mail: $email <br> Password: $userPassword <br>";





