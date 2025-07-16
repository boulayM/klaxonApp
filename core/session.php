<?php
// Start the session
session_start();

require_once 'db.php';
// Check if the form is submitted
$email = $_POST['email'];
$password = $_POST['keypass'];
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
if ($data ['email'] == $email && $data ['password'] == $password && $data ['role'] === "user") {
    $name = htmlspecialchars ($_POST["email"]);
    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
    exit();
    /*
    $_SESSION['account_loggedin'] = true;
    $_SESSION['account_email'] = $email;*/
} 

if ($data ['email'] == $email && $data ['password'] == $password && $data ['role'] === "admin") {
    $name = htmlspecialchars ($_POST["email"]);
    header('Location: '.$uri.'/appKlaxon/templates/adminPage.php');
    /*
    $_SESSION['account_loggedin'] = true;
    $_SESSION['account_email'] = $email;*/
}
else {

header('Location: '.$uri.'/appKlaxon/templates/loginError.php');

}

?>