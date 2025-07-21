<?php

require_once '../core/db.php';

// Requête pour modifier les données
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $ville = $_POST['ville'];

    $sql = "UPDATE agences SET ville = '$ville' WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    // Exécuter la requête

    if ($stmt->execute()) {
        header('Location: '.$uri.'/appKlaxon/templates/agencesList.php');
        exit;
    } else {
        echo "Erreur lors de la mise à jour de l'agence : " . $conn->error;
    }

    $stmt->close();
}   

?>
