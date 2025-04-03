document.addEventListener("DOMContentLoaded", () => {
    const headerCartIcon = document.querySelector('.ecommerce-icons i');
    const cartPanel = document.querySelector('#cart-panel');
    const closeCartButton = document.querySelector('#close-cart');
  
    if (headerCartIcon && cartPanel && closeCartButton) {
      headerCartIcon.addEventListener('click', () => {
        cartPanel.classList.add('open');
      });
  
      closeCartButton.addEventListener('click', () => {
        cartPanel.classList.remove('open');
      });
    }
  });
  