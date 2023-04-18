const products = [
    {
        "id": 0,
        "name": "Samsung Galaxy J10 Prime",
        "categorie": "M", // "M" = "Mobile",
        "image": "https://i.imgur.com/oqxgOqK.png",
        "price": 1009.99,
        "rating": 62
    },
    {
        "id": 1,
        "name": "Samsung Galaxy S10 Plus",
        "categorie": "M", // "M" = "Mobile",
        "image": "https://i.imgur.com/8uRA6oi.png",
        "price": 1151.10,
        "rating": 97
    },
    {
        "id": 2,
        "name": "Samsung Galaxy A23 128GB, 4G RAM",
        "categorie": "M", // "M" = "Mobile",
        "image": "https://i.imgur.com/2rCPO2N.png",
        "price": 1199.99,
        "rating": 129
    },
    {
        "id": 3,
        "name": "Motorola G52 128GB, 4G RAM",
        "categorie": "M", // "M" = "Mobile",
        "image": "https://i.imgur.com/xuAGigr.png",
        "price": 1104.15,
        "rating": 78
    },
    {
        "id": 4,
        "name": "Samsung Galaxy M53 5G 128GB Azul, 8GB de RAM, Processador Octa-Core",
        "categorie": "M", // "M" = "Mobile",
        "image": "https://i.imgur.com/REDgvOv.png",
        "price": 1799.00,
        "rating": 243
    },
    {
        "id": 5,
        "name": "Samsung Galaxy A03 Core Preto 32GB, 2GB RAM",
        "categorie": "M", // "M" = "Mobile",
        "image": "https://i.imgur.com/eGeGkVs.png",
        "price": 599.00,
        "rating": 38
    },
    {
        "id": 6,
        "name": "Aquecedor elétrico doméstico ventisol quartzo portátil AQ-01 127V",
        "categorie": "E", // "E" = "Eletrodomésticos",
        "image": "https://i.imgur.com/CcfcywL.png",
        "price": 92.70,
        "rating": 23
    },
    {
        "id": 7,
        "name": "Geladeira/Refrigerador Electrolux DC35A Branca 260L Cycle Defrost - 110v",
        "categorie": "E", // "E" = "Eletrodomésticos",
        "image": "https://i.imgur.com/p2Ng4mA.png",
        "price": 2093.54,
        "rating": 1208
    },
    {
        "id": 8,
        "name": "Lavadora de Roupas Electrolux 11Kg LES11 Essencial Care Branca - 110V",
        "categorie": "E", // "E" = "Eletrodomésticos",
        "image": "https://i.imgur.com/BKvVG3N.png",
        "price": 1761.78,
        "rating": 2154
    },
    {
        "id": 9,
        "name": "Fone de ouvido bluetooth tws drop, Branco, PH368, Pulse - UN 1 UN",
        "categorie": "I", // "I" = "Informática",
        "image": "https://i.imgur.com/aJs7RFp.png",
        "price": 127.80,
        "rating": 14
    },
    {
        "id": 10,
        "name": "Carregador portátil usb para Smartphone, 10000mAh, CB147, Pulse - CX 1 UN",
        "categorie": "I", // "I" = "Informática",
        "image": "https://i.imgur.com/FMBaMFa.png",
        "price": 119.90,
        "rating": 5
    },
    {
        "id": 11,
        "name": "Case Capinha Transparente Capa Slim Flexível Invisível Compatível Com iPhone 7G, 7G Plus, X, XR, XS MAX, 11 PRO MAX, 12, 12 PRO MAX, 13 Pro (11)",
        "categorie": "A", // "A" = "Acessórios",
        "image": "https://i.imgur.com/dBF5ug1.png",
        "price": 27.89,
        "rating": 359
    }
]

const categories = {
    "M": {
        "name": "Celulares",
        "icon": "https://i.imgur.com/lOL87xU.png",
        "bgcolor": "#3060ff"
    },
    "E": {
        "name": "Eletrodomésticos",
        "icon": "https://i.imgur.com/Mj0RNer.png",
        "bgcolor": "#ffb030"
    },
    "I": {
        "name": "Informática",
        "icon": "https://i.imgur.com/43xB3Zf.png",
        "bgcolor": "#30c060"
    },
    "A": {
        "name": "Acessórios",
        "icon": "https://i.imgur.com/23dWz9P.png",
        "bgcolor": "#ff3060"
    }
};

function addProducts() {
    let vitrine = document.querySelector('#shop-produtos-vitrine');
    let out = "";
    for(const product of products) {
        out += `
        <div class = "shop-produto dp-flex-column mw-20rem">
            <section class = "produto-image-section">
                <img class = "produto-image pe-none mw-10rem" src = "${product.image}" alt = "produto">
            </section>
            <section class = "produto-title-section">
                <div class = "title-section-separator"></div>
                <div class = "title-div">
                    <h4 class = "produto-names">${product.name}</h4>
                    <h4 class = "produto-categories" style = "display: none;">${product.categorie}</h4>
                </div>
            </section>
            <section class = "produto-icon-sections" style = "background-color: ${categories[product.categorie].bgcolor};">
                <img src = "${categories[product.categorie].icon}" alt = "product-categorie-icon" class = "product-categorie-icons" id = "product-categorie-icon-${product.id}"></img>
                <p class = "product-categorie-names" id = "product-categorie-name-${product.id}">${categories[product.categorie].name}</p>
            </section>
            <section class = "produto-rate-section">
                <div class = "stars-flex">
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(${Math.floor(Math.random() * 2)}).png" alt = "star" class = "stars pe-none"/>
                </div>
                <div class = "rating-div">
                    <p class = "rating-texts ta-justify">${product.rating} avaliações</p>
                </div>
            </section>
            <section class = "produto-price-section">
                <p class = "produto-price-texts ta-justify">${product.price.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})}</p>
            </section>
            <section class = "produto-button-section">
                <button class = "produto-button ta-justify" onclick = "addToCart(${product.id})">Adicionar ao carrinho</p>
            </section>
        </div>
        `
    }
    vitrine.innerHTML = out;
    console.log(products);
}

function addToCart(id) {
    let foundProduct;
    let divId = id + Math.floor(Math.random() * 999999);
    for(const product of products) {
        if(id === product.id) {
            foundProduct = product;
        }
    }
    let lateralBar = document.getElementById('carrinho-barra-lateral');
    lateralBar.innerHTML += `
        <div class = "carrinho-products" id = "carrinho-product-${divId}">
            <div class = "carrinho-image-div">
                <img class = "carrinho-product-images" src = "${foundProduct.image}" width = "200" height = "200"/>
            </div>
            <div class = "carrinho-texts-flex">
                <div class = "carrinho-title-div">
                    <p class = "carrinho-product-titles">${foundProduct.name}</p>
                </div>
                <div class = "carrinho-price-div">
                    <span class = "carrinho-prices" style = "display: none;">${foundProduct.price}</span>
                    <p class = "carrinho-product-prices">${foundProduct.price.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})}</p>
                </div>
                <div class = "carrinho-button-div">
                    <button type = "button" class = "carrinho-product-buttons" id = "carrinho-product-button-${divId}" onclick = "deleteFromCart(${divId})">Remover</button>
                </div>
            </div>
        </div>
    `;
    updateCounter();
    updatePrice();
}

/* Altera o preço total do carrinho */
function updatePrice() {
    let price = 0;
    document.querySelectorAll(`.carrinho-prices`).forEach((product) => {
        let converted = parseFloat(product.textContent);
        price += converted;
    });
    document.querySelector('#total-price').innerHTML = `Total: R$ ${price.toFixed(2)}`;
}

/* Altera o contador do carrinho */
function updateCounter() {
    let pCount = document.querySelectorAll(`.carrinho-products`).length;
    pCount > 99 ? pCount = `+99`: pCount = pCount;
    document.querySelector('#carrinho-count').innerHTML = pCount;
}

/* Remove 1 produto do carrinho */
function deleteFromCart(divId) {
    document.querySelector(`#carrinho-product-${divId}`).remove();
    updateCounter();
    updatePrice();
}

/* Remove todos os produtos do carrinho */
function cleanCart() {
    document.querySelectorAll('.carrinho-products').forEach(e => e.remove());
    updateCounter();
    updatePrice();
}