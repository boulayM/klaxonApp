<?php
require_once '../core/db.php';
session_start();

// Requête pour récupérer les données
$sql = "SELECT * FROM agences";
$resultat = $conn->query($sql);

?>