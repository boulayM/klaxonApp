<?php
/**
 * 
 * HTML contenant la liste des trajets présentés sur la page d'accueil des utilisateurs connectés
 * Requiert le controleur de la requête à la base de données
 * Parcoure la base de données et afiche les résultats dans un tableau
 * Vérifie que l'utilisateur est connecté et affiche une icône lui permettant d'accéder aux informations de chaque trajet
 * Vérifie pour chaque trajet si l'utilisateur connecté est l'auteur du trajet
 * Si oui, affiche une icône lui permettant de modifier le trajet 
 * Et une autre icône lui permettant de supprimer le trajet
 * Inclue les modales contenant les formulaires pour les modifications
 * 
 */ 
require '../controller/trajetListController.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../assets/style.css">
<div class="container mt-5">
        <h3 class="mb-4">Trajets proposés</h3>
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
                            <td><?php echo htmlspecialchars($ligne['date_arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['heure_arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['nom']) . " " . htmlspecialchars($ligne['prenom']); ?></td>
                            
                    <?php $logged = isset($_SESSION['user_data']) && $_SESSION['user_data'] === true;?>
                            <td data-bs-toggle="modal" data-bs-target="#<?php echo htmlspecialchars($ligne['email']); ?>infos"><i class="bi bi-eye"></i></td>
                    <?php if ($ligne['email'] === $_SESSION['email']):?>
                            <td>
                                <form action="/appKlaxon/templates/updateTrajet.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($ligne['id']); ?>">
                                    <button type="submit" name="modifier" style="border: none;"><i class="bi bi-pencil-square"></i></button>
                                </form>
                            </td>
                            <td>
                                <td data-bs-toggle="modal" data-bs-target="#<?php echo htmlspecialchars($ligne['id']); ?>supprimer"><i class="bi bi-trash3"></i></td>
                            </td>
                    <?php endif;?>
                    <?php include './modals/loged.php'?>
                    <?php include './modals/deleteTrajet.php'?>
                    
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="5">Aucun trajet trouvé.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
