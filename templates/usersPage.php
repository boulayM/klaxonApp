<?php 
/**
 * 
 * HTML contenant la page d'accueil des utilisateurs connectés
 * Requiert le controlleur permettant d'afficher des messages Flash
 * Inclue la fonction permettant d'afficher les messages Flash
 * 
 */
require '../controller/flashMessageController.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">

    <title>Klaxon Users</title>
</head>
<header>
    <?php include 'usersNav.php'; ?>
</header>
<body>    
    <h5 class="ms-3 mt-3"><?php displayFlashMessage();?></h5>
    <?php include 'trajetsListLoged.php'; ?>
</body>
    <?php include 'footer.php'?>
</html>