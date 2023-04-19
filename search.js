function searchProduct() {
    let produtosBars = document.querySelectorAll('.shop-produto');
    let filter = document.getElementById('search-bar').value.toUpperCase();
    let produtos = document.getElementsByClassName('produto-names');
    for(let i = 0; i <= produtos.length - 1; i++) {
        let txtValue = produtos[i].textContent;
        if(txtValue.toUpperCase().indexOf(filter) > -1) {
            produtosBars[i].style.display = "";
        } else {
            produtosBars[i].style.display = "none";
        };
    }
}

/* Filtrar produtos por categoria */
function filterProductsByCategorie(categorie) {
    let produtosBars = document.querySelectorAll('.shop-produto');
    let produtos = document.getElementsByClassName('produto-categories');
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