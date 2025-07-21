<?php require '../controller/homeController.php';?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../assets/style.css">
<div class="container mt-5">
        <h1 class="mb-4">Liste des trajets</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Départ</th>
                    <th>Date de départ</th>
                    <th>Arrivée</th>
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
                            <td><?php echo htmlspecialchars($ligne['arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['date_arrivee']); ?></td>
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