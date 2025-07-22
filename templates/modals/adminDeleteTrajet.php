<?php
/**
 * 
 * Modale contenant le formulaire pour que l'administrateur exclue un trajet de la base de données
 * 
 */
?>

<div class="modal fade" id="<?php echo htmlspecialchars($ligne['id']); ?>supprimer" tabindex="-1" aria-labelledby="infosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-danger" id="infosLabel">ATTENTION!</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/appKlaxon/controller/adminDeleteTrajetController.php" class="form-control">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($ligne['id']); ?>">
                    <div class="p-3">
                        <h5><strong>VOULEZ-VOUS VRAIMENT SUPPRIMER CE TRAJET?</strong></h5>
                    </div>
                    <button type="submit" class="btn btn-danger" name="supprimer">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </form>
            </div>
        </div>
    </div>
</div>
