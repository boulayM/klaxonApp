<?php

session_start();

require_once '../core/db.php';
require 'flashMessageController.php';

if (isset($_POST['supprimer'])) {
    $id = intval($_POST['id']); // Sécuriser l'entrée

    // Requête de suppression
    $stmt = $conn->prepare("DELETE FROM agences WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        setFlashMessage("Agence supprimée avec succés!");
        header('Location: '.$uri.'/appKlaxon/templates/agencesList.php');
        exit;
    } else {
        setFlashMessage("Erreur lors de la suppression!");
        header('Location: '.$uri.'/appKlaxon/templates/agencesList.php');

    }
}
?>