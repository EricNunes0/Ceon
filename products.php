<?php

    $host = "containers-us-west-89.railway.app";
    $port = "7334";
    $bd = "railway";
    $user = "root";
    $password = "i5lhyU3pMqUFNWo1x8Kh";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $charset = 'utf8mb4';

    $starsImages = array("https://i.imgur.com/ssDiu1t.png", "https://i.imgur.com/JECZraP.png");

    try {
        $dsn = "mysql:host=$host;dbname=$bd;charset=$charset;port=$port";
        $con = new PDO($dsn, $user, $password, $options);
        if($con) {
            $productsSelect_str = "SELECT * FROM products";
            $productsSelect = $con->query($productsSelect_str);
            if($productsSelect) {
                $products = $productsSelect->fetchAll();
                $out = "";
                /*
                [0] - id
                [1] - name
                [2] - categorie
                [3] - image
                [4] - rating
                [5] - price
                [6] - discount
                */
                foreach($products as $product) {
                    $priceValue = $product[4];
                    $discountDiv = "";
                    $productNameStyle = "";
                    $price = "R$" . number_format($product[4], 2, ",", ".");
                    $priceValueFormatted = "R$" . number_format($priceValue, 2, ",", ".");
                    if($product[6]) {
                        $priceValue = $product[4] - (($product[4] * $product[6]) / 100);
                        $priceValueFormatted = "R$" . number_format($priceValue, 2, ",", ".");
                        $discountDiv = $product[6];
                        $discountDiv = "
                            <section class = 'produto-discount-section'>
                                <p class = 'produto-discount-texts ta-justify'>$price</p>
                                <span class = 'produto-discount-spans'>
                                    <img src = 'https://i.imgur.com/HuytMIL.png' class = 'produto-discount-span-image'/>
                                    $product[6]%
                                </span>
                            </section>";
                            $productNameStyle = 'margin-0';
                        };
                        $out = $out . "
                        <div class = 'shop-produto dp-flex-column mw-20rem'>
                            <section class = 'produto-image-section'>
                                <img class = 'produto-image pe-none mw-10rem' src = '$product[3]' alt = 'produto'>
                            </section>
                            <section class = 'produto-title-section'>
                                <div class = 'title-section-separator'></div>
                                <div class = 'title-div'>
                                    <h4 class = 'produto-names'>$product[1]</h4>
                                    <h4 class = 'produto-categories' style = 'display: none;'>$product[2]</h4>
                                </div>
                            </section>
                            
                            <section class = 'produto-rate-section'>
                                <div class = 'stars-flex'>
                                    <img src = '$starsImages[1]' alt = 'star' class = 'stars pe-none'/>
                                    <img src = '$starsImages[1]' alt = 'star' class = 'stars pe-none'/>
                                    <img src = '$starsImages[1]' alt = 'star' class = 'stars pe-none'/>
                                    <img src = '$starsImages[1]' alt = 'star' class = 'stars pe-none'/>
                                    <img src = '$starsImages[1]' alt = 'star' class = 'stars pe-none'/>
                                </div>
                                <div class = 'rating-div'>
                                    <p class = 'rating-texts ta-justify'>$product[5] avaliações</p>
                                </div>
                            </section>
                            $discountDiv
                            <section class = 'produto-price-section $productNameStyle' id = 'produto-price-section-$product[0]'>
                                <p class = 'produto-price-texts ta-justify'>$priceValueFormatted</p>
                            </section>
                            <section class = 'produto-button-section'>
                                <button class = 'produto-button ta-justify' onclick = 'addToCart(\"$product[0]\", \"$product[1]\", \"$product[2]\", \"$product[3]\", \"$product[4]\", \"$product[5]\", \"$product[6]\")'></p>
                            </section>
                        </div>
                        ";
                }
                echo $out;
            }
            $con = null;
            return;
        } else {
            echo "<p class = 'validate-text red'>Não foi possível consultar os produtos!</p>";
        };
        $con = null;
    } catch (PDOException $e) {
        echo "<p class = 'validate-text red'>Não foi possível realizar o login! Tente novamente mais tarde</p>";
        die($e->getMessage());
    }
?>