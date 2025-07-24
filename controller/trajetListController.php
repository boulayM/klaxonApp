<?php

/**
 * 
 * CONTROLEUR DE REQUÊTE POUR AFFICHER LES INFORMATIONS DES TRAJETS
 * 
 * Requière la connexion à la base de données
 * Requête de réccupération des données
 * 
 */
require '../core/db.php';
$sql = "SELECT 
trajets.id,
DATE_FORMAT(date_depart, '%d/%m/%Y') AS date_depart, 
heure_depart,
DATE_FORMAT(date_arrivee, '%d/%m/%Y') AS date_arrivee, 
heure_arrivee,
places_dispo,
nbr_places,
users.nom AS nom,
users.prenom AS prenom,
users.email AS email,
users.telephone AS tel,
depart.ville AS depart, 
arrivee.ville AS arrivee 
FROM trajets 
JOIN agences AS depart ON trajets.depart = depart.id 
JOIN agences AS arrivee ON trajets.arrivee = arrivee.id 
JOIN users ON trajets.contact = users.id
WHERE date_depart >= NOW() AND places_dispo > 0 
ORDER BY date_depart ASC";
$resultat = $conn->query($sql);

?>