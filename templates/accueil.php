<?php
/**
 * 
 * HTML contenant la page d'accueil de l'application
 * 
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUCHE PAS AU KLAXON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<header>
    <nav class="navbar">
  <div class="container-fluid">
    <div>
    <a class="navbar-brand">TOUCHE PAS AU KLAXON</a>
  </div>
  <div class="nav justify-content-end me-4">
    <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#loggin">
      Loggin
    </button>
  </div>
  </div>
</nav>
</header>
<body>
  <h3 class="ms-3 mt-3">POUR OBTENIR PLUS D'INFORMATIONS SUR UN TRAJET, VEUILLEZ VOUS CONNECTER.</h3>
  <?php include 'trajetsList.php'; ?>
  <?php include './modals/loggin.php';?>
</body>
  <?php include 'footer.php'?>
</html>