<?php

class Seance
{
    private ?int $id_seance;
    private string $date_seance;
    private string $type_activite;
    private int $duree;
    private ?string $equipement_utilise;
    private int $id_adherent;
    private int $id_salle;

    public function __construct(
        ?int $id_seance,
        string $date_seance,
        string $type_activite,
        int $duree,
        ?string $equipement_utilise,
        int $id_adherent,
        int $id_salle
    ) {
        $this->id_seance = $id_seance;
        $this->date_seance = $date_seance;
        $this->type_activite = $type_activite;
        $this->duree = $duree;
        $this->equipement_utilise = $equipement_utilise;
        $this->id_adherent = $id_adherent;
        $this->id_salle = $id_salle;
    }

    public function getIdSeance(): ?int
    {
        return $this->id_seance;
    }

    public function getDateSeance(): string
    {
        return $this->date_seance;
    }

    public function setDateSeance(string $date): void
    {
        $this->date_seance = $date;
    }

    public function getTypeActivite(): string
    {
        return $this->type_activite;
    }

    public function setTypeActivite(string $type): void
    {
        $this->type_activite = $type;
    }

    public function getDuree(): int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): void
    {
        $this->duree = $duree;
    }

    public function getEquipementUtilise(): ?string
    {
        return $this->equipement_utilise;
    }

    public function setEquipementUtilise(?string $equipement): void
    {
        $this->equipement_utilise = $equipement;
    }

    public function getIdAdherent(): int
    {
        return $this->id_adherent;
    }

    public function getIdSalle(): int
    {
        return $this->id_salle;
    }
}
?>