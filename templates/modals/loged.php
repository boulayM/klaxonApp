
<?php
/**
 * 
 * Modale qui affiche les informations d'un trajet
 * 
 */
?>

<div class="modal fade" id="<?php echo htmlspecialchars($ligne['email']); ?>infos" tabindex="-1" aria-labelledby="infosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infosLabel">Informations du trajet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Auteur:</strong> <?php echo htmlspecialchars($ligne['nom']) . " " . htmlspecialchars($ligne['prenom']); ?></p>
                <p><strong>Téléphone:</strong> <?php echo htmlspecialchars($ligne['tel']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($ligne['email']); ?></p>
                <p><strong>Nombre total de places:</strong> <?php echo htmlspecialchars($ligne['nbr_places']); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

