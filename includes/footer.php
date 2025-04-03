<footer id="footer">
  <div class="footer-container">
    <p>&copy; <?= date('Y') ?> Zeno. Tous droits réservés.</p>
    <p>
      <a href="#">Mentions légales</a> | 
      <a href="#">CGV</a> | 
      <a href="#">Politique de confidentialité</a>
    </p>
  </div>
</footer>


</footer>

<!-- Panneau panier (présent sur toutes les pages) -->
<div id="cart-panel" class="cart-panel">
  <div class="cart-header">
    <h3>Votre panier</h3>
    <button id="close-cart" aria-label="Fermer le panier">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>
  <ul id="cart-items">
    <!-- Produits JS ici -->
  </ul>
</div>

<?php
// Récupère le nom du fichier PHP courant
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Script global : ouverture du panier (présent partout) -->
<script src="scripts/main.js"></script>

<!-- Script d’ajout produit : uniquement sur index et nos-produits -->
<?php if (in_array($currentPage, ['index.php', 'nos-produits.php'])): ?>
  <script src="scripts/produit.js"></script>
<?php endif; ?>

</body>
</html>

