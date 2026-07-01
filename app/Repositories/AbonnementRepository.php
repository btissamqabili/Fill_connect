<?php

require_once __DIR__ . '/../../config/Database.php';

class AbonnementRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function findAll()
    {
        $sql = "SELECT a.*, ad.nom, ad.prenom
                FROM abonnement a
                JOIN adherent ad
                ON a.id_adherent = ad.id_adherent";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM abonnement
                WHERE id_abonnement = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        $type_abonnement,
        $date_debut,
        $date_fin,
        $id_adherent
    ) {
        $sql = "INSERT INTO abonnement
                (type_abonnement, date_debut, date_fin, id_adherent)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $type_abonnement,
            $date_debut,
            $date_fin,
            $id_adherent
        ]);
    }

    public function update(
        $id,
        $type_abonnement,
        $date_debut,
        $date_fin,
        $id_adherent
    ) {
        $sql = "UPDATE abonnement
                SET type_abonnement = ?,
                    date_debut = ?,
                    date_fin = ?,
                    id_adherent = ?
                WHERE id_abonnement = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $type_abonnement,
            $date_debut,
            $date_fin,
            $id_adherent,
            $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM abonnement
                WHERE id_abonnement = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}
?>