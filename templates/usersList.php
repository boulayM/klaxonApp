<?php
/**
 * 
 * HTML contenant la liste des utilisateurs (page admin)
 * Requiert le controlleur avec la requête permettant d'obtenir la liste des utilisateurs depuis la base de données
 * Parcourt la liste des utilisateurs en les incluant un par un dans un tableau
 * Inclue le footer commun à toutes les pages
 * 
 */
require '../controller/usersListController.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">

    <title>Liste des utilisateurs</title>
</head>
<header>
    <?php include 'adminNav.php';?>
</header>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des utilisateurs</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultat->num_rows > 0): ?>
                    <?php while ($ligne = $resultat->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($ligne['id']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['nom']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['prenom']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['email']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['telephone']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="5">Aucun utilisateur trouvé.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

    <?php include 'footer.php'?>
    
</html>