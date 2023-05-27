<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>CEON - Cadastro</title>
        <link rel = "icon" href = "https://i.imgur.com/s7q3rcU.png"/>
        <link rel = "stylesheet" type = "text/css" href = "register.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../header/header.css"/>
        <script src = "register.js" defer></script>
    </head>
    <body class = "register-page">
        <div class = "register-page">
            <?= require_once "../header/header.php" ?>
            <div class = "register-area">
                <h2 class = "register-title">Cadastro</h2>
                <hr class = "register-separator"></hr>
                <p class = "register-description">Veja seus pedidos de forma fácil, compre mais rápido e tenha uma experiência personalizada!</p>
                <div class = "register-form-div">
                    <form class = "register-form" id = "form" method="post" action="registerSuccess.php">
                        <div class = "register-inputs-display">
                            <div class = "register-label-divs">
                                <label class = "register-labels">
                                    <span class = "register-required-span">*</span>
                                    Nome completo
                                </label>
                            </div>
                            <div class = "register-input-divs">
                                <input type = "text" class = "register-inputs" name = "name" id = "input-name" placeholder = "Nome"/>
                                <span class = "register-required-spans" id = "register-required-name">É necessário informar o seu nome completo</span>
                            </div>
                        </div>
                        <div class = "register-inputs-display">
                            <div class = "register-label-divs">
                                <label class = "register-labels">
                                    <span class = "register-required-span">*</span>
                                    Gênero
                                </label>
                                <p class = "register-label-description">Para gente te conhecer um pouquinho melhor ^-^</p>
                            </div>
                            <div class = "register-input-divs" id = "radio-divs">
                                <div class = "radio-options-flex">
                                    <div class = "radio-option-divs">
                                        <input type = "radio" class = "register-inputs-radio" name = "gender" id = "input-gender" value = "M"/>
                                        <label class = "radio-labels">Masculino</label>
                                    </div>
                                    <div class = "radio-option-divs">
                                        <input type = "radio" class = "register-inputs-radio" name = "gender" id = "input-gender" value = "F"/>
                                        <label class = "radio-labels">Feminino</label>
                                    </div>
                                    <div class = "radio-option-divs">
                                        <input type = "radio" class = "register-inputs-radio" name = "gender" id = "input-gender" value = "O"/>
                                        <label class = "radio-labels">Não informar</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class = "register-required-spans" id = "register-required-gender">É necessário informar o seu gênero</span>
                            </div>
                        </div>
                        <div class = "register-inputs-display">
                            <div class = "register-label-divs">
                                <label class = "register-labels">
                                    <span class = "register-required-span">*</span>
                                    Telefone
                                </label>
                                <p class = "register-label-description">Caso a gente precise entrar em contato sobre seus pedidos</p>
                            </div>
                            <div class = "register-input-divs">
                                <input type = "tel" class = "register-inputs" name = "phone" id = "input-phone" placeholder = "(__) _____-____" maxlength = "14" mask = "(99) 99999-9999"/>
                                <span class = "register-required-spans" id = "register-required-phone">É necessário informar um número de telefone</span>
                            </div>
                        </div>
                        <div class = "register-inputs-display">
                            <div class = "register-label-divs">
                                <label class = "register-labels">
                                    <span class = "register-required-span">*</span>
                                    E-mail
                                </label>
                                <p class = "register-label-description">Informe um e-mail válido</p>
                            </div>
                            <div class = "register-input-divs">
                                <input type = "email" class = "register-inputs" name = "email" id = "input-email" placeholder = "Email"/>
                                <span class = "register-required-spans" id = "register-required-email">É necessário informar um e-mail</span>
                            </div>
                        </div>
                        <div class = "register-inputs-display">
                            <div class = "register-label-divs">
                                <label class = "register-labels">
                                    <span class = "register-required-span">*</span>
                                    Senha
                                </label>
                                <p class = "register-label-description">Sua senha precisa ter entre 8 e 20 caracteres</p>
                            </div>
                            <div class = "register-input-divs">
                                <input type = "password" class = "register-inputs" name = "password" id = "input-password" placeholder = "Senha" minlength = "8" maxlength = "20"/>
                                <button type = "button" class = "password-button" onclick = "openPassword()">
                                    <img class = "password-icon on" id = "password-icon-img" src = "https://i.imgur.com/Ia8ZR2R.png"/>
                                </button>
                                <span class = "register-required-spans" id = "register-required-password">É necessário informar uma senha</span>
                            </div>
                        </div>
                        <div class = "register-continue-div">
                            <input type = "submit" name = "input-submit" id = "input-submit-button" value = "Continuar"/>
                            <p class = "register-login-question">Já tem uma conta? <a class = "register-login-link" href = "../login/login.php">Faça login</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class = "register-return">
                <div class = "register-return-div">
                    <a class = "register-return-link" href = "../index.php">
                        <button type = "button" class = "return-button">
                            <img class = "return-button-image" src = "https://i.imgur.com/dqMMXNp.png" alt = "return-arrow"/>
                            Voltar à página principal
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>