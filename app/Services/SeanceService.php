<?php

require_once __DIR__ . '/../Repositories/SeanceRepository.php';

class SeanceService
{
    private $seanceRepository;

    public function __construct()
    {
        $this->seanceRepository = new SeanceRepository();
    }

    public function getAllSeances()
    {
        return $this->seanceRepository->findAll();
    }

    public function getSeanceById($id)
    {
        return $this->seanceRepository->findById($id);
    }

    public function createSeance(
        $date_seance,
        $type_activite,
        $duree,
        $equipement_utilise,
        $id_adherent,
        $id_salle
    ) {
        return $this->seanceRepository->create(
            $date_seance,
            $type_activite,
            $duree,
            $equipement_utilise,
            $id_adherent,
            $id_salle
        );
    }

    public function updateSeance(
        $id,
        $date_seance,
        $type_activite,
        $duree,
        $equipement_utilise,
        $id_adherent,
        $id_salle
    ) {
        return $this->seanceRepository->update(
            $id,
            $date_seance,
            $type_activite,
            $duree,
            $equipement_utilise,
            $id_adherent,
            $id_salle
        );
    }

    public function deleteSeance($id)
    {
        return $this->seanceRepository->delete($id);
    }
}