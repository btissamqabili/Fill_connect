<?php

class Adherent
{
    private ?int $id_adherent;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $telephone;
    private int $id_salle;

    public function __construct(
        ?int $id_adherent,
        string $nom,
        string $prenom,
        string $email,
        string $telephone,
        int $id_salle
    ) {
        $this->id_adherent = $id_adherent;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->id_salle = $id_salle;
    }

    public function getIdAdherent(): ?int
    {
        return $this->id_adherent;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getIdSalle(): int
    {
        return $this->id_salle;
    }

    public function setIdSalle(int $id_salle): void
    {
        $this->id_salle = $id_salle;
    }
}
?>