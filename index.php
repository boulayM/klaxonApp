<?php

/** 
 * 
 * POINT D'ENTREE DE L'APPLICATION
 *  
 * Vérifie si le script est accessible via HTTPS
 * Si HTTPS est activé, configure l'URI pour utiliser https
 * Si HTTPS  est désactivé, configure l'URI pour utiliser http
 * Ajoute le HOST à l'URI
 * Ceci garantira que la redirection fonctionne quelle que soit le domaine du serveur
 * 
 * Redirection vers la page d'accueil

*/



if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER ['HTTPS'])){
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/appKlaxon/templates/accueil.php');
exit;

?>