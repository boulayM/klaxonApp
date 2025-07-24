<?php

/**
 * Classe de test pour la suppression d'un trajet.
 *
 * Cette classe utilise PHPUnit pour tester la méthode deleteItem de la classe deleteTrajet.
 * Elle simule les objets PDO et PDOStatement afin de vérifier que la suppression d'un trajet
 * avec un identifiant donné fonctionne correctement.
 *
 * Méthodes :
 * - testDeleteTrajet() : Vérifie que la méthode deleteItem retourne true lorsque la suppression réussit.
 *
 * Dépendances :
 * - PHPUnit\Framework\TestCase
 * - PDO
 * - PDOStatement
 * - deleteTrajet (classe à tester)
 */

require './classTest/deleteTrajet.php';
use PHPUnit\Framework\TestCase;

class deleteTrajetTest extends TestCase {
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
                ->with("DELETE FROM trajets WHERE id = :id")
                ->willReturn($mockStatement);

        // Instance du trajet avec le mock du PDO
        $trajet = new deleteTrajet($mockPDO);

        // Execute la méthode et vérifie le résultat
        $result = $trajet->deleteItem(1);
        $this->assertTrue($result);
    }
}
?>
