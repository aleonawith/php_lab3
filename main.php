<html>
    <head>
        <style>
            html {
                background-color: rgba(251, 169, 252, 0.93);
            }
        </style>
    </head>
    <body>
        <div>
            <h2>Добро пожаловать, <?=@$_COOKIE['user']?>!</h2>
            <p><a href="logout.php">Выйти</a> из системы</p>
        </div>
    </body>
</html>