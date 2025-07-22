<?php

/**
 * 
 * CONTROLEUR DE MODIFICATION D'UN TRAJET DANS LA BASE DE DONNÉES
 * 
 * Débute le session
 * Requière le controleur de la connexion à la base de données
 * Requière le controleur de messages Flash
 * Vérifie que la méthode envoyée par le formulaire de modification de données est bien POST
 * et qu'elle est identifiée par 'modifier' (utilisé ici pour identifier la requête)
 * Fait la requête pour l'insertion de données dans la base de données
 * Si la requête succède, affiche un Message Flash de succès et redirectionne
 * vers la même page où l'utilisateur se trouvait et où sera affiché le message
 * Dans le cas contraire, affiche un message d'erreur.
 * 
 */

session_start();
require_once '../core/db.php';
require 'flashMessageController.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {

    $id = $_POST['id'];
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];
    $date_depart = $_POST['date_depart'];
    $heure_depart = $_POST['heure_depart'];
    $date_arrivee = $_POST['date_arrivee'];
    $heure_arrivee = $_POST['heure_arrivee'];
    $nbr_places = $_POST['nbr_places'];
    $places_dispo = $_POST['places_dispo'];

    $stmt = $conn->prepare("UPDATE trajets SET 
    depart = '$depart', date_depart = '$date_depart', heure_depart = '$heure_depart', 
    arrivee = '$arrivee', date_arrivee = '$date_arrivee', heure_arrivee = '$heure_arrivee',
    nbr_places = '$nbr_places', places_dispo = '$places_dispo'  WHERE id = '$id'");

    if ($stmt->execute()) {
        setFlashMessage("Trajet modifié avec succés!");
        header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
        exit;
    } else {
        setFlashMessage("Erreur lors de la modification!" . $conn->error);
        header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
    }
}
?>