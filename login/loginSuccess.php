<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login concluído</title>
    <link rel = "icon" href = "https://i.imgur.com/FJ5UhH2.png"/>
    <link rel = "stylesheet" href = "loginSuccess.css">
    <link rel = "stylesheet" type = "text/css" href = "../header/header.css"/>
</head>
<body>
    <main class = "log-main">
        <?= require_once "../header/header.php" ?>
        <div class = "log-container">
            <div class = "container-infos-div">
            <h1 class = "log-title">Login</h1>
            <?php
                require_once "loginValidate.php";
            ?>
            <div class = "login-link-div">
                <a class = "login-link" href = "../login/login.php">Fazer login</a>
            </div>
            </div>
        </div>
    </main>
</body>
</html>