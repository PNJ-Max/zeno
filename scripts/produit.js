// Gestion de l’ajout depuis les produits affichés
const cart = [];

function setupCartEvent () {
    const boutonsPanier = document.querySelectorAll(".icon-cart");

    boutonsPanier.forEach(function(bouton){
        bouton.addEventListener("click", function() {
            addCart("Bougie Zeno");
        });
    });
}

function addCart(product){
    cart.push(product);
    console.log(product + " ajouté au panier.");
    updateCartDisplay();
}

function updateCartDisplay() {
    const cartItemsList = document.querySelector('#cart-items');
    if (!cartItemsList) return;

    cartItemsList.innerHTML = "";
    cart.forEach((product) => {
        const li = document.createElement('li');
        li.textContent = product;
        cartItemsList.appendChild(li);
    });
}

setupCartEvent();
