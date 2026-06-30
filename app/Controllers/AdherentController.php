<?php

require_once __DIR__ . '/../Services/AdherentService.php';

class AdherentController
{
    private $adherentService;

    public function __construct()
    {
        $this->adherentService =
            new AdherentService();
    }

    public function index()
    {
        return $this->adherentService
                    ->getAllAdherents();
    }

    public function store(
        $nom,
        $prenom,
        $email,
        $telephone,
        $id_salle
    ) {
        return $this->adherentService
                    ->createAdherent(
                        $nom,
                        $prenom,
                        $email,
                        $telephone,
                        $id_salle
                    );
    }

    public function show($id)
    {
        return $this->adherentService
                    ->getAdherentById($id);
    }

    public function update(
        $id,
        $nom,
        $prenom,
        $email,
        $telephone,
        $id_salle
    ) {
        return $this->adherentService
                    ->updateAdherent(
                        $id,
                        $nom,
                        $prenom,
                        $email,
                        $telephone,
                        $id_salle
                    );
    }

    public function delete($id)
    {
        return $this->adherentService
                    ->deleteAdherent($id);
    }
}
?>