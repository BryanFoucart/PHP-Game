<?php

$Genre = null;
$Age = -1;

while ($Genre != "M" && $Genre != "F") {
    $Genre = readline("Entrez votre genre (M/F) : ");
    if ($Genre == 'M') {
        echo "Vous avez choisi : Masculin.\n";
    } elseif ($Genre == 'F') {
        echo "Vous avez choisi : Féminin.\n";
    } else {
        echo "Choix invalide. Veuillez entrer 'M' pour Masculin ou 'F' pour Féminin.\n";
    }
}

if ($Genre == "M") {
    $Genre = "Masculin";
} elseif ($Genre == "F") {
    $Genre = "Féminin";
}

while ($Age < 0 || $Age > 120) {
    $Age = readline("Entrez votre age : ");
    if ($Age  < 0 || $Age > 120) {
        echo "Age invalide. Veuillez entrer un âge entre 0 et 120.\n";
    } else {
        echo "Vous avez $Age ans.\n";
    }
}

if ($Genre == "Masculin" && $Age >= 20) {
    echo "Vous êtes imposable";
} elseif ($Genre == "Féminin" && $Age >= 18 && $Age <= 35) {
    echo "Vous êtes imposable";
} elseif ($Genre == "Masculin" && $Age < 18 || $Age > 35) {
    echo "Vous n'êtes pas imposable";
} else {
    echo "Vous n'êtes pas imposable";
}
