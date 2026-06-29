<?php

require_once __DIR__ . '/../Repositories/SalleRepository.php';

class SalleService
{
    private $salleRepository;

    public function __construct()
    {
        $this->salleRepository = new SalleRepository();
    }

    public function getAllSalles()
    {
        return $this->salleRepository->findAll();
    }

    public function createSalle($nom_salle, $adresse)
    {
        return $this->salleRepository->create(
            $nom_salle,
            $adresse
        );
    }

    public function getSalleById($id)
    {
        return $this->salleRepository->findById($id);
    }

    public function updateSalle($id, $nom_salle, $adresse)
    {
        return $this->salleRepository->update(
            $id,
            $nom_salle,
            $adresse
        );
    }

    public function deleteSalle($id)
    {
        return $this->salleRepository->delete($id);
    }
}