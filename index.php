<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>CEON</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css"/>
    <link rel = "stylesheet" type = "text/css" href = "footer/footer.css"/>
    <link rel = "icon" href = "https://i.imgur.com/s7q3rcU.png"/>
    <script type = "text/javascript" src = "script.js"></script>
    <script type = "text/javascript" src = "produtos.js"></script>
    <script type = "text/javascript" src = "search.js" defer></script>
</head>
<body>
    <?= require_once "indexLogin.php" ?>
    <div class = "shop-page">
        <section class = "shop-section">
            <div class = "shop-nav-container">
                <div class = "shop-navigation-bar">
                    <nav class = "shop-nav open">
                        <div class = "shop-nav-content">
                            <div class = "shop-nav-flex">
                                <section class = "shop-nav-image-section">
                                    <a href = "" class = "shop-nav-link">
                                        <img id = "logo-image" src = "https://i.imgur.com/s7q3rcU.png" alt = "logo">
                                        <h1 class = "logo-text">CEON</h1>
                                    </a>
                                </section>
                                <section class = "shop-nav-search-section">
                                    <form class = "shop-nav-form">
                                        <div class = "search-bar-div">
                                            <input type = "text" name = "search-bar" id = "search-bar" placeholder = "Busque aqui o seu produto" required/>
                                        </div>
                                        <div class = "search-button-div">
                                            <button type = "submit" id = "search-button">
                                                <img id = "search-image" src = "https://i.imgur.com/wAP9hXZ.png">
                                            </button>
                                        </div>
                                    </form>
                                </section>
                                <section class = "shop-nav-cadastro-section">
                                    <div <?php if($userEmail) echo "style = 'display:none';"?> class = "login-not-validated">
                                        <div class = "cadastro-button-div">
                                            <a href = "login/login.php">
                                                <button class = "cadastro-buttons">Login</button>
                                            </a>
                                        </div>
                                        <div class = "cadastro-button-div">
                                            <a href = "register/register.php">
                                                <button class = "cadastro-buttons">Cadastre-se</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class = "login-validated" <?php if(!$userEmail) echo "style = 'display:none';"?>>
                                        <p class = "login-name">
                                        <?php
                                            if($userName) {
                                                $name = explode(' ',trim($userName));
                                                echo $name[0];
                                            };
                                        ?>
                                    </div>
                                </section>
                                <section class = "shop-nav-carrinho-section">
                                    <div class = "carrinho-button-div">
                                        <button type = "button" id = "carrinho-button" onclick = "Carrinho()">
                                            <img class = "pe-none" id = "carrinho-image" src = "https://i.imgur.com/xu7exNf.png" alt = "carrinho"/>
                                            <span id = "carrinho-count">0</span>
                                        </button>
                                    </div>
                                </section>
                        </div>
                        <div class = "shop-categories-bar">
                            <ul class = "shop-categories-list">
                                <li class = "shop-categories-items">
                                    <button type = "button" class = "shop-categories-buttons" onclick = "filterProductsByCategorie()">Todos</button>
                                </li>
                                <li class = "shop-categories-items">
                                    <button type = "button" class = "shop-categories-buttons" onclick = "filterProductsByCategorie('M')">Celulares</button>
                                </li>
                                <li class = "shop-categories-items">
                                    <button type = "button" class = "shop-categories-buttons" onclick = "filterProductsByCategorie('E')">Eletrodomésticos</button>
                                </li>
                                <li class = "shop-categories-items">
                                    <button type = "button" class = "shop-categories-buttons" onclick = "filterProductsByCategorie('I')">Informática</button>
                                </li>
                                <li class = "shop-categories-items">
                                    <button type = "button" class = "shop-categories-buttons" onclick = "filterProductsByCategorie('A')">Acessórios</button>
                                </li>
                                <li class = "shop-categories-items">
                                    <button type = "button" class = "shop-categories-buttons" onclick = "filterProductsByCategorie('T')">TV</button>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <button type = "button" class = "nav-buttons" onclick = "navBar()">
                            <img class = "pe-none wd-50px" id = "nav-button-image" src = "https://i.imgur.com/nN1rks7.png" alt = "MenuArrow">
                        </button>
                    </nav>
                </div>
                <div class = "carrinho-barra closed" id = "carrinho-barra-lateral">
                    <div class="carrinho-close-container">
                        <button type="button" class="carrinho-close-button" onclick="Carrinho()">
                            <img class="carrinho-close-image" src="https://i.imgur.com/xayZ6Kn.png" alt="close-icon">
                        </button>
                    </div>
                    <p class="carrinho-barra-title">Produtos no carrinho</p>
                    <h5 id = "total-price">Total: R$ 0,00</h5>
                    <button class = "carrinho-empty-button" onclick = "cleanCart()">Esvaziar</button>
                </div>
            </div>
            <div class = "shop-vitrine">
                <div class = "shop-search-results">
                    <h1>Resultados encontrados</h1>
                </div>
                <div class = "shop-produtos" id = "shop-produtos-vitrine">
                    <!--<script>
                        addProducts();
                    </script>-->
                    <?php require_once "products.php" ?>
                </div>
            </div>
            <?php require_once "footer/footer.php"?>
        </section>
    </div>
</body>
</html>