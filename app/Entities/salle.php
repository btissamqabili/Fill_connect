<?php

class Salle
{
    private ?int $id_salle;
    private string $nom_salle;
    private string $adresse;

    public function __construct(
        ?int $id_salle,
        string $nom_salle,
        string $adresse
    ) {
        $this->id_salle = $id_salle;
        $this->nom_salle = $nom_salle;
        $this->adresse = $adresse;
    }

    public function getIdSalle(): ?int
    {
        return $this->id_salle;
    }

    public function getNomSalle(): string
    {
        return $this->nom_salle;
    }

    public function setNomSalle(string $nom_salle): void
    {
        $this->nom_salle = $nom_salle;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }
}
?>