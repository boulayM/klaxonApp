<?php

/**
 * 
 * CONTROLEUR DE REQUÊTE POUR AFFICHER LES INFORMATIONS DES UTILISATEURS
 * 
 * Requière la connexion à la base de données
 * Requête de réccupération des données
 * 
 */
require_once '../core/db.php';

$sql = "SELECT * FROM users";
$resultat = $conn->query($sql);

?>