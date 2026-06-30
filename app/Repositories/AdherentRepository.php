<?php

require_once __DIR__ . '/../../config/Database.php';

class AdherentRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function findAll()
    {
        $sql = "SELECT a.*, s.nom_salle
                FROM adherent a
                JOIN salle s ON a.id_salle = s.id_salle";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM adherent
                WHERE id_adherent = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        $nom,
        $prenom,
        $email,
        $telephone,
        $id_salle
    ) {
        $sql = "INSERT INTO adherent
                (nom, prenom, email, telephone, id_salle)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle
        ]);
    }

    public function update(
        $id,
        $nom,
        $prenom,
        $email,
        $telephone,
        $id_salle
    ) {
        $sql = "UPDATE adherent
                SET nom = ?,
                    prenom = ?,
                    email = ?,
                    telephone = ?,
                    id_salle = ?
                WHERE id_adherent = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle,
            $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM adherent
                WHERE id_adherent = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}
?>