<?php

require 'vendor/autoload.php';

use Buki\Router\Router;

// Configuration du routeur
$config = [
    'paths' => [
        'controllers' => 'controllers/', // Dossier des contrôleurs
    ],
    'namespaces' => [
        'controllers' => 'App\Controllers', // Namespace des contrôleurs
    ],
];

$router = new Router($config);