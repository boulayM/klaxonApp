<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session cookie (if it exists)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect to the login page or another page
header('Location: '.$uri.'/appKlaxon/templates/dashboard.php');
exit;
?>