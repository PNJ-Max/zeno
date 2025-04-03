<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Baskervville+SC&family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/produits.css">
    <link rel="stylesheet" href="styles/responsive.css">

    <!-- Icônes -->
    <script src="https://kit.fontawesome.com/a5db53b08a.js" crossorigin="anonymous"></script>

    <!-- Titre dynamique si défini -->
    <title><?= $pageTitle ?? 'Zeno' ?></title>
</head>
<body>

<header class="container-nav">
  <a href="index.php" class="logo">
    <img src="images/logo/logo-zeno-horizontal-blanc.png" alt="Logo de Zeno">
  </a>
  <nav class="nav">
    <ul>
      <li><a href="index.php#hero">Accueil</a></li>
      <li><a href="nos-produits.php">Nos produits</a></li>
      <li><a href="index.php#about">À propos</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <div class="ecommerce-icons">
    <i class="fa-solid fa-cart-shopping"></i>
  </div>
</header>


    