<?php
require_once '../core/db.php';

// Start the session
session_start();

// Set form inputs for user trajet

echo '
<label class="form-label" for="email">Email</label><br>
<input class="text-secondary" type="text" name="email" id="email" value="'.htmlspecialchars($_SESSION['email']).' " readonly><br>
<label class="form-label" for="nom">Nom</label><br>
<input class="text-secondary" type="text" name="nom" id="nom" value="'.htmlspecialchars($_SESSION['nom']).'" readonly><br>
<label class="form-label" for="prenom">Prénom</label><br>
<input class="text-secondary" type="text" name="prenom" id="prenom" value="'.htmlspecialchars($_SESSION['prenom']).'" readonly><br>
<label class="form-label" for="telephone">Téléphone</label><br>
<input class="text-secondary" type="text" name="telephone" id="telephone" value="'.htmlspecialchars($_SESSION['telephone']).'"readonly><br>';
?>