<?php
class Equipe {
    private string $nom;
    private array $listeJoueurs;
    private Pays $pays;

    public function __construct(string $nom, Pays $pays) {
        $this->nom = $nom;
        $this->pays = $pays;
        $this->listeJoueurs = [];
        $this->pays->ajouterEquipe($this);
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
        $result = "Voici la liste des joueurs de l'équipe $this ($this->pays) :<br><ul>";
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