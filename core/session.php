<?php


// Start the session
session_start();


require_once 'db.php';

// Set the login variables

$email = $_POST['email'];
$password = $_POST['keypass'];

// Login logic

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
if ($data ['email'] == $email && $data ['password'] == $password && $data ['role'] === "user") {
    
    // Store user data in session
$_SESSION['user_data'] = true;
$_SESSION['email'] = $data['email'];
$_SESSION['nom'] = $data['nom'];
$_SESSION['prenom'] = $data['prenom'];
$_SESSION['telephone'] = $data['telephone'];
$_SESSION['id'] = $data['id'];

    
    // Redirect to the user page
    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
    
    exit();
   
} 


if ($data ['email'] == $email && $data ['password'] == $password && $data ['role'] === "admin") {

    // Store user data in session
$_SESSION['user_data'] = true;
$_SESSION['email'] = $data['email'];
$_SESSION['nom'] = $data['nom'];
$_SESSION['prenom'] = $data['prenom'];
$_SESSION['telephone'] = $data['telephone'];

    // Redirect to the admin page
    header('Location: '.$uri.'/appKlaxon/templates/adminPage.php');
    
}
else {

header('Location: '.$uri.'/appKlaxon/templates/loginError.php');

}


?>