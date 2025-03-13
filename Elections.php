<?php
$TotalSuffrage = 0;
$ScoreCandidat1 = -1;
$ScoreCandidat2 = -1;
$ScoreCandidat3 = -1;
$ScoreCandidat4 = -1;

while ($ScoreCandidat1 < 0) {
    $ScoreCandidat1 = readline("Entrez le score du candidat 1 : ");
    if ($ScoreCandidat1 < 0) {
        echo "Score invalide. Veuillez entrer un score valide.\n";
    } else {
        echo "Le score du candidat 1 est de $ScoreCandidat1.\n";
    }
}

while ($ScoreCandidat2 < 0) {
    $ScoreCandidat2 = readline("Entrez le score du candidat 2 : ");
    if ($ScoreCandidat2 < 0) {
        echo "Score invalide. Veuillez entrer un score valide.\n";
    } else {
        echo "Le score du candidat 2 est de $ScoreCandidat2.\n";
    }
}

while ($ScoreCandidat3 < 0) {
    $ScoreCandidat3 = readline("Entrez le score du candidat 3 : ");
    if ($ScoreCandidat3 < 0) {
        echo "Score invalide. Veuillez entrer un score valide.\n";
    } else {
        echo "Le score du candidat 3 est de $ScoreCandidat3.\n";
    }
}

while ($ScoreCandidat4 < 0) {
    $ScoreCandidat4 = readline("Entrez le score du candidat 4 : ");
    if ($ScoreCandidat4 < 0) {
        echo "Score invalide. Veuillez entrer un score valide.\n";
    } else {
        echo "Le score du candidat 4 est de $ScoreCandidat4.\n";
    }
}

$TotalSuffrage = $ScoreCandidat1 + $ScoreCandidat2 + $ScoreCandidat3 + $ScoreCandidat4;

if ($TotalSuffrage / 2 < $ScoreCandidat1) {
    echo "Le candidat 1 est élu au premier tour avec $ScoreCandidat1 voix.\n";
} elseif ($TotalSuffrage / 4 <= $ScoreCandidat1 && $ScoreCandidat1 > $ScoreCandidat2 && $ScoreCandidat1 > $ScoreCandidat3 && $ScoreCandidat1 > $ScoreCandidat4) {
    echo "Le candidat 1 passe au second tour avec $ScoreCandidat1 voix et est donc en ballottage favorable.\n";
} elseif ($TotalSuffrage / 4 <= $ScoreCandidat1 && $ScoreCandidat1 < $ScoreCandidat2 || $ScoreCandidat1 < $ScoreCandidat3 || $ScoreCandidat1 < $ScoreCandidat4) {
    echo "Le candidat 1 passe au second tour avec $ScoreCandidat1 voix et est donc en ballottage défavorable.\n";
} elseif ($TotalSuffrage / 4 > $ScoreCandidat1) {
    echo "Le candidat 1 est battu avec $ScoreCandidat1 voix.\n";
}
