<?php
class Mercato {
    private DateTime $saison;
    private Equipe $equipe;
    private Joueur $joueur;

    public function __construct(Equipe $equipe, Joueur $joueur, string $saison) {
        $this->saison = new DateTime($saison);
        $this->equipe = $equipe;
        $this->equipe->ajouterMercato($this);
        $this->joueur = $joueur;
        $this->joueur->ajouterMercato($this);
    }

    public function getEquipe() {
        return $this->equipe;
    }

    public function getJoueur() {
        return $this->joueur;
    }

    public function getSaison() {
        return $this->saison->format('Y');
    }
}
?>