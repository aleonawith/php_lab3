<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
</head>
<body>
    <h1>Форма регистрации</h1>
    <form action="check.php" method="post">
        <input type="text" name="login" id="login" placeholder="Логин"><br>
        <input type="text" name="name" id="name" placeholder="Имя"><br>
        <input type="password" name="pass" id="pass" placeholder="Пароль"><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
    <a href="login.php">Зарегистрированы?</a>
</body>
</html>