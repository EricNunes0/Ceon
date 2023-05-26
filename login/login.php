<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title>CEON - Login</title>
        <link rel = "icon" href = "https://i.imgur.com/FJ5UhH2.png"/>
        <link rel = "stylesheet" type = "text/css" href = "login.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../header/header.css"/>
        <script src = "login.js" defer></script>
    </head>
    <body div class = "login-page">
        <div class = "login-page">
            <?= require_once "../header/header.php" ?>
            <div class = "login-area">
                <h2 class = "login-title">Login</h2>
                <hr class = "login-separator"></hr>
                <p class = "login-description">Veja seus pedidos de forma fácil, compre mais rápido e tenha uma experiência personalizada!</p>
                <div class = "login-form-div">
                    <form class = "login-form" id = "form" method="post" action = "loginSuccess.php">
                        <div class = "login-inputs-display">
                            <div class = "login-label-divs">
                                <label for = "input-email" class = "login-labels">
                                    <span class = "login-required-span">*</span>
                                    E-mail
                                </label>
                            </div>
                            <div class = "login-input-divs">
                                <input type = "email" class = "login-inputs" name = "email" id = "input-email" placeholder = "Email"/>
                                <span id = "login-required-email">É necessário informar um e-mail</span>
                            </div>
                        </div>
                        <div class = "login-inputs-display">
                            <div class = "login-label-divs">
                                <label for = "input-password" class = "login-labels">
                                    <span class = "login-required-span">*</span>
                                    Senha
                                </label>
                            </div>
                            <div class = "login-input-divs">
                                <input type = "password" class = "login-inputs" name = "password" id = "input-password" placeholder = "Senha"/>
                                <button type = "button" class = "password-button" onclick = "openPassword()">
                                    <img class = "password-icon on" id = "password-icon-img" src = "https://i.imgur.com/Ia8ZR2R.png"/>
                                </button>
                                <span id = "login-required-password">É necessário informar uma senha</span>
                            </div>
                        </div>
                        <div class = "login-continue-div">
                            <input type = "submit" name = "input-submit" id = "input-submit-button" value = "Continuar"/>
                            <p class = "login-register-question">Não tem uma conta? <a class = "login-register-link" href = "../register/register.php">Cadastre-se</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class = "login-return">
                <div class = "login-return-div">
                    <a class = "login-return-link" href = "../index.php">
                        <button type = "button" class = "return-button">
                            <img class = "return-button-image" src = "https://i.imgur.com/dqMMXNp.png" alt = "return-arrow"/>
                            Voltar à página principal
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!--<h1 id = "display-login"></h1>-->
    </body>
</html>