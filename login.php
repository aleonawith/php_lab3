<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
</head>
<body>
    <h1>Форма авторизации</h1>
    <form action="auth.php" method="post">
        <input type="text" name="login" id="login" placeholder="Логин"><br>
        <input type="password" name="pass" id="pass" placeholder="Пароль"><br>
        <button type="submit">Войти</button>
    </form>
    <a href="register.php">Не зарегистрированы?</a>
</body>
</html>