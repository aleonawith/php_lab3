<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING); //фильтрация по типу string
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING); //фильтрация по типу string
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING); //фильтрация по типу string
    
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90 ) {
        echo "Недопустимая длина поля логин";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50 ) {
        echo "Недопустимая длина поля имя";
        exit();
    } else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 13 ) {
        echo "Недопустимая длина поля пароль (от 5 до 13 символов)";
        exit();
    } 

    $pass = md5($pass."21IST2"); //хеширование

    $mysql = new mysqli("localhost", "root", "","register-db");
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: /login.php');
?>