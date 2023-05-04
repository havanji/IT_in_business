<!DOCTYPE html>
<html>
<head>
    <title>Form for lab3</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>

<body>
<div class="form">
    <form action="lab3.php" method="POST">
        <fieldset>
            <label for="fname">Ім'я:</label><br>
            <input type="text" id="fname" placeholder="Введіть своє ім'я" required><br>
            <legend>Данні Акаунта</legend>
            <label for="login">По батькові:</label><br>
            <input type="text" id="login" placeholder="Придумйте свій логін" required><br>
            <label for="email">Введіть свій E-Mail:</label><br>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required><br>
            <label for="userPassword">Придумайте свій пароль:</label><br>
            <input id="userPassword" type="password" placeholder="********" required><br>
            <label for="userPassword2">Повторіть свій пароль</label><br>
            <input id="userPassword2" type="password" placeholder="********" required>
        </fieldset>
        <br><br>
        <input class="button" type="submit" value="Відправити">
        <input class="button" type="reset" value="Скинути">
    </form>
</div>
</body>
</html>