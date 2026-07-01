<?php

require_once __DIR__ . '/../Services/SeanceService.php';

class SeanceController
{
    private $seanceService;

    public function __construct()
    {
        $this->seanceService = new SeanceService();
    }

    public function index()
    {
        return $this->seanceService->getAllSeances();
    }

    public function show($id)
    {
        return $this->seanceService->getSeanceById($id);
    }

    public function store(
        $date_seance,
        $type_activite,
        $duree,
        $equipement_utilise,
        $id_adherent,
        $id_salle
    ) {
        return $this->seanceService->createSeance(
            $date_seance,
            $type_activite,
            $duree,
            $equipement_utilise,
            $id_adherent,
            $id_salle
        );
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
        return $this->seanceService->updateSeance(
            $id,
            $date_seance,
            $type_activite,
            $duree,
            $equipement_utilise,
            $id_adherent,
            $id_salle
        );
    }

    public function delete($id)
    {
        return $this->seanceService->deleteSeance($id);
    }
}