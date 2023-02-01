<?php
class Equipe {
    private string $nom;
    private array $listeJoueurs;

    public function __construct(string $nom) {
        $this->nom = $nom;
        $this->listeJoueurs = [];
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }
}
?>