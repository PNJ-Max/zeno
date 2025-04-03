<?php
$pageTitle = "Zeno - Accueil";
require_once 'includes/header.php';
?>
<main> 
        <!-- Section Hero -->
    <section id="hero">
        <div class="hero-content">
            <h1>Zeno</h1>
            <h2>Votre boîte mensuelle d'énergie</h2>
            <p> Allumez la flamme de votre bien-être, créez votre rituel, vivez votre moment</p>
        </div>
    </section>

        <!-- Section Présentation-->
    <section id="description">
        <div class="container-description">
            <div class="text-description">
                <h2>Un moment pour soi</h2>
                <p>Au cœur de l'objet, il y a le souffle et la main de l'artisan. Celui qui souffle le verre et laisse dans chaque pièce un supplément d'âme, celui qui coule délicatement la cire couche par couche. Au cœur de l'objet, il y a aussi les matériaux, qui permettent à nos collections d'exprimer toute leur noblesse. La magie opère dès que l'objet s'enflamme, réunissant l'incroyable osmose entre la main et l'esprit.</p>
                <p>Chaque produit sélectionné ou façonné à la main raconte une histoire : celle d’un artisan, d’un matériau noble, ou d’un parfum qui évoque un souvenir. La cire se fond avec douceur, l’encens libère des volutes apaisantes, et chaque détail – de la bougie à la carte qui vous accompagne – porte l’empreinte de la main et de l’esprit.</p>
            </div>
            <div class="photo-description">
                <img src="images/bougies-1.webp" alt="Photo de boîte zeno">
            </div>
        </div>
    </section>

    <section id="products">
        <div>
            <h2>Nos produits</h2>
        </div>
        <div class="product-list">
            <div class=" product-item">
                <img src="images/bougies-2.webp" alt="Bougies Zeno">
                <h3>Bougies parfumées</h3>
                <p>Encalyptus</p>
                <div class="product-meta">
                    <span class="price">19,90€</span>
                    <div class="icons">
                        <span class="icon-heart"><i class="fa-regular fa-heart"></i></span>
                        <span class="icon-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>
            </div>

            <div class=" product-item">
                <img src="images/bougies-2.webp" alt="Bougies Zeno">
                <h3>Bougies parfumées</h3>
                <p>Encalyptus</p>
                <div class="product-meta">
                    <span class="price">19,90€</span>
                    <div class="icons">
                        <span class="icon-heart"><i class="fa-regular fa-heart"></i></span>
                        <span class="icon-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>
            </div>

            <div class=" product-item">
                <img src="images/bougies-2.webp" alt="Bougies Zeno">
                <h3>Bougies parfumées</h3>
                <p>Encalyptus</p>
                <div class="product-meta">
                    <span class="price">19,90€</span>
                    <div class="icons">
                        <span class="icon-heart"><i class="fa-regular fa-heart"></i></span>
                        <span class="icon-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>
            </div>

            <div class=" product-item">
                <img src="images/bougies-2.webp" alt="Bougies Zeno">
                <h3>Bougies parfumées</h3>
                <p>Encalyptus</p>
                <div class="product-meta">
                    <span class="price">19,90€</span>
                    <div class="icons">
                        <span class="icon-heart"><i class="fa-regular fa-heart"></i></span>
                        <span class="icon-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="meditation">
        <div class="video-container">
            <h2>Les bienfaits de la méditation</h2>
            <p>Découvrez notre univers à travers cette vidéo apaisante.</p>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/elWR2gF4I-0?si=fE0o2akQSmemXSmQ" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                </iframe>
            </div>
        </div>    
            
    </section>

    <section id="galerie">
        <div class="container">
            <div>
                <ul class="categorie-switcher">
                    <li><a href="#">Encens</a></li>
                    <li><a href="#">Bougies</a></li>
                    <li><a href="#">Huiles essentielles</a></li>
                </ul>
            </div>

            <div class="galerie-container">
                <div class="galerie-item1"><img src="images/encens-1.webp" alt="Encens"></div>
                <div class="galerie-item2"><img src="images/encens-2.webp" alt="Encens"></div>
                <div class="galerie-item3"><img src="images/encens-3.webp" alt="Encens"></div>
                <div class="galerie-item4"><img src="images/encens-4.webp" alt="Encens"></div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="form-container">
            <h2>Une question ? Contactez-nous</h2>
            <form action="" id="contactForm" method="post">
                <label for="lastName">Nom :</label>
                <input type="text" id="lastName" name="lastName" required>
    
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstName" required>
    
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
    
                <label for="message">Votre message :</label>
                <textarea id="message" name="message" required></textarea>
    
                <button type="submit">Envoyer</button>
                <p id="error-message"></p>
    
            </form>
        </div>
    </section>
</main>    

    

<?php include_once 'includes/footer.php'; ?>