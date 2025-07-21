<?php
session_start();

require_once '../core/db.php';
require 'flashMessageController.php';


if (isset($_POST['supprimer'])) {
    $id = intval($_POST['id']); // Sécuriser l'entrée

    // Requête de suppression
    $stmt = $conn->prepare("DELETE FROM trajets WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        setFlashMessage("Trajet supprimé avec succés!");
        header('Location: '.$uri.'/appKlaxon/templates/adminTrajetsList.php');
        exit;
    } else {
        echo "Erreur lors de la suppression.";
    }
}
?>