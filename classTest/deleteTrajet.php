<?php
class deleteTrajet {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function deleteItem($id) {
        $stmt = $this->pdo->prepare("DELETE FROM trajets WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>