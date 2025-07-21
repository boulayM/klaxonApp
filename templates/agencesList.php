<?php

require_once '../controller/agencesListController.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">

    <title>Liste des agences</title>
</head>
<header>
    <?php include 'adminNav.php'; ?>
</header>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des agences</h1>
        <p>Pour ajouter une nouvelle agence rendez-vous à la fin de cette page</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de l'agence</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultat->num_rows > 0): ?>
                    <?php while ($ligne = $resultat->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($ligne['id']); ?></td>
                            <td><?php echo htmlspecialchars($ligne['ville']); ?></td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo htmlspecialchars($ligne['id']); ?>mod">Modifier</button>
                            </td>
                            <td>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?php echo htmlspecialchars($ligne['id']); ?>sup">Supprimer</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="<?php echo htmlspecialchars($ligne['id']); ?>mod" tabindex="-1" aria-labelledby="modifierLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modifierLabel">Modifier l'agence</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="../controller/updateAgenceController.php">
                                            <div class="mb-3">
                                                <label for="ville" class="form-label">Nom de l'agence</label>
                                                <input type="text" class="form-control" id="ville" name="ville" required>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($ligne['id']); ?>">
                                            <button type="submit" class="btn btn-primary" name="modifier">Enregistrer les modifications</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="<?php echo htmlspecialchars($ligne['id']); ?>sup" tabindex="-1" aria-labelledby="supprimerLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="supprimerLabel">Supprimer l'agence</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Êtes-vous sûr de vouloir supprimer cette agence ?</p>
                                        <form method="POST" action="../controller/deleteAgenceController.php">
                                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($ligne['id']); ?>">
                                            <button type="submit" class="btn btn-danger" name="supprimer">Supprimer</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

    </div>

                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="4">Aucune agence trouvée.</td></tr>
                <?php endif; ?>
            </tbody>
        </table><br>
        <h4>Ajouter une nouvelle agence</h4><br>
        <button class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#ajouter">Ajouter une agence</button>
        <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="ajouterLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ajouterLabel">Ajouter une nouvelle agence</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="../controller/addAgenceController.php">
                            <div class="mb-3">
                                <label for="ville" class="form-label">Nom de l'agence</label>
                                <input type="text" class="form-control" id="ville" name="ville" required>
                            </div>
                            <button type="submit" class="btn btn-success" name="ajouter">Ajouter</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>