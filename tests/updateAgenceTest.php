<?php
/**
 * Classe de test pour la classe updateAgence.
 *
 * Cette classe utilise PHPUnit pour tester la méthode updateAgence de la classe updateAgence.
 * Elle simule les objets PDO et PDOStatement afin de vérifier que la méthode effectue correctement
 * la mise à jour d'une agence dans la base de données.
 *
 * Méthodes :
 * - setUp() : Prépare les mocks nécessaires avant chaque test.
 * - testUpdateAgence() : Vérifie que la méthode updateAgence exécute la requête SQL attendue
 *   et retourne true en cas de succès.
 *
 * @covers updateAgence
 */
require './classTest/updateAgence.php';
use PHPUnit\Framework\TestCase;

class updateAgenceTest extends TestCase {
    private $pdoMock;
    private $agence;

    protected function setUp(): void {
        // Crée une simulation du PDOStatement
        $this->pdoMock = $this->createMock(PDO::class);
        $this->agence = new updateAgence($this->pdoMock);
    }

    public function testUpdateAgence() {
        // Crée une simulation du PDO
        $stmtMock = $this->createMock(PDOStatement::class);
        $stmtMock->expects($this->once())
                 ->method('execute')
                 ->willReturn(true);

        // Configure le comportement du PDO
        $this->pdoMock->expects($this->once())
                      ->method('prepare')
                      ->with("UPDATE agences SET ville = :ville WHERE id = :id")
                      ->willReturn($stmtMock);

        // Execute la méthode et vérifie le résultat
        $result = $this->agence->updateAgence(1, 'Toulouse');
        $this->assertTrue($result);
    }
}

?>