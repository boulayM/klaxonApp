<?php

/**
 * 
 * SCRIPT DE DÉCONNEXION DE LA SESSION
 * 
 */

/**
 * 
 * Réinitialiser toutes les variables de session
 */
$_SESSION = [];

/**
 * 
 * Détruit tous les cookies de session
 */
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
/**
 * 
 * Détruit la session
 */
session_destroy();

/**
 * 
 * Redirectionne vers la page de login
 */
header('Location: '.$uri.'/appKlaxon/templates/accueil.php');
exit;
?>