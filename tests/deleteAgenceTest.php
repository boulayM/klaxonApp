<?php

/**
 * Classe de test unitaire pour la classe deleteAgence.
 *
 * Cette classe utilise PHPUnit pour tester la méthode deleteItem de la classe deleteAgence.
 * Elle simule les objets PDO et PDOStatement afin de vérifier que la suppression d'une agence
 * avec un identifiant donné fonctionne correctement.
 *
 * Méthodes :
 * - testDeleteAgence() : Vérifie que la méthode deleteItem exécute correctement la requête de suppression
 *   et retourne true lorsque la suppression réussit.
 */

require './classTest/deleteAgence.php';
use PHPUnit\Framework\TestCase;

class deleteAgenceTest extends TestCase {
    public function testDeleteItem() {
        // Crée une simulation du PDOStatement
        $mockStatement = $this->createMock(PDOStatement::class);
        $mockStatement->expects($this->once())
                      ->method('execute')
                      ->with([':id' => 1])
                      ->willReturn(true);

        // Crée une simulation du PDO
        $mockPDO = $this->createMock(PDO::class);
        $mockPDO->expects($this->once())
                ->method('prepare')
                ->with("DELETE FROM agences WHERE id = :id")
                ->willReturn($mockStatement);

        // Instance de l'agence avec le mock du PDO
        $agence = new deleteAgence($mockPDO);

        // Execute la méthode et vérifie le résultat
        $result = $agence->deleteItem(1);
        $this->assertTrue($result);
    }
}
?>
