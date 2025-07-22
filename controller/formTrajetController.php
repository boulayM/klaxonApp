<?php

/**
 * 
 * CONTROLEUR POUR AFFICHER LA LISTE DÉROULANTE CONTENANT LES VILLES POUR LES FORMULAIRES D'INSERTION ET MODIFICATION DES TRAJETS
 * 
 * Requête pour réccupérer les données
 * Boucle pour afficher le nom des villes dnas une liste dérooulante
 * 
 */
require_once '../core/db.php';

// Requête pour récupérer les données
$sql = "SELECT id, ville FROM agences ORDER BY ville ASC";
$resultat = $conn->query($sql);

if ($resultat -> num_rows > 0) {
    // Parcourir chaque ligne de résultat
    while ($ligne = $resultat->fetch_assoc()) {
        $id = $ligne['id'];
        $ville = $ligne['ville'];
        echo "<option value='$id'>$ville</option>";
    }
}

?>