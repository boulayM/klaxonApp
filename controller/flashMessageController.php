<?php

// Function to set Flash Messages
function setFlashMessage($message, $type = 'info') {
    $_SESSION['flash_message'] = [
        'message' => $message,
        'type' => $type
    ];
}

// Function to display flash messages

function displayFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message']['message'];
        $type = $_SESSION['flash_message']['type'];

        echo "<div class='flash-message flash-{$type}'>{$message}</div>";

        unset($_SESSION['flash_message']);
    }
}
?>