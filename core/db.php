<?php
/**
 * 
 * INFORMATIONS DE CONNEXION À LA BASE DE DONNÉES
 * 
 * Nom de l'hôte, nom de l'utilisateur, son mot de passe et le nom de la base de données
 * 
 */
$host = 'localhost';
$user = 'klaxonadmin';
$password = '2xTa_Q*7';
$dbname = 'klaxon_bd';

/**
 * 
 * Script de connexion à la base de données 
 * 
 * Utilise les informations fournies ci dessus
 */

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>