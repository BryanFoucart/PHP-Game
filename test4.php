<?php

$Genre = 0;
$Age = 0;

$Genre = readline("Entrez votre genre (Homme ou Femme) : ");
$Age = readline("Entrez votre âge : ");

if ($Genre == "Homme" && $Age >= 20) {
    echo "Vous êtes imposable";
} elseif ($Genre == "Femme" && $Age >= 18 && $Age <= 35) {
    echo "Vous êtes imposable";
} elseif ($Genre == "Femme" && $Age < 18 || $Age > 35) {
    echo "Vous n'êtes pas imposable";
} elseif ($Genre == "Homme" && $Age < 20) {
    echo "Vous n'êtes pas imposable";
} else {
    echo "Vous n'êtes pas imposable";
}
