<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    private $pdo;

    protected function setUp(): void
    {
        // Arrange: Configurer une base de données SQLite en mémoire
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, name TEXT)");
        $this->pdo->exec("INSERT INTO users (name) VALUES ('Alice'), ('Bob')");
    }

    public function testFetchUsers()
    {
        // Act: Exécuter la requête SQL
        $stmt = $this->pdo->query("SELECT * FROM users");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Assert: Vérifier les résultats
        $this->assertCount(2, $result);
        $this->assertEquals('Alice', $result[0]['name']);
        $this->assertEquals('Bob', $result[1]['name']);
    }

    protected function tearDown(): void
    {
        // Nettoyer après chaque test
        $this->pdo = null;
    }
}
?>