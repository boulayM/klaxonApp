<?php
require_once '../core/db.php';
session_start();

// Requête pour récupérer les données
$sql = "SELECT * FROM users";
$resultat = $conn->query($sql);

?>