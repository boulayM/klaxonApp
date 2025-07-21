    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-brand">TOUCHE PAS AU KLAXON</div>
            <div class="nav justify-content-end me-4">
                <button class="btn btn-success btn-lg me-3" data-bs-toggle="modal" data-bs-target="#creerTrajet">
                    Créer un trajet
                </button>
                <?php include './modals/addTrajet.php' ?>
                <div>                   
                    <?php if (isset($_SESSION['user_data']) && $_SESSION['user_data']): ?>
                        <span class="text-white me-3">Bienvenue, <?php echo htmlspecialchars($_SESSION['prenom'] ." ". $_SESSION['nom']); ?>!</span>
                    <?php endif; ?>
                </div>
                <button class="btn btn-outline-success btn-lg">
                    <a href="../core/logout.php">Déconnexion</a>
                </button>
            </div>
        </div>
    </nav>
