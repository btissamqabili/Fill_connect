<?php

require_once __DIR__ . '/../Repositories/AbonnementRepository.php';

class AbonnementService
{
    private $abonnementRepository;

    public function __construct()
    {
        $this->abonnementRepository =
            new AbonnementRepository();
    }

    public function getAllAbonnements()
    {
        return $this->abonnementRepository->findAll();
    }

    public function getAbonnementById($id)
    {
        return $this->abonnementRepository->findById($id);
    }

    public function createAbonnement(
        $type,
        $dateDebut,
        $dateFin,
        $idAdherent
    ) {
        return $this->abonnementRepository->create(
            $type,
            $dateDebut,
            $dateFin,
            $idAdherent
        );
    }

    public function updateAbonnement(
        $id,
        $type,
        $dateDebut,
        $dateFin,
        $idAdherent
    ) {
        return $this->abonnementRepository->update(
            $id,
            $type,
            $dateDebut,
            $dateFin,
            $idAdherent
        );
    }

    public function deleteAbonnement($id)
    {
        return $this->abonnementRepository->delete($id);
    }
}
?>