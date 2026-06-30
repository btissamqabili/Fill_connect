<?php

require_once __DIR__ . '/../Repositories/AdherentRepository.php';

class AdherentService
{
    private $adherentRepository;

    public function __construct()
    {
        $this->adherentRepository =
            new AdherentRepository();
    }

    public function getAllAdherents()
    {
        return $this->adherentRepository->findAll();
    }

    public function createAdherent(
        $nom,
        $prenom,
        $email,
        $telephone,
        $id_salle
    ) {
        return $this->adherentRepository->create(
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle
        );
    }

    public function getAdherentById($id)
    {
        return $this->adherentRepository->findById($id);
    }

    public function updateAdherent(
        $id,
        $nom,
        $prenom,
        $email,
        $telephone,
        $id_salle
    ) {
        return $this->adherentRepository->update(
            $id,
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle
        );
    }

    public function deleteAdherent($id)
    {
        return $this->adherentRepository->delete($id);
    }
}
?>