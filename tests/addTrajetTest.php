<?php

/**
 * Classe de test unitaire pour la classe AddTrajet.
 *
 * Cette classe utilise PHPUnit pour tester la méthode addTrajet de la classe AddTrajet.
 * Elle simule les objets PDO et PDOStatement afin de vérifier que la méthode prépare et exécute
 * correctement la requête d'insertion d'un trajet dans la base de données.
 *
 * Méthodes :
 * - testAddTrajet() : Vérifie que la méthode addTrajet prépare la requête SQL avec les bons paramètres
 *   et exécute correctement l'insertion, en retournant true en cas de succès.
 *
 * Dépendances :
 * - PHPUnit\Framework\TestCase
 * - AddTrajet (classe à tester)
 */

require './classTest/addTrajet.php';
use PHPUnit\Framework\TestCase;


class addTrajetTest extends TestCase
{
    public function testAddTrajet() {
        // Crée une simulation du PDOStatement
        $mockStatement = $this->createMock(PDOStatement::class);
        $mockStatement->expects($this->once())
                      ->method('execute')
                      ->with([':depart'=>'Paris', ':arrivee'=>'Toulouse', ':date_depart'=>'30/07/2025', ':heure_depart'=>'08:00', 
    ':date_arrivee'=>'30/07/2025', ':heure_arrivee'=>'14:00', ':nbr_places'=>3, ':places_dispo'=>2,
 ':contact'=>12])
                      ->willReturn(true);

        // Crée une simulation du PDO
        $mockPDO = $this->createMock(PDO::class);
        $mockPDO->expects($this->once())
                ->method('prepare')
                ->with("INSERT INTO trajets (depart, arrivee, date_depart, heure_depart, date_arrivee, 
        heure_arrivee, nbr_places, places_dispo, contact) VALUES (':depart', ':arrivee', ':date_depart', ':heure_depart', 
        ':date_arrivee', ':heure_arrivee', ':nbr_places', ':places_dispo', ':contact')")
                ->willReturn($mockStatement);

        // Instancie le trajet avec la simulation du PDO
        $trajet = new AddTrajet($mockPDO);

        // Execute la méthode et vérifie le résultat
        $result = $trajet->addTrajet('Paris', 'Toulouse', '30/07/2025','08:00', '30/07/2025', '14:00', 3, 2, 12);
        $this->assertTrue($result);
    }
}
?>