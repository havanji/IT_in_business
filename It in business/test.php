<!DOCTYPE html>
<html>
<head>
    <title>METANIT.COM</title>
    <meta charset="utf-8" />
</head>
<body>
<?php
$name = "не определено";
$age = "не определен";
if(isset($_GET["name"])){

    $name = $_GET["name"];
}
if(isset($_GET["age"])){

    $age = $_GET["age"];
}
echo "Имя: $name <br> Возраст: $age";
?>
<h3>Форма ввода данных</h3>
<form method="GET">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>