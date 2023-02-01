<?php
class Pays {
    private string $nom;
    private array $listeEquipes;

    public function __construct(string $nom) {
        $this->nom = $nom;
        $this->listeEquipes = [];
    }

    public function ajouterEquipe(Equipe $equipe) {
        $this->listeEquipes[] = $equipe;
    }

    public function afficherEquipe() {
        $result = "Les équipes appartenant au pays $this->nom sont :<br><ul>";
        foreach ($this->listeEquipes as $equipe) {
            $result .= "<li>".$equipe->getNom()."</li><br>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return $this->nom;
    }
}
?>