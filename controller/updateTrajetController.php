<?php

require_once '../core/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {

    $id = $_POST['id'];
    $depart = $_POST['depart'];
    $arrivee = $_POST['arrivee'];
    $date_depart = $_POST['date_depart'];
    $date_arrivee = $_POST['date_arrivee'];
    $nbr_places = $_POST['nbr_places'];
    $places_dispo = $_POST['places_dispo'];

    $stmt = $conn->prepare("UPDATE trajets SET 
    depart = '$depart', date_depart = '$date_depart', arrivee = '$arrivee', date_arrivee = '$date_arrivee', 
    nbr_places = '$nbr_places', places_dispo = '$places_dispo'  WHERE id = '$id'");

    if ($stmt->execute()) {
        header('Location: '.$uri.'/appKlaxon/templates/deleteConfirmation.php');
        exit;
    } else {
        echo "Erreur lors de la suppression.";
    }
}
?>