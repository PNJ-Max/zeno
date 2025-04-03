<?php
//Connexion db
$host = 'localhost';
$dbname = 'zeno';
$user = 'root';
$pass = '';

// On utilise un bloc try/catch pour gérer proprement les erreurs
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    
    // Bonnes pratiques PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Résultats en tableaux associatifs
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Préparation sécurisée native

} catch (PDOException $e) {
    // En prod, on n'affiche pas les détails
    error_log($e->getMessage()); // Log dans les fichiers d’erreur
    die("Erreur de connexion. Veuillez réessayer plus tard.");
}
