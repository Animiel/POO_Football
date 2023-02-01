<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$joueur1 = new Joueur("Maradona", "Diego", "1971-02-25", "Argentine");

echo $joueur1->calculAge();
?>