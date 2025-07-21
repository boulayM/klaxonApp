<div class="modal fade" id="creerTrajet" tabindex="-1" aria-labelledby="infosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infosLabel">Créer un trajet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/appKlaxon/controller/addTrajetController.php" method="post" class="form-control">
                    <fieldset>
                        <legend>Informations du trajet</legend>
                        <?php include '../controller/userTrajetController.php'; ?>
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
                        <button class="btn btn-primary" type="submit">Créer</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>                      
                    </fieldset>
                </form>                    
            </div>
        </div>
    </div>
</div>