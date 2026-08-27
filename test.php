<?php
require('film.php'); 

$film1 = new Film ("Sutter Island", "Martin Scorsese",  "En 1954, une meurtrière, extrêmement dangereuse, placée en centre de détention psychiatrique disparaît sur l'île de Shutter Island. Deux officiers du corps fédéral des marshals, Teddy Daniels et Chuck Aule, sont envoyés sur place pour enquêter. Très vite, Teddy Daniels comprend que le personnel de l'établissement cache quelque chose. Seul indice dont il dispose : un bout de papier sur lequel est griffonnée une suite de chiffres entrecoupée de lettres", "2010-02-24", "Horreur/Mystère", 8.2); 



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des films</title>
</head>
<body>
        <h1>Fiche du Film</h1>
        <h2> Titre : <?= $film1->getTitre();?></h2>
        <h2>Réalisateur : <?= $film1->getRealisateur(); ?></h2>
        <h2>Synopsis : </h2>
        <p><?= $film1->getSynopsis(); ?></p>
        <h2> Date de sortie : <?= $film1-> getDateDeSortie() ; ?></h2>
        <h2> Genre :<?= $film1->getGenre(); ?> </h2>
        <h2>Note : <?= $film1->getNote(); ?> </h2>


</body>
</html>