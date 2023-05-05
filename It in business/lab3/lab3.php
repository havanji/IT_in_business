<?php
if (isset($_POST["name"]) && isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"])){

    $name = $_POST["name"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_base = 'lab3';
    $db_table = "lab3";

    try {
        // Підключкння до БД
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Корекмтна кодіровка
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        // Помилка з підключенням
        print "Помилка!: " . $e->getMessage(). "<br/>";
    }


    $data = array( "name" => $name, "login" => $login, "email" => $email, "password" => $password );
    $query = $db->prepare("INSERT INTO $db_table (name, login, email, password) values (:name, :login, :email, :password)");
    $query->execute($data);
}




