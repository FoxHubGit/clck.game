<!DOCTYPE html>
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
    <title>clck-game. - Вход в аккаунт!</title>
    <meta property="og:title" content="clck-game. - Вход в аккаунт">
    <meta property="og:description" content="clck-game. - Любишь потыкать? Тыкай больше и станешь первым местом!">
    <meta property="og:url" content="http://clck-game.glitch.me">
    <meta name="description" content="clck-game. - Любишь потыкать? Тыкай больше и станешь первым местом!">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="../css/auth.css" rel="stylesheet">
</head>

<body>

    <?php 
        $user = (isset($_COOKIE['user'])) ? $_COOKIE['user'] : false;
        if($user):
            header("Location: /")
    ?>
    
    <?php else: ?>
    <body class="text-center">
    <form class="form-signin" action="cheak_login.php" method="post">
        <img class="mb-4" src="https://cdn.discordapp.com/attachments/704388319039193122/737698086419169290/98875_click_512x512.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Войти или <a href="/source/php/reg.php">Зарегестрироваться</a></h1>
        <label for="username" class="sr-only">Логин пользователя</label>
        <input type="name" name="name" id="name" class="form-control" placeholder="Логин пользователя" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Пароль" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>

    <?php endif; ?>

</body>
</html>