<?php
class Joueur {
    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private string $nationalite;

    public function __construct(string $nom, string $prenom, string $date, string $nationalite) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime($date);
        $this->nationalite = $nationalite;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function getNaissance() {
        return $this->naissance->format('d/m/Y');
    }

    public function setNaissance(string $date) {
        $this->naissance = new DateTime($date);
    }

    public function getNationalite() {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite) {
        $this->nationalite = $nationalite;
    }

    public function __toString() {
        return "$this->nom $this->prenom";
    }
}
?>