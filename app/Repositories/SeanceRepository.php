<?php

require_once __DIR__ . '/../../config/Database.php';

class SeanceRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function findAll()
    {
        $sql = "SELECT seance.*,
                       adherent.nom,
                       adherent.prenom,
                       salle.nom_salle
                FROM seance
                JOIN adherent
                ON seance.id_adherent = adherent.id_adherent
                JOIN salle
                ON seance.id_salle = salle.id_salle";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM seance
                WHERE id_seance = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        $date_seance,
        $type_activite,
        $duree,
        $equipement_utilise,
        $id_adherent,
        $id_salle
    ) {
        $sql = "INSERT INTO seance
                (date_seance,
                 type_activite,
                 duree,
                 equipement_utilise,
                 id_adherent,
                 id_salle)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $date_seance,
            $type_activite,
            $duree,
            $equipement_utilise,
            $id_adherent,
            $id_salle
        ]);
    }

    public function update(
        $id,
        $date_seance,
        $type_activite,
        $duree,
        $equipement_utilise,
        $id_adherent,
        $id_salle
    ) {
        $sql = "UPDATE seance
                SET date_seance = ?,
                    type_activite = ?,
                    duree = ?,
                    equipement_utilise = ?,
                    id_adherent = ?,
                    id_salle = ?
                WHERE id_seance = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $date_seance,
            $type_activite,
            $duree,
            $equipement_utilise,
            $id_adherent,
            $id_salle,
            $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM seance
                WHERE id_seance = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}