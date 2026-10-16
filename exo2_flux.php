<?php

// Partie 2 : Structures de contrôle et boucles
// Fichier : exo2_flux.php

// Inclusion du fichier de configuration
require_once 'config.php';

// Définition de la constante SEUIL si elle n'est pas déjà définie dans config.php
if (!defined('SEUIL')) {
    define('SEUIL', 10);
}


// Exercice 2.1 : if / elseif / else

// Fonction qui retourne la mention en fonction de la note
function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo "<h3>Exercice 2.1 : Test de la fonction mention()</h3>";

// Test de la fonction avec plusieurs notes
$notes_a_tester = [18, 15, 13, 11, 8];

foreach ($notes_a_tester as $note) {
    echo "Note : " . $note . " => Mention : " . mention($note) . "<br>";
}

echo "<hr>";


// Exercice 2.2 : switch

echo "<h3>Exercice 2.2 : Affichage du mois courant avec switch</h3>";

// 1. Récupération du mois courant au format numérique (01 à 12)
$mois_courant = date("m");

// 2. Affichage du nom du mois en français
switch ($mois_courant) {
    case "01":
        echo "Mois courant : Janvier<br>";
        break;
    case "02":
        echo "Mois courant : Février<br>";
        break;
    case "03":
        echo "Mois courant : Mars<br>";
        break;
    case "04":
        echo "Mois courant : Avril<br>";
        break;
    case "05":
        echo "Mois courant : Mai<br>";
        break;
    case "06":
        echo "Mois courant : Juin<br>";
        break;
    case "07":
        echo "Mois courant : Juillet<br>";
        break;
    case "08":
        echo "Mois courant : Août<br>";
        break;
    case "09":
        echo "Mois courant : Septembre<br>";
        break;
    case "10":
        echo "Mois courant : Octobre<br>";
        break;
    case "11":
        echo "Mois courant : Novembre<br>";
        break;
    case "12":
        echo "Mois courant : Décembre<br>";
        break;
    default:
        echo "Mois inconnu<br>";
        break;
}

/*
  3. Réponse à la question théorique :
  Si on oublie un instruction 'break' dans un 'case', PHP continue d'exécuter 
  les instructions des cases suivants sans vérifier leurs conditions. 
  C'est ce qu'on appelle le phénomène de "fall-through".
*/

?>