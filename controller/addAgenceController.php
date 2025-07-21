<?php

session_start();

require_once '../core/db.php';
require 'flashMessageController.php';


// Requête pour créer les données
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    $ville = $_POST['ville'];

    $sql = "INSERT INTO agences (ville) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $ville);

    // Exécuter la requête
    if ($stmt->execute()) {
        setFlashMessage("Agence créee avec succés!");
        header('Location: '.$uri.'/appKlaxon/templates/agencesList.php');
        exit;
    } else {
        setFlashMessage("Erreur lors de l'ajout de l'agence : "). $conn->error;
        header('Location: '.$uri.'/appKlaxon/templates/agencesList.php');

    }

    $stmt->close();
}
?>