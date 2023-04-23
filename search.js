const submitButton = document.querySelector("#search-button"); // Selecionando o botão de pesquisa

submitButton.addEventListener("click", function(e) { // Função que será executada quando o botão for clicado
    e.preventDefault();
    let produtosBars = document.querySelectorAll(".shop-produto");
    let filter = document.getElementById("search-bar").value;
    let produtos = document.getElementsByClassName("produto-names");
    let productsCount = 0;
    for(let i = 0; i <= produtos.length - 1; i++) {
        let txtValue = produtos[i].textContent;
        if(txtValue.toLowerCase().includes(filter.toLowerCase())) {
            produtosBars[i].style.display = "";
            productsCount++;
        } else {
            produtosBars[i].style.display = "none";
        };
    }
    let resultsDiv = document.querySelector(".shop-search-results");
    if(productsCount == 0) {
        resultsDiv.className = "shop-search-results none";
        resultsDiv.innerHTML = `
            <div>
                <h3 id = "results-title">Nenhum resultado encontrado para <span>\"${filter.toLowerCase()}\"</span>.</h3>
                <p id = "results-description">Verifique se digitou o nome corretamente</p>
            </div>
        `
    } else if(productsCount >= 1) {
        resultsDiv.className = "shop-search-results active";
        resultsDiv.innerHTML = `
        <div class = "results-products-div">
            <h3 id = "results-products-found-title">Resultados para <span>\"${filter.toLowerCase()}\"</span>.</h3>
            <p id = "results-products-found">${productsCount} produtos</p>
        </div>
    `
    }
});

/* Filtrar produtos por categoria */
function filterProductsByCategorie(categorie) {
    let produtosBars = document.querySelectorAll('.shop-produto');
    let produtos = document.getElementsByClassName('produto-categories');
    document.querySelector(".shop-search-results").className = "shop-search-results";
    for(let i = 0; i <= produtos.length - 1; i++) {
        let txtValue = produtos[i].textContent;
        if(categorie) {
            if(txtValue == categorie) {
                produtosBars[i].style.display = "";
            } else {
                produtosBars[i].style.display = "none";
            };
        } else {
            produtosBars[i].style.display = "";
        };
    }
}