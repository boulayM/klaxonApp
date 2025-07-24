<?php
class addTrajet {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function addTrajet($depart, $arrivee, $date_depart, $heure_depart, 
    $date_arrivee, $heure_arrivee, $nbr_places, $places_dispo, $contact) {
        $stmt = $this->pdo->prepare("INSERT INTO trajets (depart, arrivee, date_depart, heure_depart, date_arrivee, 
        heure_arrivee, nbr_places, places_dispo, contact) VALUES (':depart', ':arrivee', ':date_depart', ':heure_depart', 
        ':date_arrivee', ':heure_arrivee', ':nbr_places', ':places_dispo', ':contact')");
        return $stmt->execute([':depart'=>$depart, ':arrivee'=>$arrivee, ':date_depart'=>$date_depart, ':heure_depart'=>$heure_depart, 
    ':date_arrivee'=>$date_arrivee, ':heure_arrivee'=>$heure_arrivee, ':nbr_places'=>$nbr_places, ':places_dispo'=>$places_dispo,
 ':contact'=>$contact]);
    }

}
?>