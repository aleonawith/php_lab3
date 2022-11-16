<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING); //фильтрация по типу string
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING); //фильтрация по типу string

    $pass = md5($pass."21IST2"); //хеширование

    $mysql = new mysqli("localhost", "root", "","register-db");
    
    $result = $mysql->query("SELECT * FROM `users` 
    WHERE `login`='$login' AND `pass`='$pass'");
    $user = $result->fetch_assoc();
    if(is_countable($user) AND count($user)>0) {
        echo "Пользователь найден";
    } else {
        echo "Пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");


    $mysql->close();

    header('Location: /main.php');
?>