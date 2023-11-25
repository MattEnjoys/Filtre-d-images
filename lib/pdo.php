<?php
try {
    // Connexion à la BDD locale
    $pdo = new PDO('mysql:dbname=test_de_filtre;host=localhost;charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour récupérer les images depuis la base de données
    $stmt = $pdo->prepare("SELECT * FROM images_cars");
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Gérer les erreurs de connexion à la base de données ou de récupération
    echo "Erreur : " . $e->getMessage();
    die();
}
?>