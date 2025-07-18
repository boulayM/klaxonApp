<?php

require_once '../core/db.php';

if (isset($_POST['supprimer'])) {
    $id = intval($_POST['id']); // Sécuriser l'entrée

    // Requête de suppression
    $stmt = $conn->prepare("DELETE FROM trajets WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: '.$uri.'/appKlaxon/templates/deleteConfirmation.php');
        exit;
    } else {
        echo "Erreur lors de la suppression.";
    }
}
?>