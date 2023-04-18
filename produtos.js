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
    /*{
        "id": 4,
        "name": "Aquecedor elétrico doméstico ventisol quartzo portátil AQ-01 127V",
        "categorie": "E", // "E" = "Eletrodomésticos",
        "image": "images/produtos/eletrodomesticos/eletro(0).png",
        "price": 92.70,
        "rating": 23
    }*/
]


function addProducts() {
    let vitrine = document.querySelector('#shop-produtos-vitrine');
    let out = "";
    for(const product of products) {
        out += `
        <div class = "shop-produto dp-flex-column mw-20rem">
            <section class = "produto-image-section">
                <img class = "pe-none mw-10rem" src = "${product.image}" alt = "produto">
            </section>
            <section class = "produto-title-section">
                <div class = "title-section-separator"></div>
                <div class = "title-div">
                    <h4 class = "produto-names">${product.name}</h4>
                </div>
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