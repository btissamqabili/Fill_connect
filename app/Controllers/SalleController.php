<?php

require_once __DIR__ . '/../Services/SalleService.php';

class SalleController
{
    private $salleService;

    public function __construct()
    {
        $this->salleService = new SalleService();
    }

    public function index()
    {
        return $this->salleService->getAllSalles();
    }

    public function store($nom_salle, $adresse)
    {
        return $this->salleService->createSalle(
            $nom_salle,
            $adresse
        );
    }

    public function show($id)
    {
        return $this->salleService->getSalleById($id);
    }

    public function update($id, $nom_salle, $adresse)
    {
        return $this->salleService->updateSalle(
            $id,
            $nom_salle,
            $adresse
        );
    }

    public function delete($id)
    {
        return $this->salleService->deleteSalle($id);
    }
}