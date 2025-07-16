<?php
require_once '../core/db.php';

$depart = $_POST['depart'];
$arrivee = $_POST['arrivee'];
$date_depart = $_POST['date_depart'];
$date_arrivee = $_POST['date_arrivee'];
$nbr_places = $_POST['nbr_places'];
$places_dispo = $_POST['places_dispo'];

$sql = "INSERT INTO trajets (depart, arrivee, date_depart, date_arrivee, nbr_places, places_dispo) 
        VALUES ('$depart', '$arrivee', '$date_depart', '$date_arrivee', '$nbr_places', '$places_dispo')";
if ($depart == $arrivee) {
    header('Location: '.$uri.'/appKlaxon/templates/trajetError.php');
    exit();
}
if ($conn->query($sql) === TRUE) {
  header('Location: '.$uri.'/appKlaxon/templates/trajetConfirmation.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>