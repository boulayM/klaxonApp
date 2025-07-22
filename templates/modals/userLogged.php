
        <div class="modal fade" id="<?php echo htmlspecialchars($ligne['email']); ?>modifier" tabindex="-1" aria-labelledby="modifierLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modifierLabel">Modifier le trajet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/appKlaxon/controller/updateTrajetController.php" class="form-control">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($ligne['email']); ?>">
                        <div class="mb-3">
                            <label for="depart" class="form-label">Départ</label><br>
                                <select name = "depart" required>
                                    <?php include '../../controller/formTrajetController.php'; ?>
                                </select>
                        </div>
                        <div class="mb-3">
                            <label for="date_depart" class="form-label">Date de départ</label>
                            <input type="date" class="form-control" id="date_depart" name="date_depart" required>
                        </div>
                        <div class="mb-3">
                            <label for="arrivee" class="form-label">Arrivée</label><br>
                            <select name = "arrivee" required>
                                <?php include '../../controller/formTrajetController.php'; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date_arrivee" class="form-label">Date d'arrivée</label>
                            <input type="date" class="form-control" id="date_arrivee" name="date_arrivee" required>
                        </div>
                        <label class="form-label" for="nbr_places">Nombre de places</label>
                        <div class="form-group">
                            <input class="form-input" type="number" name="nbr_places" id="nbr_places" required>
                        </div>

                        <label class="form-label" for="places_dispo">Places disponibles</label>
                        <div class="form-group mar-bot-5">
                            <input class="form-input" type="number" name="places_dispo" id="places_dispo" required>
                        </div><br>
                            <button type="submit" class="btn btn-primary" name="modifier">Enregistrer les modifications</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Fermer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
