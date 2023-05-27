function addToCart(id, name, categorie, image, price, rating, discount) {
    console.log(price)
    let divId = id + Math.floor(Math.random() * 999999);
    let productPrice = price;
    if(discount != "0") {
        productPrice = productPrice - ((productPrice * discount) / 100);
    }
    let lateralBar = document.getElementById('carrinho-barra-lateral');
    lateralBar.innerHTML += `
        <div class = "carrinho-products" id = "carrinho-product-${divId}">
            <div class = "carrinho-image-div">
    <img class = "carrinho-product-images" src = "${image}" width = "200" height = "200"/>
            </div>
            <div class = "carrinho-texts-flex">
    <div class = "carrinho-title-div">
        <p class = "carrinho-product-titles">${name}</p>
    </div>
    <div class = "carrinho-price-div">
        <span class = "carrinho-prices" style = "display: none;">${productPrice}</span>
        <p class = "carrinho-product-prices">${productPrice.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})}</p>
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