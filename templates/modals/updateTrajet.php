<?php
/**
 * 
 * Modale contenant le formulaire pour modifier un trajet
 * 
 */
?>

<div class="modal fade" id="<?php echo htmlspecialchars($ligne['email']); ?>" tabindex="-1" aria-labelledby="infosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infosLabel">Modifier le trajet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/appKlaxon/controller/updateTrajetController.php" method="post" class="form-control">

                    <fieldset>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <label class="form-label" for="depart">Ville de départ</label>
                        <div class="form-group">
                            <select name = "depart" required>
                                <?php include '../../controller/formTrajetController.php'; ?>
                            </select>
                        </div>

                        <label class="form-label" for="dateDepart">Date du départ</label>
                        <div class="form-group mar-bot-5">
                            <input class="form-input" type="date" name="date_depart" id="dateDepart" required>
                        </div>

                        <label class="form-label" for="dateDepart">Heure du départ</label>
                        <div class="form-group mar-bot-5">
                            <input class="form-input" type="time" name="heure_depart" id="dateDepart" required>
                        </div>

                        <label class="form-label" for="arrivee">Ville d'arrivée</label>
                        <div class="form-group">
                            <select name = "arrivee" required>
                                <?php include '../../controller/formTrajetController.php'; ?>
                            </select>
                        </div>

                        <label class="form-label" for="dateArrivee">Date d'arrivée</label>
                        <div class="form-group mar-bot-5">
                            <input class="form-input" type="date" name="date_arrivee" id="dateArrivee" required>
                        </div>

                        <label class="form-label" for="dateDepart">Heure d'arrivée</label>
                        <div class="form-group mar-bot-5">
                            <input class="form-input" type="time" name="heure_arrivee" id="dateDepart" required>
                        </div>

                        <label class="form-label" for="nbr_places">Nombre de places</label>
                        <div class="form-group">
                            <input class="form-input" type="number" name="nbr_places" id="nbr_places" required>
                        </div>

                        <label class="form-label" for="places_dispo">Places disponibles</label>
                        <div class="form-group mar-bot-5">
                            <input class="form-input" type="number" name="places_dispo" id="places_dispo" required>
                        </div><br>
                    </fieldset>
                        <button class="btn btn-primary" type="submit" name="modifier">Modifier</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </form>
            </div>
        </div>
    </div>
</div>