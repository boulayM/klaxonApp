<?php
/*
---------------------------
REDIRECT TO HOME PAGE
*/

// Check if the script is accessed via HTTPS
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER ['HTTPS'])){
    // If HTTPS is on, set the URI to use https
    $uri = 'https://';
} else {
    // If HTTPS is off, set the URI to use http
    // This is useful for local development or when the server does not support HTTPS
    $uri = 'http://';
}
// Append the host to the URI
// This will ensure that the redirect works regardless of the server's domain
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/appKlaxon/templates/dashboard.php');
exit;
?>