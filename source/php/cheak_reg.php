<?php
    $logi = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if(mb_strlen($logi) < 4 || mb_strlen($logi) > 20){
        echo "Длина логина может быть от 4 до 20 символов";
        exit();
    }else if(mb_strlen($pass) < 8){
        echo "Пароль слишком маленький. Он может быть от 8 символов";
        exit();
    }

    require('connection.php');
    $mysqli = new mysqli($db_host, $db_user, $db_password, 'clck.game');
    $mysqli->query("SET NAMES 'utf8'");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }//else echo "работает типо";

    $res = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$logi'");
    $person = $res->fetch_assoc(); 
    if(count($person) == true){
        echo "Данный логин уже занят";
        exit();
    }

    if ($mysqli->query("INSERT INTO users (login, password, clicks) VALUES ('$logi', '$pass', '0')") === TRUE) {
        setcookie('user', $logi, time() + 3600 * 24 * 30, '/');
        header('Location: /');
    } else {
        echo "Error: " . $mysqli->error;
    }

    //session_start();
    $_SESSION['clicks'] = 0;

    $mysqli->close();
?>