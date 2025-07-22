<?php

/**
 * 
 * CONTROLEUR DE REQUETE POUR RECCUPERER LES DONNEES DES AGENCES
 * 
 * Requière la connexion à la base de données
 * Execute la requête
 * 
 */
require_once '../core/db.php';

$sql = "SELECT * FROM agences";
$resultat = $conn->query($sql);

?>