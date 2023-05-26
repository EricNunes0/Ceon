<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro concluído</title>
    <link rel = "icon" href = "https://i.imgur.com/FJ5UhH2.png"/>
    <link rel = "stylesheet" href = "registerSuccess.css">
    <link rel = "stylesheet" type = "text/css" href = "../header/header.css"/>
</head>
<body>
    <main class = "reg-main">
        <?= require_once "../header/header.php" ?>
        <div class = "reg-container">
            <div class = "container-infos-div">
            <h1 class = "reg-title">Cadastro</h1>
            <?php
                require_once "registerValidate.php";
            ?>
            <div class = "login-link-div">
                <a class = "login-link" href = "../login/login.php">Fazer login</a>
            </div>
            </div>
        </div>
    </main>
</body>
</html>