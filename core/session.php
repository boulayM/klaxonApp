<?php
// Start the session
session_start();
$host = 'localhost';
$user = 'klaxonadmin';
$password = '2xTa_Q*7';
$dbname = 'klaxon_bd';
// Try and connect using the info above
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['keypass'];
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
if ($data ['email'] == $email && $data ['password'] == $password) {
    $name = htmlspecialchars ($_POST["email"]);
    header('Location: '.$uri.'/appKlaxon/templates/usersPage.php');
    /*
    $_SESSION['account_loggedin'] = true;
    $_SESSION['account_email'] = $email; */
} 
else {

header('Location: '.$uri.'/appKlaxon/templates/loginError.php');

}

?>