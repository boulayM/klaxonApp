<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">

    <title>Klaxon Users</title>
</head>
<header>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-brand">TOUCHE PAS AU KLAXON</div>
            <div class="nav justify-content-end me-4">
                <button class="btn btn-outline-success btn-lg me-3">
                    <a href="/appKlaxon/templates/creerTrajet.php">Créer un trajet</a>
                </button>
                <button class="btn btn-outline-success btn-lg">
                    <a href="../core/logout.php">Déconnexion</a>
                </button>
            </div>
        </div>
    </nav>
</header>
<body>    
    <?php include '../controller/homeController.php'; ?>
</body>
</html>