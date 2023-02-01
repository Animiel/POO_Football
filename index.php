<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Exercice POO Foot</h1>
    <div class="joueurs">
<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$pays1 = new Pays("France");
$pays2 = new Pays("Allemagne");
$pays3 = new Pays("Argentine");
$pays4 = new Pays("Portugal");

$joueur1 = new Joueur("Maradona", "Diego", "1971-02-25", $pays3);
$joueur2 = new Joueur("Ronaldo", "Christiano", "1988-06-20", $pays4);

$equipe1 = new Equipe("FC Foot", $pays1);
$equipe2 = new Equipe("Foot FC", $pays2);

$mercato1 = new Mercato($equipe1, $joueur1, "2000-02-02");
$mercato2 = new Mercato($equipe1, $joueur2, "2006-02-02");
$mercato3 = new Mercato($equipe2, $joueur2, "2008-02-02");


echo $equipe1->afficherEquipe();
echo $equipe2->afficherEquipe();
?>
</div>

<div class="equipes">
<?php
echo $joueur2->afficherEquipe();
?>
</div>

<div class="pays">
<?php
echo $pays1->afficherEquipe();
echo $pays2->afficherEquipe();
?>
</div>
</main>

</body>
</html>