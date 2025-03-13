<?php
$N = rand(1, 100);
$Tentative = 0;
$T = 0;
while ($T <> $N) {
    $T = readline("Veuillez saisir une tentative : ");
    $Tentative = $Tentative + 1;

    if ($T > $N && $T < 100) {
        echo "Trop grand.\n";
    } elseif ($T < $N && $T > 0) {
        echo "Trop petit.\n";
    } elseif ($T < 0 || $T > 100) {
        echo "Le nombre doit être compris entre 0 et 100.\n";
    }
}
echo "C'est gagné !\n";
echo "Nombre de tentative : $Tentative\n";
do {
    $rejouer = readline("Voulez-vous rejouer ? (o/n) : ");
    if ($rejouer == "o") {
        include 'test2.php';
    } elseif ($rejouer == "n") {
        echo "Au revoir !\n";
        break;
    } else {
        echo "Veuillez saisir o ou n.\n";
    }
} while ($rejouer != "o" || $rejouer != "n");
