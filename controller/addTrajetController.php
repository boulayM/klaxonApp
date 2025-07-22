<?php
/**
 * 
 * CONTROLEUR DE CRÉATION D'UN NOUVEAU TRAJET DANS LA BASE DE DONNÉES
 * 
 * Débute le session
 * Requière le controleur de la connexion à la base de données
 * Requière le controleur de messages Flash
 * 
 * 
 * Vérifie que la méthode envoyée par le formulaire d'ajout de données est bien POST
 * et qu'elle est identifiée par 'ajouter' (utilisé ici pour identifier la requête)
 * Prépare la requête pour l'insertion de données dans la base de données
 * Vérifie la consistence des données fournies par l'utilisateur
 * Si les données ne sont pas consistentes (ex: ville de départ et ville d'arrivée sont les mêmes)
 * Affiche un message d'erreur
 * Dans le cas contraire, execute la requête
 * Si la requête succède, affiche un Message Flash de succès et redirectionne
 * vers la même page où l'utilisateur se trouvait et où sera affiché le message
 * Dans le cas contraire, affiche un message d'erreur.
 * 
 * 
 */
session_start();

require_once '../core/db.php';
require 'flashMessageController.php';


$depart = $_POST['depart'];
$arrivee = $_POST['arrivee'];
$date_depart = $_POST['date_depart'];
$heure_depart = $_POST['heure_depart'];
$date_arrivee = $_POST['date_arrivee'];
$heure_arrivee = $_POST['heure_arrivee'];
$nbr_places = $_POST['nbr_places'];
$places_dispo = $_POST['places_dispo'];
$contact = $_SESSION['id'];

$sql = "INSERT INTO trajets (depart, arrivee, date_depart, heure_depart, date_arrivee, heure_arrivee, nbr_places, places_dispo, contact) 
        VALUES ('$depart', '$arrivee', '$date_depart', '$heure_depart', '$date_arrivee', '$heure_arrivee', '$nbr_places', '$places_dispo', '$contact')";
if ($depart == $arrivee or $date_depart > $date_arrivee OR $heure_depart > $heure_arrivee OR $nbr_places < 1 or $places_dispo < 1 or $places_dispo > $nbr_places) {
    
    setFlashMessage("Données inconsistentes, veuillez vérifier vos données", "error");
    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');

    exit();
}
if ($conn->query($sql) === TRUE) {
  setFlashMessage("Trajet crée avec succés!");

} else {
  setFlashMessage("Oops! Il y a eu une erreur lors du traitement de vos données.");

}

    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
    exit();


$conn->close();
?>