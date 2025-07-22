<?php 
/**
 * 
 * HTML contenant la liste des trajets présentés sur la page d'accueil avant connexion
 * Requiert le controleur de la requête à la base de données
 * Parcoure la base de données et afiche les résultats dans un tableau
 * 
 */
require '../controller/trajetListController.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Départ</th>
                    <th>Date de départ</th>
                    <th>Heure</th>
                    <th>Arrivée</th>
                    <th>Heure</th>
                    <th>Date d'arrivée</th>
                    <th>Auteur</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultat->num_rows > 0): ?>
                    <?php while ($ligne = $resultat->fetch_assoc()):
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($ligne['depart']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['date_depart']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['heure_depart']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['heure_arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['date_arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['nom']) . " " . htmlspecialchars($ligne['prenom']); ?></td>
                           
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="5">Aucun trajet trouvé.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
