<?php
    $logi = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    require('connection.php');
    $mysqli = new mysqli($db_host, $db_user, $db_password, 'clck.game');
    $mysqli->query("SET NAMES 'utf8'");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $res = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$logi' AND `password` = '$pass'");
    $person = $res->fetch_assoc(); 
    if(count($person) == false){
        echo "Пользователь не найден";
        exit();
    }
    
    //session_start();
    $_SESSION['clicks'] = $person['clicks'];
    setcookie('user', $logi, time() + 3600 * 24 * 30, '/');
    
    $mysqli->close();
    header('Location: /')
?>