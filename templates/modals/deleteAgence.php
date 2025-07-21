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