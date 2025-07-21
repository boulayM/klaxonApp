<?php

require '../controller/trajetListController.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Liste des Trajets</title>
</head>
<header>
    <?php include 'adminNav.php'; ?>
</header>
<body>
    <div class="container mt-5">
        <h5 class="ms-3 mt-3"><?php displayFlashMessage();?></h5>
        <h1 class="mb-4">Liste des trajets</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Départ</th>
                    <th>Date de départ</th>
                    <th>Arrivée</th>
                    <th>Date d'arrivée</th>
                    <th>Auteur</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultat->num_rows > 0): ?>
                    <?php while ($ligne = $resultat->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($ligne['id']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['depart']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['date_depart']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['date_arrivee']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['nom']) . htmlspecialchars($ligne['prenom']); ?></td>
                            <td data-bs-toggle="modal" data-bs-target="#<?php echo htmlspecialchars($ligne['id']); ?>supprimer"><i class="bi bi-trash3"></i></td>
                        </tr>

                    <?php include './modals/adminDeleteTrajet.php'?>

                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="5">Aucun trajet trouvé.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>