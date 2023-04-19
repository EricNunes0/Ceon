/* Função para abrir/fechar a barra de navegação da página principal */
function navBar() {
    const navs = document.getElementsByClassName('shop-nav');
    for(let i = 0; i <= navs.length - 1; i++) {
        let classN = navs[i].className;
        let navButtonImg = document.getElementById('nav-button-image');
        if(classN == 'shop-nav open') {
            navs[i].className = 'shop-nav closed';
            navButtonImg.style.transform = "rotate(180deg)";
            const barraCarrinhos = document.getElementsByClassName('carrinho-barra');
            const carrinho = document.getElementById('carrinho-button');
            for(let i = 0; i <= barraCarrinhos.length - 1; i++) {
                if(barraCarrinhos[i].className == 'carrinho-barra open') {
                    barraCarrinhos[i].className = 'carrinho-barra closed';
                    carrinho.style.backgroundColor = "transparent";
                };
            };
        } else {
            navs[i].className = 'shop-nav open';
            navButtonImg.style.transform = "rotate(0deg)";
        }
    }
};

/* Abrir/fechar carrinho */
function Carrinho() {
    const barraCarrinhos = document.getElementsByClassName('carrinho-barra');
    const carrinho = document.getElementById('carrinho-button');
    for(let i = 0; i <= barraCarrinhos.length - 1; i++) {
        if(barraCarrinhos[i].className == 'carrinho-barra open') {
            barraCarrinhos[i].className = 'carrinho-barra closed';
            carrinho.style.backgroundColor = "transparent";
        } else {
            barraCarrinhos[i].className = 'carrinho-barra open';
            carrinho.style.backgroundColor = "#303030";
        }
    }
}