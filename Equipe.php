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

    public function ajouterMercato(Mercato $mercato) {
        $this->listeJoueurs[] = $mercato;
    }

    public function afficherEquipe() {
        $result = "Voici la liste des joueurs de l'équipe $this :<br><ul>";
        foreach ($this->listeJoueurs as $joueur) {
            $result .= "<li>".$joueur->getJoueur()." (".$joueur->getSaison().")"."</li><br>";
        }
        $result .= "</ul>";
        return $result."<br>";
    }

    public function __toString() {
        return $this->nom;
    }
}
?>