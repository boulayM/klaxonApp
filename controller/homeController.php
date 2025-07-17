<?php
require_once '../core/db.php';

session_start();

// Requête pour récupérer les données
$sql = "SELECT DATE_FORMAT(date_depart, '%d/%m/%Y') AS date_depart, DATE_FORMAT(date_arrivee, '%d/%m/%Y') 
AS date_arrivee, places_dispo, contact, depart.ville AS depart, arrivee.ville AS arrivee FROM trajets JOIN agences AS depart ON 
trajets.depart = depart.id JOIN agences AS arrivee ON trajets.arrivee = arrivee.id WHERE 
date_depart >= NOW() AND places_dispo > 0 ORDER BY date_depart ASC ";
$resultat = $conn->query($sql);

if ($resultat -> num_rows > 0) {

    echo '<div class="card" style="width: 18rem;">'; // Flex container for cards
    // Parcourir chaque ligne de résultat
    while ($ligne = $resultat->fetch_assoc()) {
        $depart = $ligne['depart'];
        $arrivee = $ligne['arrivee'];
        $date_depart = $ligne['date_depart'];
        $date_arrivee = $ligne['date_arrivee'];
        $places_dispo = $ligne['places_dispo'];
        $contact = $ligne['contact'];

        echo '<ul class="list-group list-group-flush">
                <li class="list-group-item">Départ: ' . htmlspecialchars($depart) . '</li>
                <li class="list-group-item">Date de départ: ' . htmlspecialchars($date_depart) . '</li>
                <li class="list-group-item">Arrivée: ' . htmlspecialchars($arrivee) . '</li>
                <li class="list-group-item">Date d\'arrivée: ' . htmlspecialchars($date_arrivee) . '</li>
                <li class="list-group-item">Places disponibles: ' . htmlspecialchars($places_dispo) . '</li>
            </ul>
            <p></p>';

            $logged = isset($_SESSION['user_data']) && $_SESSION['user_data'] === true;
            if ($logged) {
                echo '<button class="btn btn-primary"><a href="/appKlaxon/templates/creerTrajet.php" class="text-white">Réserver</a></button>';
            } else {
                echo '<button class="btn btn-secondary" disabled>Réserver (Connexion requise)</button>';
            }

        echo '</div>';
    }
}

$conn->close();

?>