<?php
class addAgence {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function addAgence($ville) {
        $stmt = $this->pdo->prepare("INSERT INTO agences (ville) VALUES (?)");
        $stmt->bindParam('?', $ville, PDO::PARAM_STR);
        return $stmt->execute(['?'=>$ville]);
    }

}
?>