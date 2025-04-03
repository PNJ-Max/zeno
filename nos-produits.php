<?php
require_once __DIR__ . '/models/products.php';
$produits = getAllProducts();

$pageTitle = "Nos Produits - Zeno";
require_once 'includes/header.php';
?>
<main>
    <section class="section-produits">
        <h1>Nos Produits</h1>
        <div class="product-list">
            <?php foreach ($produits as $produit): ?>
            <div class="product-item">
                <img src="images/<?= htmlspecialchars($produit['image']) ?>" alt="<?= htmlspecialchars($produit['nom']) ?>">
                <h3><?= htmlspecialchars($produit['nom']) ?></h3>
                <p><?= htmlspecialchars($produit['description']) ?></p>
                <div class="product-meta">
                <span class="price"><?= number_format($produit['prix'], 2, ',', ' ') ?> €</span>
                <div class="icons">
                    <span class="icon-heart"><i class="fa-regular fa-heart"></i></span>
                    <span class="icon-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include_once 'includes/footer.php'; ?>
</body>
</html>
