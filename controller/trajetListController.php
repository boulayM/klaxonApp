<?php
require_once '../core/db.php';
session_start();
// Requête pour récupérer les données
$sql = "SELECT 
trajets.id,
DATE_FORMAT(date_depart, '%d/%m/%Y-%H:%i') AS date_depart, 
DATE_FORMAT(date_arrivee, '%d/%m/%Y-%H:%i') AS date_arrivee, 
places_dispo, 
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