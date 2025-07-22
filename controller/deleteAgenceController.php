<?php

/**
 * 
 * CONTROLEUR DE SUPPRESSION D'UNE AGENCE DANS LA BASE DE DONNEES
 * 
 * 
 * Débute le session
 * Requière le controleur de la connexion à la base de données
 * Requière le controleur de messages Flash
 * 
 * Vérifie que la méthode envoyée par le formulaire de suppression de données est bien POST
 * et qu'elle est identifiée par 'supprimer' (utilisé ici pour identifier la requête)
 * Prépare la requête pour la suppression de données dans la base de données
 * Si la requête succède, affiche un Message Flash de succès et redirectionne
 * vers la même page où l'utilisateur se trouvait et où sera affiché le message
 * Dans le cas contraire, affiche un message d'erreur.
 * 
 */

session_start();

require_once '../core/db.php';
require 'flashMessageController.php';

if (isset($_POST['supprimer'])) {
    $id = intval($_POST['id']);

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