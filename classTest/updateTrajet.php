<?php
class updateTrajet {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function updateTrajet($depart, $date_depart, $heure_depart, $arrivee, $date_arrivee, $heure_arrivee, $nbr_places, $places_dispo) {
        $stmt = $this->pdo->prepare("UPDATE trajets SET depart = :depart, date_depart = :date_depart, heure_depart = :heure_depart, 
        arrivee = :arrivee, date_arrivee = :date_arrivee, heure_arrivee = heure_arrivee, nbr_places = nbr_places, places_dispo = :places_dispo 
        WHERE id = :id");
        $stmt->bindParam(':depart', $depart);
        $stmt->bindParam(':date_depart', $date_depart);
        $stmt->bindParam(':heure_depart', $heure_depart);
        $stmt->bindParam(':arrivee', $arrivee);
        $stmt->bindParam(':date_arrivee', $date_arrivee);
        $stmt->bindParam(':heure_arrivee', $heure_arrivee);
        $stmt->bindParam(':nbr_places', $nbr_places, PDO::PARAM_INT);
        $stmt->bindParam(':places_dispo', $places_dispo, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

}
?>