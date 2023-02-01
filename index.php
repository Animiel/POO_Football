<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$joueur1 = new Joueur("Maradona", "Diego", "1971-02-25", "Argentine");
$joueur2 = new Joueur("Ronaldo", "Christiano", "1988-06-20", "Portugal");

$pays1 = new Pays("France");
$pays2 = new Pays("Allemagne");

$equipe1 = new Equipe("FC Foot", $pays1);
$equipe2 = new Equipe("Foot FC", $pays2);

$mercato1 = new Mercato($equipe1, $joueur1, "2000-02-02");
$mercato2 = new Mercato($equipe1, $joueur2, "2006-02-02");
$mercato3 = new Mercato($equipe2, $joueur2, "2008-02-02");


echo $equipe1->afficherEquipe();
echo $equipe2->afficherEquipe();
echo $joueur2->afficherEquipe();
echo $pays1->afficherEquipe();
?>