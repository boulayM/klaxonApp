
<?php

/**
 * Classe de test pour la classe updateTrajet.
 *
 * Cette classe utilise PHPUnit pour tester la méthode updateTrajet de la classe updateTrajet.
 * Elle crée des mocks pour PDO et PDOStatement afin de simuler les interactions avec la base de données.
 *
 * Méthodes :
 * - setUp() : Initialise les mocks nécessaires avant chaque test.
 * - testUpdateTrajet() : Vérifie que la méthode updateTrajet prépare et exécute correctement la requête SQL de mise à jour,
 *   et retourne true en cas de succès.
 *
 * @covers updateTrajet
 */

require './classTest/updateTrajet.php';
use PHPUnit\Framework\TestCase;

class updateTrajetTest extends TestCase {
    private $pdoMock;
    private $trajet;

    protected function setUp(): void {
        // Crée une simulation du PDOStatement
        $this->pdoMock = $this->createMock(PDO::class);
        $this->trajet = new updateTrajet($this->pdoMock);
    }

    public function testUpdateTrajet() {
        // Crée une simulation du PDO
        $stmtMock = $this->createMock(PDOStatement::class);
        $stmtMock->expects($this->once())
                 ->method('execute')
                 ->willReturn(true);

        // Configure le comportement du PDO
        $this->pdoMock->expects($this->once())
                      ->method('prepare')
                      ->with("UPDATE trajets SET depart = :depart, date_depart = :date_depart, heure_depart = :heure_depart, 
        arrivee = :arrivee, date_arrivee = :date_arrivee, heure_arrivee = heure_arrivee, nbr_places = nbr_places, places_dispo = :places_dispo 
        WHERE id = :id")
                      ->willReturn($stmtMock);

        // Execute la méthode et vérifie le résultat
        $result = $this->trajet->updateTrajet('Toulouse', '30/07/2025', '08:00', 'Marseille', '30/07/2025', '14:00', 3, 2, 6);
        $this->assertTrue($result);
    }
}

?>