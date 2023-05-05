<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Form for lab3</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>

<body>
<div class="form">
    <form method="POST" action="lab3.php">
        <fieldset>
            <label for="name">Ім'я:</label><br>
            <input type="text" id="name" name="name" placeholder="Введіть своє ім'я" required><br>
            <legend>Данні Акаунта</legend>
            <label for="login">Логін:</label><br>
            <input type="text" id="login" name="login" placeholder="Придумйте свій логін" required><br>
            <label for="email">Введіть свій E-Mail:</label><br>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required><br>
            <label for="password">Придумайте свій пароль:</label><br>
            <input id="password" type="password" name="password" placeholder="********" required><br>
        </fieldset>
        <br><br>
        <input class="button" type="submit" value="Відправити">
        <input class="button" type="reset" value="Скинути">
    </form>
</div>
</body>
</html>