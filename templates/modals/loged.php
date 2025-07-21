
<div class="modal fade" id="<?php echo htmlspecialchars($ligne['email']); ?>infos" tabindex="-1" aria-labelledby="infosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infosLabel">Informations du trajet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Départ:</strong> <?php echo htmlspecialchars($ligne['depart']); ?></p>
                <p><strong>Date de départ:</strong> <?php echo htmlspecialchars($ligne['date_depart']); ?></p>
                <p><strong>Arrivée:</strong> <?php echo htmlspecialchars($ligne['arrivee']); ?></p>
                <p><strong>Date d'arrivée:</strong> <?php echo htmlspecialchars($ligne['date_arrivee']); ?></p>
                <p><strong>Auteur:</strong> <?php echo htmlspecialchars($ligne['nom']) . " " . htmlspecialchars($ligne['prenom']); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

