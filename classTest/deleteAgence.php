<?php
//Classe de 
class deleteAgence {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function deleteItem($id) {
        $stmt = $this->pdo->prepare("DELETE FROM agences WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>