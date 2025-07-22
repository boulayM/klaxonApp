<?php

/**
 * 
 * SCRIPT DE DÉMARRAGE DE SESSION
 * 
 * Démarrage de session
 * Réquisition du moule qui fait la connexion à la base de données
 * 
 */
session_start();
require_once 'db.php';

/**
 * 
 * Mise en place des variables de session
 * 
 * Nom d'utilisateur (email) et mot de passe
 */

$email = $_POST['email'];
$password = $_POST['keypass'];

/**
 * 
 * LOGIQUE DE LOGIN
 * 
 * Fait une requête à la base de données pour réccupérer les données
 * de l'utilisateur en se servant de l'email fourni lors du login
 * 
 */


$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

/**
 * Compare l'email fourni avec le mot de passe et le rôle correspondants dans la base de données

 */
if ($data ['email'] == $email && $data ['password'] == $password && $data ['role'] === "user") {
    
/**
 * 
 * Si l'email et le mot de passe correspondent et que le rôle correspondant est 'user', 
 * stocke les données dans les variables de session et redirectionne vers la page des utilisateurs
 * puis arrête le script
 * 
 */

$_SESSION['user_data'] = true;
$_SESSION['email'] = $data['email'];
$_SESSION['nom'] = $data['nom'];
$_SESSION['prenom'] = $data['prenom'];
$_SESSION['telephone'] = $data['telephone'];
$_SESSION['id'] = $data['id'];

    
    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
    
    exit();
   
} 

/**
 * 
 * Si l'email et le mot de passe correspondent et que le rôle correspondant est 'admin',
 * stocke les données dans les variables de session et redirectionne vers la page des administrateurs
 */

if ($data ['email'] == $email && $data ['password'] == $password && $data ['role'] === "admin") {

$_SESSION['user_data'] = true;
$_SESSION['email'] = $data['email'];
$_SESSION['nom'] = $data['nom'];
$_SESSION['prenom'] = $data['prenom'];
$_SESSION['telephone'] = $data['telephone'];

    header('Location: '.$uri.'/appKlaxon/templates/adminPage.php');
    
}

/**
 * 
 * Si l'une des conditions n'est pas remplie, redirectionne vers la page d'erreur
 */

else {

header('Location: '.$uri.'/appKlaxon/templates/loginError.php');

}


?>