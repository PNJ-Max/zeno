<?php
require_once __DIR__ . '/../config/config.php';

function getAllProducts () {
    global $pdo;
    
    $sql = "SELECT * FROM produit";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();

}