<?php

require_once __DIR__ . '/../Services/AbonnementService.php';

class AbonnementController
{
    private $abonnementService;

    public function __construct()
    {
        $this->abonnementService =
            new AbonnementService();
    }

    public function index()
    {
        return $this->abonnementService
            ->getAllAbonnements();
    }

    public function show($id)
    {
        return $this->abonnementService
            ->getAbonnementById($id);
    }

    public function store(
        $type,
        $dateDebut,
        $dateFin,
        $idAdherent
    ) {
        return $this->abonnementService
            ->createAbonnement(
                $type,
                $dateDebut,
                $dateFin,
                $idAdherent
            );
    }

    public function update(
        $id,
        $type,
        $dateDebut,
        $dateFin,
        $idAdherent
    ) {
        return $this->abonnementService
            ->updateAbonnement(
                $id,
                $type,
                $dateDebut,
                $dateFin,
                $idAdherent
            );
    }

    public function delete($id)
    {
        return $this->abonnementService
            ->deleteAbonnement($id);
    }
}
?>