<?php

$host = 'localhost';
$user = 'klaxonadmin';
$password = '2xTa_Q*7';
$dbname = 'klaxon_bd';
// Try and connect using the info above
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>