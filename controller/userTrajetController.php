<?php

/**
 * 
 * CONTROLEUR POUR AFFICHER LES DONNEES DE L'UTILISATEUR DANS LE FORMULAIRE DE MODIFICATION DE TRAJETS
 * 
 * Démarre la session
 * Requière la connexion à la base de données
 * Si l'utilisateur est inscrit, réccupére les données de l'utilisateur et les affiche
 * dans les champs de lecture seule du formulaire qui le requère
 * 
 */
require_once '../core/db.php';

?>

<?php if ($_SESSION): ?>

<label class="form-label" for="email">Email</label><br>
<input class="text-secondary" type="text" name="email" id="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" readonly><br>
<label class="form-label" for="nom">Nom</label><br>
<input class="text-secondary" type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($_SESSION['nom']); ?>" readonly><br>
<label class="form-label" for="prenom">Prénom</label><br>
<input class="text-secondary" type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($_SESSION['prenom']); ?>" readonly><br>
<label class="form-label" for="telephone">Téléphone</label><br>
<input class="text-secondary" type="text" name="telephone" id="telephone" value="<?php echo htmlspecialchars($_SESSION['telephone']); ?>"readonly><br>

<?php endif;?>