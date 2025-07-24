<?php

/**
 * Classe de test unitaire pour la classe AddAgence.
 *
 * Cette classe utilise PHPUnit pour tester la méthode addAgence de la classe AddAgence.
 * Elle simule les objets PDO et PDOStatement afin de vérifier que la méthode fonctionne
 * correctement sans avoir besoin d'une base de données réelle.
 *
 * Méthodes :
 * - testAddAgence() : Vérifie que l'ajout d'une agence avec la ville 'Paris' retourne true,
 *   en s'assurant que les méthodes prepare et execute sont appelées avec les bons paramètres.
 */

require './classTest/addAgence.php';
use PHPUnit\Framework\TestCase;

class addAgenceTest extends TestCase {
    public function testAddAgence() {
        // Crée une simulation du PDOStatement
        $mockStatement = $this->createMock(PDOStatement::class);
        $mockStatement->expects($this->once())
                      ->method('execute')
                      ->with(['?'=>'Paris'])
                      ->willReturn(true);

        // Crée une simulation du PDO
        $mockPDO = $this->createMock(PDO::class);
        $mockPDO->expects($this->once())
                ->method('prepare')
                ->with("INSERT INTO agences (ville) VALUES (?)")
                ->willReturn($mockStatement);

        // Instancie l'agence avec la simulation du PDO
        $agence = new AddAgence($mockPDO);

        // Execute la méthode et vérifie le résultat
        $result = $agence->addAgence('Paris');
        $this->assertTrue($result);
    }
}
?>