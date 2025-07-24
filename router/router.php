<?php

require 'vendor/autoload.php';

use Buki\Router\Router;

// Configuration du router
$config = [
    'paths' => [
        'controllers' => 'controllers/', // Dossier des controlleurs
    ],
];

$router = new Router($config);

// Rooute pour la page d'accueil
$router->get('/', function () {
    include './templates/accueil.php';
});

// Route pour la page des utilisateurs
$router->get('/users', function () {
    include './templates/usersPage.php';
});

// Route pour la page des administrateurs
$router->get('/admin', function () {
    include './templates/adminPage.php';
});

// Route pour la page des trajets d'admin
$router->get('/trajets', function () {
    include './templates/adminTrajetsList.php';
});

// Route pour la page des agences d'admin
$router->get('/agences', function () {
    include './templates/agencesList.php';
});

// Route pour la page des utilisateurs d'admin
$router->get('/userslist', function () {
    include './templates/usersList.php';
});



// Démarrer le router
$router->run();
