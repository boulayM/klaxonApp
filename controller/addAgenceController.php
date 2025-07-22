<?php

/**
 * 
 * CONTROLEUR DE CRÉATION D'UNE NOUVELLE AGENCE DANS LA BASE DE DONNÉES
 * 
 * Débute le session
 * Requière le controleur de la connexion à la base de données
 * Requière le controleur de messages Flash
 * Vérifie que la méthode envoyée par le formulaire d'ajout de données est bien POST
 * et qu'elle est identifiée par 'ajouter' (utilisé ici pour identifier la requête)
 * Fait la requête pour l'insertion de données dans la base de données
 * Si la requête succède, affiche un Message Flash de succès et redirectionne
 * vers la même page où l'utilisateur se trouvait et où sera affiché le message
 * Dans le cas contraire, affiche un message d'erreur.
 * 
 */

session_start();

require_once '../core/db.php';
require 'flashMessageController.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    $ville = $_POST['ville'];

    $sql = "INSERT INTO agences (ville) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $ville);

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