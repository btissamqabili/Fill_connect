<?php

require_once __DIR__ . '/../../config/Database.php';

class SalleRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }


    public function findAll()
    {
        $sql = "SELECT * FROM salle";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM salle WHERE id_salle = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create($nom_salle, $adresse)
    {
        $sql = "INSERT INTO salle (nom_salle, adresse)
                VALUES (?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom_salle,
            $adresse
        ]);
    }

    public function update($id, $nom_salle, $adresse)
    {
        $sql = "UPDATE salle
                SET nom_salle = ?, adresse = ?
                WHERE id_salle = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom_salle,
            $adresse,
            $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM salle WHERE id_salle = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}