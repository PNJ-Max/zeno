// Ajouter un produit au panier et l'affiche 

const cart = [];

function setupCartEvent () {
    const boutonsPanier = document.querySelectorAll(".icon-cart");

    boutonsPanier.forEach(function(bouton){
        bouton.addEventListener("click",function(){
            addCart("Bougie Zeno");
        });
    });
}

function addCart (product){
    cart.push(product);
    console.log(product + " ajouté au panier.");
    updateCartDisplay();

}

function showCart(){
    cart.forEach(function(product){
        console.log(product);
    });
}

setupCartEvent();

// Ouvre le panneau quand on clique sur l’icône panier du menu

const headerCartIcon = document.querySelector('.ecommerce-icons i');
const cartPanel = document.querySelector('#cart-panel');
const closeCartButton = document.querySelector('#close-cart');
const cartItemsList = document.querySelector('#cart-items');

headerCartIcon.addEventListener('click', () => {
    cartPanel.classList.add('open');
    updateCartDisplay();
});

closeCartButton.addEventListener('click', () => {
    cartPanel.classList.remove('open');
})

function updateCartDisplay() {
    cartItemsList.innerHTML = "";
    cart.forEach((product, index) => {
        const li = document.createElement('li');
        li.textContent = product;
        cartItemsList.appendChild(li);
    });
}

