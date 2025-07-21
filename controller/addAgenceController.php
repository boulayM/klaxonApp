<?php

require_once '../core/db.php';

// Requête pour créer les données
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    $ville = $_POST['ville'];

    $sql = "INSERT INTO agences (ville) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $ville);

    // Exécuter la requête
    if ($stmt->execute()) {
        header('Location: '.$uri.'/appKlaxon/templates/agencesList.php');
        exit;
    } else {
        echo "Erreur lors de l'ajout de l'agence : " . $conn->error;
    }

    $stmt->close();
}
?>