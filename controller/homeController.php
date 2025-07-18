<?php
require_once '../core/db.php';

session_start();

// Requête pour récupérer les données
$sql = "SELECT 
trajets.id,
DATE_FORMAT(date_depart, '%d/%m/%Y') AS date_depart, 
DATE_FORMAT(date_arrivee, '%d/%m/%Y') AS date_arrivee, 
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

if ($resultat -> num_rows > 0) {

    echo '<div class="card" style="width: 18rem;">'; // Flex container for cards
    // Parcourir chaque ligne de résultat
    while ($ligne = $resultat->fetch_assoc()) {
        $id = $ligne['id'];
        $depart = $ligne['depart'];
        $arrivee = $ligne['arrivee'];
        $date_depart = $ligne['date_depart'];
        $date_arrivee = $ligne['date_arrivee'];
        $places_dispo = $ligne['places_dispo'];
        $nom = $ligne['nom'];
        $prenom = $ligne['prenom'];
        $email = $ligne['email'];
        $tel = $ligne['tel'];

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
                echo '<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#infos">Informations</button>';
            }

            if ($logged && $_SESSION['email'] === $email) {
                echo '<form action="/appKlaxon/templates/updateTrajet.php" method="post">
                        <input type="hidden" name="id" value="' . htmlspecialchars($id) . '">
                        <button class="btn btn-primary" type="submit" name="modifier">Modifier</button>
                    </form>';
                echo '<form action="/appKlaxon/controller/deleteTrajetController.php" method="post">
                        <input type="hidden" name="id" value="' . htmlspecialchars($id) . '">
                        <button class="btn btn-danger" type="submit" name="supprimer">Supprimer</button>
                    </form>';
            }
        
            echo '    
            <div class="modal fade" id="infos" tabindex="-1" aria-labelledby="infos" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="trajet">TRAJET PROPOSÉ PAR</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Nom: ' . htmlspecialchars($nom) . '</p>
                    <p>Prénom: ' . htmlspecialchars($prenom) . '</p>
                    <p>Email: ' . htmlspecialchars($email) . '</p>
                    <p>Téléphone: ' . htmlspecialchars($tel) . '</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

';
        echo '</div>';
    }
}

$conn->close();

?>