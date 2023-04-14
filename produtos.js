const products = [
    {
        "id": 0,
        "name": "Samsung Galaxy J10 Prime",
        "categorie": "M", // "M" = "Mobile",
        "image": "images/produtos/mobile/mobile(0).png",
        "price": 1009.99,
        "rating": 62
    },
    {
        "id": 1,
        "name": "Samsung Galaxy S10 Plus",
        "categorie": "M", // "M" = "Mobile",
        "image": "images/produtos/mobile/mobile(1).png",
        "price": 1151.10,
        "rating": 97
    },
    {
        "id": 2,
        "name": "Samsung Galaxy A23 128GB, 4G RAM",
        "categorie": "M", // "M" = "Mobile",
        "image": "images/produtos/mobile/mobile(2).png",
        "price": 1199.99,
        "rating": 129
    },
    {
        "id": 3,
        "name": "Motorola G52 128GB, 4G RAM",
        "categorie": "M", // "M" = "Mobile",
        "image": "images/produtos/mobile/mobile(3).png",
        "price": 1104.15,
        "rating": 78
    },
    {
        "id": 4,
        "name": "Aquecedor elétrico doméstico ventisol quartzo portátil AQ-01 127V",
        "categorie": "E", // "E" = "Eletrodomésticos",
        "image": "images/produtos/eletrodomesticos/eletro(0).png",
        "price": 92.70,
        "rating": 23
    }
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
                    <h4>${product.name}</h4>
                </div>
            </section>
            <section class = "produto-rate-section">
                <div class = "stars-flex">
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                    <img src = "images/icons/img_star(1).png" alt = "star" class = "stars pe-none"/>
                </div>
                <div class = "rating-div">
                    <p class = "rating-texts ta-justify">${product.rating} avaliações</p>
                </div>
            </section>
            <section class = "produto-price-section">
                <p class = "produto-price-texts ta-justify">${product.price.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})}</p>
            </section>
            <section class = "produto-button-section">
                <button class = "produto-button ta-justify">Adicionar ao carrinho</p>
            </section>
        </div>
        `
    }
    vitrine.innerHTML = out;
    console.log(products)
}