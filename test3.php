<?php
$Ancienneté = 0;
$NbAccident = 0;
$Age = 0;
$AnnéePermis = 0;
$Score = 0;

$NbAccident = readline("Nombre d'accident : ");
$Age = readline("Age : ");
$AnnéePermis = readline("Année du permis : ");
$Ancienneté = readline("Ancienneté : ");

if ($NbAccident == 0) {
    $Score = $Score + 1;
} elseif ($NbAccident == 1) {
    $Score = $Score - 1;
} elseif ($NbAccident >= 2) {
    $Score = $Score - 2;
}

if ($Age <= 25) {
    $Score = $Score;
} else {
    $Score = $Score + 1;
}
if ($AnnéePermis <= 2) {
    $Score = $Score;
} else {
    $Score = $Score + 1;
}

if ($Ancienneté >= 5 && $Score >= 0) {
    $Score = $Score + 1;
} elseif ($Ancienneté <= 5 || $Score < 0) {
    $Score = $Score;
}

if ($Score < 0)
    echo "Tarif : Vous n'êtes pas éligible\n";
elseif ($Score == 0)
    echo "Tarif : Rouge\n";
elseif ($Score == 1)
    echo "Tarif : Orange\n";
elseif ($Score == 2)
    echo "Tarif : Vert\n";
elseif ($Score == 3)
    echo "Tarif : Bleu\n";
echo "Score : $Score\n";
