<?php
// Récupérer l'ID envoyé via POST
if (isset($_POST['id'])) {
    $id = intval($_POST['id']); // Sécuriser l'entrée
} else {
    echo "ID non spécifié.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Creer un Trajet</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mt-2 ms-2">Modifier le trajet</h1>

        <form action="/appKlaxon/controller/updateTrajetController.php" method="post" class="form-control">

            <fieldset>
                <legend>Informations du trajet</legend>
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <label class="form-label" for="depart">Ville de départ</label>
                <div class="form-group">
                    <select name = "depart" required>
                        <?php include '../controller/formTrajetController.php'; ?>
                    </select>
                </div>

                <label class="form-label" for="dateDepart">Date du départ</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="date" name="date_depart" id="dateDepart" required>
                </div>

                <label class="form-label" for="arrivee">Ville d'arrivée</label>
                <div class="form-group">
                    <select name = "arrivee" required>
                        <?php include '../controller/formTrajetController.php'; ?>
                    </select>
                </div>

                <label class="form-label" for="dateArrivee">Date d'arrivée</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="date" name="date_arrivee" id="dateArrivee" required>
                </div>

                <label class="form-label" for="nbr_places">Nombre de places</label>
                <div class="form-group">
                    <input class="form-input" type="number" name="nbr_places" id="nbr_places" required>
                </div>

                <label class="form-label" for="places_dispo">Places disponibles</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="number" name="places_dispo" id="places_dispo" required>
                </div><br>



                <button class="btn btn-primary" type="submit" name="modifier">Modifier</button>

            </fieldset>

            </form>

        </div>

</body>
</html>