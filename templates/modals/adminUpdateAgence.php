<?php
/**
 * 
 * Modale contenant le formulaire pour la modification des données d'une agence
 * 
 */
?>

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