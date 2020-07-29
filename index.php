<!DOCTYPE html>

<?php 
    session_start();
?>

<html>
    <!-- Что ты делаешь? лол. Сайт в открытом доступе! 
        Github: https://github.com/perssBest/clck.game -->
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#38a3fd">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/704388319039193122/737698086419169290/98875_click_512x512.png" />
    <meta property="og:image" content="https://cdn.discordapp.com/attachments/704388319039193122/737698086419169290/98875_click_512x512.png">
    <title>clck-game. - Обычная тапперка в браузере!</title>
    <meta property="og:title" content="clck-game. - Обычная тапперка в браузере!">
    <meta property="og:description" content="clck-game. - Любишь потыкать? Тыкай больше и станешь первым местом!">
    <meta property="og:url" content="http://clck-game.glitch.me">
    <meta name="description" content="clck-game. - Любишь потыкать? Тыкай больше и станешь первым местом!">


    <link rel="stylesheet" href="source/css/index.css">
</head>

<body>

    <?php
        $user = (isset($_COOKIE['user'])) ? $_COOKIE['user'] : false;
        if($user == false):
            header("Location: /source/php/reg.php");
            exit();
    ?>
    
    <?php else: ?>
        <script type="text/javascript" src="./source/js/counter.js"></script>
        <h1 id="demo">Clicks: </h1>

        <button class="bt" onclick="myFunction()"></button>\
    <?php endif; ?>

</body>
</html>