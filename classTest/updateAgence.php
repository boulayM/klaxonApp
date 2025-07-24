<?php
class updateAgence {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function updateAgence($ville) {
        $stmt = $this->pdo->prepare("UPDATE agences SET ville = :ville WHERE id = :id");
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}
?>