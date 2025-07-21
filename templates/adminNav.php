<?php
require '../controller/flashMessageController.php';
?>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-brand">TOUCHE PAS AU KLAXON</div>
            <div class="nav justify-content-end me-4">
                <button class="btn btn-light me-2"><a class="nav-link" href="/appKlaxon/templates/usersList.php">Liste des utilisateurs</a></button>
                <button class="btn btn-light me-2"><a class="nav-link" href="/appKlaxon/templates/agencesList.php">Liste des agences</a></button>
                <button class="btn btn-light me-2"><a class="nav-link" href="/appKlaxon/templates/adminTrajetsList.php">Liste des trajets</a></button>
                <div class="align-content-center ms-2 me-2">                   
                    <?php if (isset($_SESSION['user_data']) && $_SESSION['user_data']): ?>
                        <span class="text-white me-3">Bienvenue, <?php echo htmlspecialchars($_SESSION['prenom'] ." ". $_SESSION['nom']); ?>!</span>
                    <?php endif; ?>
                </div>
                <button class="btn btn-danger">
                    <a class="nav-link text-white" href="../core/logout.php">Déconnexion</a>
                </button>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
            </div>
        </div>
    </div>
</nav>
