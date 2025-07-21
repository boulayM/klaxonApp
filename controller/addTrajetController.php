<?php
session_start();

require_once '../core/db.php';
require 'flashMessageController.php';


$depart = $_POST['depart'];
$arrivee = $_POST['arrivee'];
$date_depart = $_POST['date_depart'];
$date_arrivee = $_POST['date_arrivee'];
$nbr_places = $_POST['nbr_places'];
$places_dispo = $_POST['places_dispo'];
$contact = $_SESSION['id'];

$sql = "INSERT INTO trajets (depart, arrivee, date_depart, date_arrivee, nbr_places, places_dispo, contact) 
        VALUES ('$depart', '$arrivee', '$date_depart', '$date_arrivee', '$nbr_places', '$places_dispo', '$contact')";
if ($depart == $arrivee or $date_depart > $date_arrivee or $nbr_places < 1 or $places_dispo < 1 or $places_dispo > $nbr_places) {
    setFlashMessage("Données inconsistentes, veuillez vérifier vos données", "error");
    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');

    exit();
}
if ($conn->query($sql) === TRUE) {
  setFlashMessage("Trajet crée avec succés!");

} else {
  setFlashMessage("Oops! Il y a eu une erreur lors du traitement de vos données.");

}

// Redirect to avoid form resubmission
    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
    exit();


$conn->close();
?>